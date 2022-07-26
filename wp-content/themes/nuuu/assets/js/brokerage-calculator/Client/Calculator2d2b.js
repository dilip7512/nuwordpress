var spanUI = null, marginUI = null, brokerageUI = null;
var leverageUI = (function () {
    $(document).ready(init);
    
    var textContext = {
        brokerageContent: "",
        SpanContent: ""
    }

    function init() {
        carousal();

        brokerageUI = new BrokerageUI();
        brokerageUI.init();

        marginUI = new MarginUI();
        marginUI.init();

        spanUI = new SpanUI();
        spanUI.init();

        siteCommonJS.enterBtnEvent(['#marginCalculateAnchor', '#optionCalculateResult']);

        function onTabBtnClick() {
            $('.calcTab').find('li').on('click', function (e) {
                $('#optionOutputSection,#spanErrorOutputSection,#marginOutPutSection').hide();
            })
        }
        function carousal() {
            $('.slick-theme').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                autoplay: false,
                autoplaySpeed: 3000,
                speed: 1200,
                adaptiveHeight: true
            });
        }

        //$(window).scrollTop($('.calculators-section').offset().top - 100);
    }

    // for brokerage calculator, this will handle all brokerage UI related thing
    function BrokerageUI() {

        this.init = function () {
            onChangeListner();
            onClickListener();
            setTrandingNContractList();
            onChangeListner();

            //to calculate for default values , setTimeout as some of element take time to load
            setTimeout(function () {
                getOutput()
            }, 1000);
        }

        this.validateCurrencyValue = function (ele) {
            var selectedSegment = getSelectedSegment();
            var decimalLimit = selectedSegment == constant.segment.CURRENCY ? 4 : 2;       //for currency, 4 decimal limit is re, matis bugid 8682
            siteCommonJS.validateMonetoryValue(ele, decimalLimit);
        }


        function onChangeListner() {
            //Radio btn onChange
            $('input[type=radio][name=radioInline]').change(function (e) {
                setTrandingNContractList();
                modifyExchangeToggle();
                getOutput();
            });

            //Input on Change
            $('#buyPrice,#sellPrice,#qty,.range-slider__range').on('input', function () {
                getOutput();
            });

            $('#transNContractType').on('change', function () {
                getOutput();
            });
        }

        function modifyExchangeToggle() {
            $('.bseBtn,.nseBtn').prop('disabled', false);
            $('.mcxBtn').hide();
            $('.bseNseToggle').show();

            var selectedSegment = getSelectedSegment();

            if (selectedSegment == constant.segment.CURRENCY || selectedSegment == constant.segment.FNO) {
                $('.bseBtn').prop('disabled', true).removeClass('active');
                $('.nseBtn').addClass('active');
            }
            if (selectedSegment == constant.segment.COMMODITY) {
                $('.bseNseToggle').hide();
                $('.mcxBtn').show();
            }
        }

        function onClickListener() {
            //Calculator Type like brokerage, margin,span etc
            //$('.calculatorType').on('click', function (e) {
            //    $('.calculatorType').parent().removeClass('active');
            //    $(this).parent().removeClass('active');
            //    var calulatorType = $(this).data('tabcalculator');

            //    $('.tabPaneCalculator').removeClass('active');
            //    $('#' + calulatorType).addClass('active');
            //});

            $('.btn-group.btn-group-switch').on('click', function () {
                getOutput();
            });
        }

        function bindOutputValues(outputObj) {
            var profitLossTextColor = Number(outputObj.netPNL) > 0 ? 'text-green' : 'text-red';

            siteCommonJS.convertObjToCurrencyFormat(outputObj);
            siteCommonJS.convertObjToCurrencyFormat(outputObj.taxNCharge);
            $('.turnOver').text(outputObj.turnOver);
            $('.brokerageAmt').text(outputObj.brokerage);
            $('.chargesNTaxes').text(outputObj.taxNCharge.totalTaxNCharges);
            $('.breakEven').text(outputObj.breakEven);
            $('.breakEvenPrice').text(outputObj.breakEvenPrice);
            $('.netPNL').text(outputObj.netPNL)
                .removeClass('text-green')
                .removeClass('text-red')
                .addClass(profitLossTextColor);

            bindChargesToolTip();

            function bindChargesToolTip() {
                var taxNChargeObj = outputObj.taxNCharge;
                if (!taxNChargeObj) return;

                $('.ttStampDuty').text(taxNChargeObj.stampDuty);
                $('.ttTransactionCharges').text(taxNChargeObj.exchangeCharge);
                $('.ttGST').text(taxNChargeObj.gst);
                $('.ttStt').text(taxNChargeObj.stt);
                $('.ttSebiCharges').text(taxNChargeObj.sebiCharge);
            }
        }


        function BrokerCalculatorObj() {
            var inputObj = new InputObj();
            inputObj.validate();

            this.errorList = inputObj.errorList;
            this.buyPrice = inputObj.bp;
            this.sellPrice = inputObj.sp;
            this.qty = inputObj.qty;
            this.calculatorType = getSelectedCalculator();
            //this.stateMaster = getSelectedState();
            this.segment = getSelectedSegment();
            this.exchange = getSelectedExchange();
            this.tradingNContractType = getSelectedTradingType();
        }

        function getOutput() {
            var inputObj = new BrokerCalculatorObj();
            if (inputObj.errorList.length > 0)
                return;

            var brokerageCalc = new BrokerageCalculator(inputObj);

            if (brokerageCalc.errorArray.length > 0) {
                return alert("ERROR");
            }

            if (inputObj.segment == constant.segment.EQ) {
                var eqCalulator = new brokerageCalc.eqCalculator();
                if (inputObj.tradingNContractType == constant.tradingNContractType.DELIVERY)
                    new eqCalulator.deliveryCalculation();

                if (inputObj.tradingNContractType == constant.tradingNContractType.INTRADAY)
                    new eqCalulator.intradayCalculation();

                if (inputObj.tradingNContractType == constant.tradingNContractType.EMF)
                    new eqCalulator.emfCalculation();
            }
            if (inputObj.segment == constant.segment.FNO) {
                new brokerageCalc.fnoCalculator();
            }

            if (inputObj.segment == constant.segment.CURRENCY)
                new brokerageCalc.currencyCalculator();

            if (inputObj.segment == constant.segment.COMMODITY)
                new brokerageCalc.commodityCalculator();

            var outputObj = brokerageCalc.outputObj;
            bindOutputValues(outputObj);
        }

        function getSelectedCalculator() {
            var activeType = $('.nav.nav-tabs').find('.active').find('a:first').data('tabcalculator');
            return activeType;
        }

        function getSelectedSegment() {
            return $("input[name='radioInline']:checked").val()
        }

        function InputObj() {
            this.bp = getNum($('#buyPrice').val());
            this.sp = getNum($('#sellPrice').val());
            this.qty = getNum($('#qty').val());
        }

        InputObj.prototype.validate = function () {
            var validationMsgObj = constant.validationMsg.brokerageCalcValidation;
            this.errorList = [];
            if (!this.qty)
                this.errorList.push({ $ele: $('#qty'), msg: validationMsgObj.QTY_ERROR });

            if (!this.bp && !this.sp)
                this.errorList.push({ $ele: $('#buyPrice'), msg: validationMsgObj.BUY_ERROR });

            //if (!this.sp && !this.bp)
            //    this.errorList.push({ $ele: $('#sellPrice'), msg: validationMsgObj.SELL_ERROR });

            //clear all error;
            $('.help-block').hide().text('');
            $('.help-block').parent().removeClass('has-error');

            this.errorList.forEach(function (item) {
                var $parent = item.$ele.parent();
                $parent.find('.help-block').text(item.msg).show();
                $parent.addClass('has-error');
            })
        }

        function getSelectedTradingType() {
            return $('#transNContractType').val();
        }

        //this will set list in select based on selected segment
        function setTrandingNContractList() {
            var selectedSegment = getSelectedSegment();
            var tradingNContractType = constant.tradingNContractType;
            var options = [];
            var $dropDown = $('#transNContractType');

            if (selectedSegment == constant.segment.EQ)
                options = [{ text: "DELIVERY", value: tradingNContractType.DELIVERY },
                { text: "EMF", value: tradingNContractType.EMF },
                { text: "INTRADAY", value: tradingNContractType.INTRADAY }];
            else
                options = [{ text: "Future - Carry Forward", value: tradingNContractType.FUTURE },
                { text: "Options - Carry forward", value: tradingNContractType.OPTIONS },
                { text: "Future - Intraday", value: tradingNContractType.FUTURE_INTRADAY },
                { text: "Options - Intraday", value: tradingNContractType.OPTION_INTRADAY }];

            $dropDown.empty();
            $dropDown.selectpicker('refresh');

            for (var i = 0; i < options.length; i++) {
                $dropDown.append($("<option />").val(options[i].value).text(options[i].text));
            }

            $dropDown.selectpicker('refresh');
        }

        function getSelectedState() {
            return {
                stateName: $('#StateId').find(":selected").text(),
                stampDuty: $('#StateId').find(":selected").val()
            }
        }

        function getSelectedExchange() {
            return $('.bseNseToggle').find('.active').data('exchange');
        }

    }

    function SpanUI() {

        var spanInputList = [],
            spanSelectedScript = {};

        this.init = function () {
            scriptAutoComplete();
            onClickListener();

            onChangeListener();

            siteCommonJS.enterBtnEvent([$('#dvspanAdd')]);
        }

        this.validateCurrencyValue = function (ele) {
            var selectedSegment = getExchange();
            var decimalLimit = selectedSegment == 'NSE_CURR' ? 4 : 2;       //for currency, 4 decimal limit is re, matis bugid 8682
            siteCommonJS.validateMonetoryValue(ele, decimalLimit);
        }

        function calulateResult() {
            if (spanInputList.length == 0)
                return alert('Please add script');

            $('#spanErrorOutputSection,#soanOutputSection').hide();
            $('.totalSpan,.scanRisk,.gem,.som,.positionValue,.spread').text('');
            $('.help-block').hide();

            ///getting this wierd err, when click on cal btn and if every input is ok, then the script
            //and qty text become red. No time to go in detail. so remove the err class.
            $('.help-block').parent().removeClass('has-error');
            spanCalculatorAJAX(spanInputList, onSuccess);

            function onSuccess(response) {
                siteCommonJS.hideLoader();

                if (response && response.messageCode == 0 && response.data) {
                    try {
                        $('.help-block').parent().removeClass('has-error');
                        $('.help-block').hide();
                        var output = JSON.parse(response.data);

                        if (!output || (typeof output.total === 'undefined')) {
                            throw ('No response from span ouput')
                        }

                        $('#soanOutputSection').show();

                        $('.totalSpan').text(output.total);
                        $('.scanRisk').text(output.scanrisk);
                        $('.gem').text(output.gemargin);

                        $('.som').text(output.som);
                        $('.positionValue').text(output.avnov);
                        $('.spread').text(output.spread);
                    } catch (e) {
                        $('#spanErrorOutputSection').show();
                        $('#soanOutputSection').hide();

                    }
                }
            }
        }

        this.deleteRow = function (e) {
            var uniqueId = $(e).parent().attr('id');
            $(e).parent().remove();

            spanInputList = spanInputList.filter(function (item) {
                return item.uniqueId != uniqueId;
            });

            if (spanInputList.length == 0)
                $('#dvspantable').hide();
        }

        function onClickListener() {
            $('#dvspanAdd').click(addRow);

            $('#spanOutputBtn').click(calulateResult);
        }

        function onChangeListener() {
            $('#buySellToggleSpan').on('change', scriptAutoComplete);
            $("#spanOptionType").on('change', function () {
                changeLabelName();
                scriptAutoComplete();
                disableStrikePrice();
                var selectedOption = $(this).val();

                function disableStrikePrice() {
                    if (selectedOption == 'FUT') {
                        $('#txtspanPrice').attr('disabled', true);
                    } else
                        $('#txtspanPrice').attr('disabled', false);
                }

                function changeLabelName() {
                    var option = getOptionType();
                    var name = option == "FUT" ? "Price" : "Strike Price";
                    $('#spanPriceLabel').text(name);
                }
            });

            $('#ddlspanExchange').on('change', function () {
                clearOuputNList();
            })

            $("#spanOptionType").change();

            $('#txtspanScrip').on('change', function () {
                var value = $(this).val();
                if (!value)
                    spanSelectedScript = {}
            })

        }

        function clearOuputNList() {
            $('#txtspanPrice').val('');
            $('#txtspanScrip').val('');
            $('#soanOutputSection').hide();
            $('#dvspantable').hide();
            spanInputList = [];

            var tableList = $('#dvspantable').find('.addData-content').not(':first')[0];
            if (tableList)
                tableList.remove();
        }

        function getOptionType() {
            var optionType = $("#spanOptionType").val();;
            return optionType;
        }

        function scriptAutoComplete() {
            $('#txtspanScrip').val('');
            spanSelectedScript = null;
            siteCommonJS.scriptAutoComplete($('#txtspanScrip'), onScriptSelected, getExchange, getOptionType);          //all script to display as of 25feb 2020;

            function onScriptSelected(event, ui) {
                spanSelectedScript = null;
                if (ui.item.value == '-1') {
                    return event.preventDefault();
                }
                spanSelectedScript = new siteCommonJS.ScriptObj(ui.item.objItem);
                $('#txtspanPrice').val(spanSelectedScript.strikePrice);
                $('#minLotQtyLabel').show().text("(Min lot qty: " + spanSelectedScript.minLotQty + ")");
                $("#txtspanQty").val(spanSelectedScript.minLotQty);
            }
        }

        function addRow() {
            var inputObj = new InputObj();
            inputObj.validateSpanObj();
            if (inputObj.errorList.length > 0)
                return;

            //there wont be price in options
            if (inputObj.futureOptionsType != 'FUT')
                inputObj.price = 0;
            spanInputList.push(inputObj);
            createRow();
            function createRow() {
                //  var className = inputObj.transactionType == 'buy' ? 'text-green' : 'text-red';
                var className = inputObj.transactionType == 'B' ? 'text-green' : 'text-red';
                $('#dvspantable').show();
                var clone = $('#spanTableContent').clone();
                clone.find('.scriptName').text(inputObj.scriptSymbol);

                clone.find('.type').text(inputObj.transactionType)
                    .removeClass('text-green')
                    .removeClass('text-red')
                    .addClass(className);

                clone.attr('id', inputObj.uniqueId);
                clone.find('.qty').text(inputObj.qty);
                clone.show();
                $("#dvspantable").append(clone);
                $('#txtspanScrip').focus();
            }
        }

        function InputObj() {
            this.futureOptionsType = getOptionType();
            this.scriptObj = spanSelectedScript;
            //this.scriptSymbol = this.scriptObj ? this.scriptObj.scriptSymbolWithExpiry : null;
            this.qty = $('#txtspanQty').val();
            this.uniqueId = siteCommonJS.createUniqueId();
            this.price = $('#txtspanPrice').val();
            var exc = getExchange();
            this.exchange = exc == 'NF' ? 'NSEFO' : (exc == 'NSE_CURR') ? 'NSECURR' : 'MCXFO';
            this.transactionType = getTransactionType();                //buy sell;
            var appendText = this.futureOptionsType != 'FUT' ?
                            ' ' + this.futureOptionsType + ' ' + this.price : "";
            this.scriptSymbol = this.scriptObj ? this.scriptObj.scriptSymbolWithExpiry + appendText : null;
            // this.strikePrice
        }

        InputObj.prototype.validateSpanObj = function () {
            this.errorList = [];
            if (this.toString() === "[object Window]") return;
            if ($.isEmptyObject(this.scriptObj))
                this.errorList.push({ $ele: $('#txtspanScrip'), msg: "Please select contract" });

            if (!this.qty)
                this.errorList.push({ $ele: $('#txtspanQty'), msg: "Please enter lot quantity" });

            if (this.qty && this.scriptObj && Number(this.qty) % Number(spanSelectedScript.minLotQty) != 0)
                this.errorList.push({ $ele: $('#txtspanQty'), msg: "Enter qty in multiple of lot qty" });


            if (!this.price)
                this.errorList.push({ $ele: $('#txtspanPrice'), msg: "Please enter price" });



            var isDuplicateScript = spanInputList.filter(x => x.scriptSymbol == this.scriptSymbol).length > 0;
            if (isDuplicateScript) {
                // alert("You have already added this contract");
                // this.errorList.push({ err: 'Contract already exists' });
            }
            //hide all error;
            $('.help-block').hide();
            $('.help-block').parent().removeClass('has-error');

            this.errorList.forEach(function (item) {
                if (!item || !item.$ele)
                    return;
                var $parent = item.$ele.parent();
                var errEle = $parent.find('.help-block');
                errEle.show().text(item.msg);
                $parent.addClass('has-error');
            });
        }

        function getExchange() {
            return $('#ddlspanExchange').val();
        }

        //return buy or sell
        function getTransactionType() {
            return $('#buySellToggleSpan').find('.active').data('type');
        }
    }

    // for calculator, this will handle all margin UI related thing
    function MarginUI() {
        var validationMsgObj = constant.validationMsg.marginCalcValidation;
        var selectedScript = {};

        this.init = function () {
            onChangeListener();
            onClickListner();
            scriptAutoComplete();
            disableOptionTypeForEquity();
        }

        function disableOptionTypeForEquity() {
            if (getSelectedSegment() == constant.segment.EQ) {
                $('.marginOptionTypeDiv,.marginStrikePriceDiv').hide();
               // $('.scriptMarginDiv,.marginQtyDiv').removeClass('col-sm-6 col-xs-6').addClass('col-sm-12 col-xs-12');
            } else {
                if (getOptionType() == 'FUT') {
                    $('.marginStrikePriceDiv').hide();
                } else
                    $('.marginStrikePriceDiv').show();
                $('.marginOptionTypeDiv').show();
                $('.scriptMarginDiv,.marginQtyDiv').removeClass('col-sm-12 col-xs-12').addClass('col-sm-6 col-xs-6');
            }
        }

        this.validateCurrencyValue = function (ele) {
            var selectedSegment = getSelectedSegment();
            var decimalLimit = selectedSegment == constant.segment.CURRENCY ? 4 : 2;       //for currency, 4 decimal limit is re, matis bugid 8682
            siteCommonJS.validateMonetoryValue(ele, decimalLimit);
        }

        function scriptAutoComplete() {
            var selectedSegment = getSelectedSegment();

            var $searchEle = $('#scriptId');
            siteCommonJS.scriptAutoComplete($('#scriptId'), onScriptSelected, getSelectedSegment, getOptionType);

            function onScriptSelected(event, ui) {
                selectedSegment = null;
                hideOutputBox();
                if (ui.item.value == '-1') {
                    return event.preventDefault();
                }
                selectedScript = new siteCommonJS.ScriptObj(ui.item.objItem);
                if (selectedSegment != constant.segment.EQ) {
                    $("#marginQty").val(selectedScript.minLotQty);
                    $('#txtMarginStrikePrice').val(selectedScript.strikePrice);
                }
                //new InputObj().validate();
            }
        }

        function getSelectedSegment() {
            return $('#segmentExhange').val();
        }

        function onClickListner() {
            $('#marginCalculateAnchor').on('click', calculateOutput);
            $('.marginBuySellSwitch').on('click', function () {
                new InputObj().validate();
            });
        }

        function onChangeListener() {
            $('#stopLossMISPlus,#marginPrice,#marginQty').on('input', function () {
                new InputObj().validate();
            });

            $('#segmentExhange').on('change', function () {
                selectedScript = {};
                $('#scriptId').val('');
                disableOptionTypeForEquity();
                scriptAutoComplete();
                hideOutputBox();
            });

            $("#marginOptionType").on('change', function () {
                changeLabelName();
                scriptAutoComplete();
                var selectedOption = $(this).val();
                disableStrikePrice();
                hideOutputBox();
                function disableStrikePrice() {
                    if (selectedOption == 'FUT') {
                        $('.marginStrikePriceDiv').hide();
                    } else
                        $('.marginStrikePriceDiv').show();
                }

                function changeLabelName() {
                    var option = getOptionType();
                    var name = option == "FUT" ? "Price" : "Strike Price";
                    $('#marginPriceLabel').text(name);
                }

            });

            $("#marginOptionType").change();                //trigger change event
        }

        function getOptionType() {
            return $("#marginOptionType").val();
        }

        function calculateOutput() {
            var inputObj = new InputObj();

            inputObj.validate();
            if (inputObj.errorList.length > 0) return;      //validation msg will be shown in validate();


            var spanMarginObj = new SpanMarginObj(inputObj);
            //alert(2)
            var marginCalc = new MarginCalculator(inputObj);
            if (marginCalc.errorArray.length > 0)
                return alert(marginCalc.errorArray[0])

            //if selected segment is EQ, no need to call span api
            if (inputObj.segment == constant.segment.EQ) {
                new marginCalc.EqMarginCalc();
                bindOutput(marginCalc.outputList);
                return hideCNF(true);
            }

            //call span api to get span Margin value to be used in formula.
            spanCalculatorAJAX([spanMarginObj], function (response) {
                if (response) {
                    try {
                        if (response && response.messageCode == 0) {
                            inputObj.spanObj = JSON.parse(response.data);
                        } else {
                            console.error("Error in span output")
                        }
                    } catch (e) {
                        alert('Some error occured. E10');
                    }

                    if (inputObj.segment == constant.segment.CURRENCY)
                        new marginCalc.CurrMarginCalc();

                    if (inputObj.segment == constant.segment.COMMODITY)
                        new marginCalc.CommodityMarginCalc();

                    if (inputObj.segment == constant.segment.FNO)
                        new marginCalc.FnOMarginCalc();
                    bindOutput(marginCalc.outputList);
                    hideCNF(false);
                }
            });

        }

        function hideCNF(isEquity) {
            if (isEquity) {
                $('.data-content.cnc').show();
                $('.data-content.cnf').hide();
                $('.data-content.emf').show();
            } else {
                $('.data-content.cnc').hide();
                $('.data-content.cnf').show();
                $('.data-content.emf').hide();
            }
        }

        function SpanMarginObj(inputObj) {
            this.scriptObj = inputObj.scriptObj;
            this.qty = inputObj.qty;
            this.price = inputObj.price;

            if (inputObj.segment == 'NF')
                this.exchange = 'NSEFO';

            if (inputObj.segment == 'NSE_CURR')
                this.exchange = 'NSECURR';

            if (inputObj.segment == 'MX_COMMODITY')
                this.exchange = 'MCXFO';

            var futureOptionsType = getOptionType();
            var appendText = futureOptionsType != 'FUT' ? ' ' + futureOptionsType + ' ' + inputObj.strikePrice : "";
            this.scriptSymbol = this.scriptObj.scriptSymbolWithExpiry + appendText;
            this.transactionType = inputObj.isBuy ? "B" : "S";
        }

        function bindOutput(outputList) {
            if (!outputList || outputList.length == 0)
                return alert(constant.validationMsg.ERROR_MSG);

            //hide all the outputSection
            $('#marginOutPutSection').show().find('.data-content').show();
            //set default output to all prod type element.
            $('.leverage').text('');
            $('.amount').text('-');

            var prodTypes = constant.productType;
            outputList.forEach(function (item) {
                siteCommonJS.convertObjToCurrencyFormat(item);
                var $ele = $('.' + item.types);                      //type will be cnc, emf,mis,misPlus;
                //if (item.types == prodTypes.CNC || item.types == prodTypes.EMF || item.types == prodTypes.CNF)
                //    $('.deliveryDataContent').show();
                //if (item.types == prodTypes.MIS || item.types == prodTypes.MIS_PLUS)
                //    $('.intradayDataContent').show();

                $ele.show();
                //$ele.find('.leverage').text('(' + item.leverage + 'X)');
                $ele.find('.amount').text(item.reqMargin);
                $ele.parent().show();
            });
            hideProductType();

            function hideProductType(item, prodTypes) {
                var $outputBox = $('#marginOutPutSection');
                $outputBox.show();
                $outputBox.find('.data-content').hide();
                var selectedSegment = getSelectedSegment();

                $outputBox.find('.deliveryDataContent').show();
                $outputBox.find('.intradayDataContent').show();

                if (selectedSegment == 'NF') {
                    $outputBox.find('.cnf').show();
                    $outputBox.find('.misPlus').show();
                }
                if (selectedSegment == 'NSE_CURR') {
                    $outputBox.find('.cnf').show();
                    $outputBox.find('.deliveryDataContent').show();
                    $outputBox.find('.intradayDataContent').hide();
                }

                if (selectedSegment == 'MX_COMMODITY') {
                    $outputBox.find('.cnf').show();
                    $outputBox.find('.mis').show();
                }
                if (selectedSegment == 'CASH') {
                    $outputBox.find('.cnc').show();
                    $outputBox.find('.mis').show();
                    $outputBox.find('.misPlus').show();
                    $outputBox.find('.emf').show();
                }
            }
        }

        function hideOutputBox() {
            $('#marginOutPutSection').hide();
        }

        function InputObj() {
            this.qty = getNum($('#marginQty').val());
            this.price = getNum($('#marginPrice').val());
            this.stopLoss = getNum($('#stopLossMISPlus').val());
            this.isBuy = getTransactionType() == constant.transactionType.BUY;
            this.scriptObj = $.isEmptyObject(selectedScript) ? null : selectedScript;
            this.errorList = [];
            this.segment = getSelectedSegment();
            this.futureOptionsType = getOptionType();
            this.strikePrice = $('#txtMarginStrikePrice').val();
        }

        InputObj.prototype.validate = function () {

            if (!this.qty)
                this.errorList.push({ $ele: $('#marginQty'), msg: validationMsgObj.QTY_ERROR });

            if (!this.price)
                this.errorList.push({ $ele: $('#marginPrice'), msg: validationMsgObj.PRICE_ERROR });

            // if (this.stopLoss != 0) {
                // if (this.isBuy && this.stopLoss >= this.price)
                    // this.errorList.push({ $ele: $('#stopLossMISPlus'), msg: validationMsgObj.BUY_SL_ERROR });

                // if (!this.isBuy && this.stopLoss <= this.price)
                    // this.errorList.push({ $ele: $('#stopLossMISPlus'), msg: validationMsgObj.SELL_SL_ERROR });
            // }

            if ($.isEmptyObject(this.scriptObj))
                this.errorList.push({ $ele: $('#scriptId'), msg: validationMsgObj.SCRIPT_ERROR });

            //clear all error;
            $('.help-block').hide().text('');
            $('.help-block').parent().removeClass('has-error');

            this.errorList.forEach(function (item) {
                var $parent = item.$ele.parent();
                $parent.find('.help-block').text(item.msg).show();
                $parent.addClass('has-error');
            })
        }

        //Buy or sell transaction
        function getTransactionType() {
            return $('.marginBuySellSwitch').find('.active').data('type');
        }
    }

    // this will get Number data type for qty, buy and sell.
    function getNum(val) {
        if (isNaN(val))
            return 0;
        return Number(val);
    }

})();


