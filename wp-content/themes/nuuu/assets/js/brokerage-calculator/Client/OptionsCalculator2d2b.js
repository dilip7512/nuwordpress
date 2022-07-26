var optionsCalculator = (function () {

    function init() {
        onClickListner();
        //loadDateTimePicker();
    }

    function loadDateTimePicker() {
        var date = new Date();
        date.setDate(date.getDate() + 1);
        $('#dayExpiry').daterangepicker({
            singleDatePicker: true,
            timePicker: false,
            minDate: date,
            //startDate: moment().startOf('hour'), 
            locale: {
                format: 'DD-MM-YYYY',
            },
        });
    }

    function onClickListner() {
        $('#optionCalculateResult').on('click', calulateResult);
    }

    function calulateResult() {
        var inputObj = new InputObj();
        inputObj.validate();
        if (inputObj.errorList.length > 0)
            return;
        inputObj.expiry.setHours(23, 59, 59, 999);  //as options work always above 24 hours

        var seconds = Math.floor(inputObj.expiry - (new Date())) / 1000,
			minutes = Math.floor(seconds / 60),
			hours = Math.floor(minutes / 60),
			delta_t = (Math.floor(hours / 24)) / 365.0;

        $("#errors").css("display", "none");

        var d1 = (Math.log(inputObj.spotPrice / inputObj.strikePrice) + (inputObj.interestPerc / 100 + Math.pow(inputObj.volatilityPerc / 100, 2) / 2) * delta_t) / (inputObj.volatilityPerc / 100 * Math.sqrt(delta_t)),
			d2 = (Math.log(inputObj.spotPrice / inputObj.strikePrice) + (inputObj.interestPerc / 100 - Math.pow(inputObj.volatilityPerc / 100, 2) / 2) * delta_t) / (inputObj.volatilityPerc / 100 * Math.sqrt(delta_t));

        var fvStrikeParameter = (inputObj.strikePrice) * Math.exp(-1 * inputObj.interestPerc / 100 * delta_t);

        //For calculating CDF and PDF using gaussian library
        var distribution = gaussian(0, 1);

        var outputObj = new OutputObj();

        bindOuput();

        function bindOuput() {
            $('#optionOutputSection').show();
            var textRedClass = "";
            Object.keys(outputObj).forEach(function (key, index) {
                var eleId = '#' + key;
                var value = outputObj[key];
                textRedClass = Number(value) < 0 ? 'text-red' : '';

                if (!isNaN(outputObj[key])) {
                    value = outputObj[key].toFixed(3);
                    value = decimalLimitForSpecificPoint(key, value)
                }
                $(eleId).text(value)
                        .removeClass('text-red')
                        .addClass(textRedClass);
            });

            function decimalLimitForSpecificPoint(key, value) {
                if (key == 'callGamma' || key == 'putGamma')
                    return isNaN(value) ? value : Number(value).toFixed(4);
                return value;
            }
        }

        function OutputObj() {
            this.callPremium = inputObj.spotPrice * distribution.cdf(d1) - fvStrikeParameter * distribution.cdf(d2);
            this.putPremium = fvStrikeParameter * distribution.cdf(-1 * d2) - inputObj.spotPrice * distribution.cdf(-1 * d1);

            this.callDelta = distribution.cdf(d1);
            this.putDelta = this.callDelta - 1;

            this.callGamma = distribution.pdf(d1) / (inputObj.spotPrice * inputObj.volatilityPerc / 100 * Math.sqrt(delta_t));
            this.putGamma = this.callGamma;

            this.callVega = inputObj.spotPrice * distribution.pdf(d1) * Math.sqrt(delta_t) / 100
            this.putVega = this.callVega;

            this.callTheta = (-1 * inputObj.spotPrice * distribution.pdf(d1) * inputObj.volatilityPerc / 100 / (2 * Math.sqrt(delta_t)) - inputObj.interestPerc / 100 * fvStrikeParameter * distribution.cdf(d2)) / 365;
            this.putTheta = (-1 * inputObj.spotPrice * distribution.pdf(d1) * inputObj.volatilityPerc / 100 / (2 * Math.sqrt(delta_t)) + inputObj.interestPerc / 100 * fvStrikeParameter * distribution.cdf(-1 * d2)) / 365;

            this.callRho = fvStrikeParameter * delta_t * distribution.cdf(d2) / 100;
            this.putRho = -1 * fvStrikeParameter * delta_t * distribution.cdf(-1 * d2) / 100;
        }
    }

    function InputObj() {
        var days = $('#dayExpiry').val();
        
        this.spotPrice = Number($('#spotPrice').val());
        this.strikePrice = Number($('#strikePrice').val()); 
        this.expiry = moment(new Date()).add(days, 'days').toDate(); //moment($('#dayExpiry').val(), 'DD-MM-YYYY hh:mm A').toDate(); // $('#dayExpiry').val();
        this.interestPerc = Number($('#interestPerc').val());
        this.volatilityPerc = Number($('#volatilityPerc').val());
        this.dividentYield = Number($('#dividentYield').val());
        this.errorList = [];
        this.expiryFromYear = moment(this.expiry).toDate();
    }

    InputObj.prototype.validate = function () {

        var msg = 'Invalid Values'
        if (!this.spotPrice || isNaN(this.spotPrice))
            this.errorList.push({ $ele: $('#spotPrice'), msg: msg });

        if (!this.strikePrice || isNaN(this.strikePrice))
            this.errorList.push({ $ele: $('#strikePrice'), msg: msg });

        if (isNaN(this.interestPerc))
            this.errorList.push({ $ele: $('#interestPerc'), msg: msg });

        if (isNaN(this.dividentYield))
            this.errorList.push({ $ele: $('#dividentYield'), msg: msg });

        if (isNaN(this.volatilityPerc))
            this.errorList.push({ $ele: $('#volatilityPerc'), msg: msg });

        if (this.spotPrice < 0 || this.strikePrice < 0) {
            msg = "Spot and Strike price should be positive values";
            this.errorList.push({ $ele: $('#strikePrice'), msg: msg });
        }
        if (this.volatilityPerc < 0 || this.volatilityPerc > 100) {
            msg = "inputObj.volatilityPerc / 100ality should be between 0 - 100";
            this.errorList.push({ $ele: $('#volatilityPerc'), msg: msg });
        }
        if (this.interestPerc < 0 || this.interestPerc > 100) {
            msg = "Interest rate should be between 0 - 100";
            this.errorList.push({ $ele: $('#interestPerc'), msg: msg });
        }

        var hours = moment($('#dayExpiry').val()).format("hh");
        //if (hours < 24) {
        //	msg = "Expiry date should be minimum 24 hours from now";
        //	this.errorList.push({ $ele: $('#dayExpiry'), msg: msg });
        //}

        //hide all error;
        $('.help-block').hide();
        $('.help-block').parent().removeClass('has-error');

        this.errorList.forEach(function (item) {
            var $parent = item.$ele.parent();
            $parent.find('.help-block').show().text(item.msg);
            $parent.addClass('has-error');
        });
    }


    init();


})();