var BrokerageCalculator = function (inputObj) {

    var brokerageContext = this;

    this.errorArray = [];
    this.inputObj = inputObj;
    this.outputObj = {};

    var validate = validator.validateBrokerageCalc;

    if (!validate(inputObj, this.errorArray))
        return;

    this.eqCalculator = function () {
        var inputObj = brokerageContext.inputObj;
        var outputObj = brokerageContext.outputObj;

        this.deliveryCalculation = function () {
            var charges = constant.taxNCharges.equity.delivery;
            outputObj.turnOver = brokerageContext.calculateTurnOver();
            outputObj.brokerage = charges.brokerage/100 * outputObj.turnOver;
            brokerageContext.calculateTaxesNVariables(charges);
        }; 

        this.intradayCalculation = function () {
            var charges = constant.taxNCharges.equity.intraday;
            brokerageContext.isIntraday = true;
            outputObj.turnOver = brokerageContext.calculateTurnOver();
            brokerageContext.calculateBrokerageForDiffLegs(charges);
            brokerageContext.calculateTaxesNVariables(charges);
        }

        this.emfCalculation = function () {
            var charges = constant.taxNCharges.equity.emf;
            outputObj.turnOver = brokerageContext.calculateTurnOver();
            var perBrokerage = charges.brokerage / 100 * outputObj.turnOver;
            brokerageContext.calculateBrokerageForDiffLegs(charges, false);
           // outputObj.brokerage = perBrokerage > flatBrok ? flatBrok : perBrokerage;
            brokerageContext.calculateTaxesNVariables(charges);
        };
    }

    this.fnoCalculator = function () {
        var chargesObj = constant.taxNCharges.equity;
        fnCurrCommodityCal(chargesObj);
    } 

    this.currencyCalculator = function () {
        var chargesObj = constant.taxNCharges.currency;
        fnCurrCommodityCal(chargesObj);
    }

    this.commodityCalculator = function () {
        var chargesObj = constant.taxNCharges.commodity;
        fnCurrCommodityCal(chargesObj);
    }

    function fnCurrCommodityCal(chargesObj) {
        var inputObj = brokerageContext.inputObj;
        var outputObj = brokerageContext.outputObj;
        var charges = null, type = inputObj.tradingNContractType;
        var isOptions = false;

        if (type == constant.tradingNContractType.FUTURE)
            charges = chargesObj.futures;

        if (type == constant.tradingNContractType.OPTIONS) {
            charges = chargesObj.options;
            isOptions = true;
        }

        if (type == constant.tradingNContractType.FUTURE_INTRADAY) {
            brokerageContext.isIntraday = true
            charges = chargesObj.futuresIntraday;
        }

        if (type == constant.tradingNContractType.OPTION_INTRADAY) {
            brokerageContext.isIntraday = true;
            isOptions = true;
            charges = chargesObj.optionsIntraday;
        }

        outputObj.turnOver = brokerageContext.calculateTurnOver();
        brokerageContext.calculateBrokerageForDiffLegs(charges, isOptions);
        brokerageContext.calculateTaxesNVariables(charges);
    }

    this.calculateBrokerageForDiffLegs = function (charges, isOptions) {
        var inputObj = this.inputObj, outputObj = this.outputObj; 
        //is only buy or sell;
        var isSingleOrder = (inputObj.buyPrice && !inputObj.sellPrice) || (!inputObj.buyPrice && inputObj.sellPrice);

        if (isSingleOrder) {
            var flatBrokerage = charges.brokerageFlat;
            var brokerageOnSingleOrder = isOptions ? flatBrokerage : charges.brokerage / 100 * outputObj.turnOver ;  //for intrady options there is flat brokerage of 20 only
            var minBrokerageApplied = brokerageOnSingleOrder > flatBrokerage ? flatBrokerage : brokerageOnSingleOrder;
            outputObj.brokerage = minBrokerageApplied;
        } else {
            ///buy sell both occured
            var flatBrokerage = charges.brokerageFlat * 2;                                          //one for buy, one for sell;
            var brokerageOnBuySell = isOptions ? flatBrokerage : charges.brokerage / 100 * outputObj.turnOver;
            var minBrokerageApplied = brokerageOnBuySell > flatBrokerage ? flatBrokerage : brokerageOnBuySell;
            var isTradeInProfit = inputObj.sellPrice >= inputObj.buyPrice;
            var isIntraday = brokerageContext.isIntraday;
            if (isIntraday) {
                //if loss than apply brokerage on buy leg only.
                var buyBrokerage = inputObj.buyPrice * inputObj.qty * charges.brokerage / 100;
                if (isOptions)
                    buyBrokerage = charges.brokerageFlat;
                var minBuyBrokerage = buyBrokerage > charges.brokerageFlat ? charges.brokerageFlat : buyBrokerage
                outputObj.brokerage = isTradeInProfit ? minBrokerageApplied : minBuyBrokerage;        //if eq intraday and trade loss no brokerage.

            } else {
                outputObj.brokerage = minBrokerageApplied;
            }
        }
    }

    this.calculateTaxesNVariables = function (charges) {
        var outputObj = this.outputObj;
        var typeList = constant.tradingNContractType
        var tradingType = this.inputObj.tradingNContractType;
        var exchangeTransactionPerc = inputObj.exchange == constant.exchanges.BSE ?
                                      charges.transactionChargesBSE : charges.transactionCharge;
        var taxNCharge = {
            stt: charges.stt / 100 * outputObj.turnOver,
            exchangeCharge: exchangeTransactionPerc / 100 * outputObj.turnOver,
            sebiCharge: charges.sebi * outputObj.turnOver,
            stampDuty: brokerageContext.calculateStampDuty(charges)                                       //inputObj.stateMaster.stampDuty / 100 * outputObj.turnOver,
        }

        //for intraday or future options
        if (tradingType == typeList.INTRADAY || tradingType == typeList.FUTURE ||
            tradingType == typeList.OPTIONS || tradingType == typeList.FUTURE_INTRADAY ||
            tradingType == typeList.OPTION_INTRADAY) {
            var inObj = this.inputObj;
            taxNCharge.stt = 0;                 //if only buy.
            if(inObj.sellPrice){    
                taxNCharge.stt = inObj.segment == 'CASH'? (outputObj.turnOver / 2 * charges.sttOnSell / 100) : 
                    (inputObj.sellPrice* inputObj.qty * charges.sttOnSell / 100);
            } 
        }

        taxNCharge.gst = (taxNCharge.exchangeCharge + outputObj.brokerage) * charges.gst / 100;
        taxNCharge.totalTaxNCharges = taxNCharge.gst + taxNCharge.exchangeCharge + taxNCharge.stt +
                                        taxNCharge.sebiCharge + taxNCharge.stampDuty;
        outputObj.taxNCharge = taxNCharge;
        outputObj.breakEven = brokerageContext.calculateBreakEvenPoint();
        outputObj.breakEvenPrice = brokerageContext.calculateBreakEvenPrice();
        outputObj.netPNL = brokerageContext.calculateProfitNLoss();
    }

    this.calculateTurnOver = function () {
        var inputObj = this.inputObj;
        return inputObj.qty * (inputObj.buyPrice + inputObj.sellPrice);
    }

    this.calculateBreakEvenPoint = function () {
        var inputObj = this.inputObj, outputObj = this.outputObj;
        return (outputObj.brokerage + outputObj.taxNCharge.totalTaxNCharges) / inputObj.qty;
    }

    this.calculateBreakEvenPrice = function () {
        var inputObj = this.inputObj, outputObj = this.outputObj;
        var breakEven = outputObj.breakEven;
        if (inputObj.buyPrice != 0 && inputObj.sellPrice != 0)
            return breakEven + inputObj.buyPrice;
        return inputObj.sellPrice - breakEven;
    }

    this.calculateProfitNLoss = function () {
        var inputObj = this.inputObj, outputObj = this.outputObj;
        var breakEvenPrice = outputObj.breakEvenPrice;
        var isZero = inputObj.buyPrice == 0 || inputObj.sellPrice == 0
        return isZero ? 0 : inputObj.qty * (inputObj.sellPrice - breakEvenPrice);
    }

    this.calculateStampDuty = function (charges) {
        var inputObj = this.inputObj;
        return inputObj.buyPrice * inputObj.qty * charges.stampDuty / 100;
    }
};

var MarginCalculator = function (inputObj) {
    var validate = validator.validateMarginCalc, self = this;

    this.errorArray = [];
    this.outputList = [];
    if (!validate(inputObj, this.errorArray))
        return;

    var scriptDet = inputObj.scriptObj;


    var productList = scriptDet.productTypes;
    var typeConstant = constant.productType;
    if (productList.length == 0) return;

    this.EqMarginCalc = function () {
        var outputList = self.outputList;
        productList.forEach(function (item, i) {
            var productTypeName = item;
            switch (productTypeName) {
                case typeConstant.EMF:
                    var output = new OutputResult(productTypeName);
                    output.orderValues = inputObj.qty * inputObj.price;
                    output.reqMargin = inputObj.qty * inputObj.price * scriptDet.emfPerc / 10000;
                    outputList.push(output);
                    break;
                case typeConstant.MIS:
                    var output = new OutputResult(productTypeName);
                    output.orderValues = inputObj.qty * inputObj.price;
                    output.reqMargin = inputObj.qty * inputObj.price * scriptDet.misPerc / 10000;
                    outputList.push(output);
                    break;
                case typeConstant.CNC:
                    var output = new OutputResult(productTypeName);
                    output.orderValues = inputObj.qty * inputObj.price;
                    output.reqMargin = inputObj.qty * inputObj.price;
                    outputList.push(output);
                    break;

                case typeConstant.MIS_PLUS:
                    var output = new OutputResult(productTypeName);
                    output.orderValues = inputObj.qty * inputObj.price;
                    var margin = inputObj.isBuy ?
                        ((inputObj.price - inputObj.stopLoss) + (inputObj.price * scriptDet.riskPaddingPerc / 10000)) * inputObj.qty :
                        ((inputObj.stopLoss - inputObj.price) + (inputObj.price * scriptDet.riskPaddingPerc / 10000)) * inputObj.qty;

                    optionalMargin = scriptDet.buyMarginPerc/10000 * inputObj.qty;
                    output.reqMargin = optionalMargin > margin ? optionalMargin : margin;
                    outputList.push(output);
                    break;
            }
        });
        outputList.forEach(function (out) {
            out.calculateLeverage();
        });
    }

    this.FnOMarginCalc = function () {
        var outputList = self.outputList;

        productList.forEach(function (item, i) {
            var productTypeName = item;
            switch (productTypeName) {
                case typeConstant.CNF:
                    var output = new OutputResult(productTypeName);
                    output.orderValues = inputObj.qty * inputObj.price;
                    var isSpanValueTobeConsidered = inputObj.futureOptionsType == 'FUT'
                        || (inputObj.futureOptionsType != 'FUT' && !inputObj.isBuy);
                    if (isSpanValueTobeConsidered) {
                        output.reqMargin = inputObj.spanObj ? +inputObj.spanObj.total : 0;
                    } else
                        output.reqMargin = output.orderValues;
                    outputList.push(output);
                    break;

                case typeConstant.MIS_PLUS:
                    var output = new OutputResult(productTypeName);
                    output.orderValues = inputObj.qty * inputObj.price;
                    var margin = inputObj.isBuy ?
                        ((inputObj.price - inputObj.stopLoss) + (inputObj.price * scriptDet.riskPaddingPerc / 10000)) * inputObj.qty :
                        ((inputObj.stopLoss - inputObj.price) + (inputObj.price * scriptDet.riskPaddingPerc / 10000)) * inputObj.qty;

                    optionalMargin = scriptDet.buyMarginPerc/10000 * output.orderValues;
                    output.reqMargin = optionalMargin > margin ? optionalMargin : margin;
                    outputList.push(output);
                    break;
            }
        });

        outputList.forEach(function (out) {
            out.calculateLeverage();
        });
    }

    this.CommodityMarginCalc = function () {
        var outputList = self.outputList;
        productList.forEach(function (item, i) {
            var productTypeName = item;
            switch (productTypeName) {
                case typeConstant.MIS:
                    var output = new OutputResult(productTypeName);
                    output.orderValues = inputObj.qty * inputObj.price;
                    output.reqMargin = output.orderValues * scriptDet.misPerc / 10000;
                    outputList.push(output);
                    break;
                case typeConstant.CNF:
                    var output = new OutputResult(productTypeName);
                    output.orderValues = inputObj.qty * inputObj.price;
                    var isSpanValueTobeConsidered = inputObj.futureOptionsType == 'FUT' || (inputObj.futureOptionsType != 'FUT' && !inputObj.isBuy);
                    if (isSpanValueTobeConsidered) {
                        output.reqMargin = inputObj.spanObj ? +inputObj.spanObj.total : 0;
                    } else
                        output.reqMargin = output.orderValues; 
                    outputList.push(output);
                    break;
            }
        });
        outputList.forEach(function (out) {
            out.calculateLeverage();
        });

        return outputList;
    }

    this.CurrMarginCalc = function () {
        var outputList = self.outputList;
        productList.forEach(function (item, i) {
            var productTypeName = item;
            switch (productTypeName) {
                case typeConstant.CNF:
                    var output = new OutputResult(productTypeName);
                    output.orderValues = inputObj.qty * inputObj.price;
                    var isSpanValueTobeConsidered = inputObj.futureOptionsType == 'FUT' || (inputObj.futureOptionsType != 'FUT' && !inputObj.isBuy);
                    if (isSpanValueTobeConsidered) {
                        output.reqMargin = inputObj.spanObj ? +inputObj.spanObj.total : 0;
                    } else
                        output.reqMargin = output.orderValues;
                    outputList.push(output);
                    break;
            }
        });
        outputList.forEach(function (out) {
            out.calculateLeverage();
        });
    }

    function OutputResult(type) {
        this.types = type;
        this.orderValues = '';
        this.reqMargin = '';
    }

    OutputResult.prototype.calculateLeverage = function () {
        this.leverage = this.reqMargin == 0 ? 0 : this.orderValues / this.reqMargin;
        if(this.reqMargin ==0)
            console.error("Required margin is zero, either span totla value is not recevied or span obj is null")
    }

    Object.freeze(OutputResult);
}


var spanCalculatorAJAX = function (spanInputList, successCB) {

    if (spanInputList.length == 0)
        return console.error("Plz add scripts to proccedd in span");

    ajaxCallToGetOutput();

    function ajaxCallToGetOutput() {
        var url = siteRoot + "/Prelogin/GetOutputForSpanCalc",
            data = { spanInputList: spanInputList };


        siteCommonJS.requestVerificationToken(data);
        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            success: function (data) {
                siteCommonJS.hideLoader();
                successCB(data);
            },
            error: onError,
            beforeSend: function () {
                siteCommonJS.showLoader();
            }
        })

        function onError(err) {
            siteCommonJS.hideLoader();
            console.error(err);
            alert('Some error occured. Please try after some time');
        }
    }
}

var validator = (function () {

    function validateBrokerageCalc(inputObj, errorArray) {
        var validationConstant = constant.validationMsg.marginCalcValidation;

        if (!validateNumber(inputObj.qty)) {
            errorArray.push(validationConstant.QTY_ERROR);
        }
        if (inputObj.buyPrice && !validateNumber(inputObj.buyPrice))
            errorArray.push(validationConstant.BUY_ERROR);

        // if (inputObj.sellPrice && !validateNumber(inputObj.sellPrice))
            // errorArray.push(validationConstant.SELL_ERROR);

        return errorArray.length == 0;
    }

    function validateMarginCalc(inputObj, errorArray) {
        var validationConstant = constant.validationMsg.marginCalcValidation;

        if (!validateNumber(inputObj.price))
            errorArray.push(validationConstant.PRICE_ERROR);

        if (!validateNumber(inputObj.qty))
            errorArray.push(validationConstant.QTY_ERROR);

        if (!inputObj.scriptObj)
            errorArray.push(validationConstant.SCRIPT_ERROR);

        if (inputObj.isBuy && inputObj.price < inputObj.stopLoss)
            errorArray.push(validationConstant.BUY_SL_ERROR);

        // if (!inputObj.isBuy && inputObj.price > inputObj.stopLoss)
            // errorArray.push(validationConstant.SELL_SL_ERROR);

        return errorArray.length == 0;
    }

    //this will validate price,qty & that it is a number and greate than 0
    function validateNumber(num) {
        return num || siteCommonJS.isNumeric(num) || num >= 0;
    }

    return {
        validateBrokerageCalc: validateBrokerageCalc,
        validateMarginCalc: validateMarginCalc
    }
})();
