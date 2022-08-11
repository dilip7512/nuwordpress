<?php
/**
* Template Name: Options Calculator
*
*/
 get_header() ?>

  <!-- start brokerage code -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/brokerage-calculator/Common/jquery2d2b.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/brokerage-calculator/Common/vendor.min2d2b.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/brokerage-calculator/Common/linq2d2b.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/brokerage-calculator/Common/common.min2d2b.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/brokerage-calculator/Client/SiteCommon2d2b.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/brokerage-calculator/Client/Constant2d2b.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/brokerage-calculator/Client/Calculator2d2b.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/brokerage-calculator/Common/GausianOptionsCalcLibrary2d2b.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/brokerage-calculator/Client/OptionsCalculator2d2b.js"></script>
  <!-- end brokerage code -->
<main class="body_container">

	<section class="ipo_page_sec ipo_details_page_sec sip_cal_page_sec">
      <div class="container">
        <div class="ipo_page_secinner ipo_details_page_secinner sip_cal_page_secinner">
          <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left_ipo_details_page_sec left_sip_cal_page_sec" id="main">
             
              <div class="left_ipo_details_page_secinner left_sip_cal_page_secinner">

        			  <div class="left_ipo_details_page_blk left_sip_cal_page_blk">
        				   <div class="sip_calculator_area">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="sip_calculator_fldarea">
                          <h3 class="heading_ttl">Options Calculator</h3>
                          <div class="sip_calculator_areainner">

                            <!-- start options calculator -->
                          <div class="tab-body">
                            <div class="row row-lg">
                              <div class="range-slider">
                                  <span class="ttl">Spot Price</span>
                                  <input class="range-slider__range" type="range" value="8400" min="0" max="500000">
                                  <span class="value-change-min">
                                    <span class="value22 value-change">Rs.
                                      <input id="spotPrice" class="form-control range-slider__value"
                                      type="number" value="8400" tabindex="510"
                                      maxlength="10"
                                      onkeyup="siteCommonJS.validateMonetoryValue(this)"
                                      placeholder="Spot Price">
                                  </span>
                                  </span>
                              </div>
                              <div class="range-slider">
                                <span class="ttl">Strike Price</span>
                                <input class="range-slider__range" type="range" value="8600" min="0" max="500000">
                                <span class="value-change-min">
                                  <span class="value22 value-change"> Rs.
                                    <input id="strikePrice" class="form-control range-slider__value"
                                    tabindex="511" maxlength="10"
                                    onkeyup="siteCommonJS.validateMonetoryValue(this)"
                                    type="number" placeholder="Strike Price"
                                    value="8600">
                                  </span>
                                </span>
                              </div>
                              <div class="range-slider">
                                <span class="ttl">Day To Expiry</span>
                                <input class="range-slider__range" type="range" value="1" min="0" max="5000">
                                <span class="value-change-min">
                                  <span class="value22 value-change">
                                    <input id="dayExpiry"
                                    oninput="this.value=this.value.replace(/[^0-9]/g,'');"
                                    class="form-control range-slider__value" tabindex="512"
                                    type="number" maxlength="10"
                                    placeholder="Expiry" value="1">
                                  </span>
                                </span>
                              </div>
                              <div class="range-slider">
                                <span class="ttl">Interest (%)</span>
                                <input class="range-slider__range" type="range" value="7" min="0" max="100">
                                <span class="value-change-min">
                                  <span class="value22 value-change">
                                    <input id="interestPerc" class="form-control range-slider__value"
                                    type="number" tabindex="513"
                                    onkeyup="siteCommonJS.validateMonetoryValue(this)"
                                    placeholder="Interest" value="7">
                                  </span>
                                </span>
                              </div>
                              <div class="range-slider">
                                <span class="ttl">Volatility (%)</span>
                                <input class="range-slider__range" type="range" value="18" min="0" max="100">
                                <span class="value-change-min">
                                  <span class="value22 value-change">
                                    <input id="volatilityPerc" class="form-control range-slider__value"
                                        tabindex="514" type="number" maxlength="6"
                                        placeholder="Volatilty" value="18">
                                  </span>
                                </span>
                              </div>
                              <div class="range-slider">
                                <span class="ttl">Div.Yield (%)</span>
                                <input class="range-slider__range" type="range" value="0" min="0" max="100">
                                <span class="value-change-min">
                                  <span class="value22 value-change">
                                    <input id="dividentYield" class="form-control range-slider__value"
                                    tabindex="515" maxlength="6"
                                    onkeyup="siteCommonJS.validateMonetoryValue(this)"
                                    type="number" placeholder="Divident"
                                    value="0">
                                  </span>
                                </span>
                              </div>
                            </div>
                            <div class="calculator_btn_area">
                              <button type="button" id="optionCalculateResult" class="calculator_btn button btn btn-filled pointerCursor">CALCULATE
                                  NOW</button>
                            </div>
                          </div>
                            <!-- end options calculator -->
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="select-section">
                          <div style="display:none;" id="optionOutputSection">
                            <div class="table-responsive table-theme1">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th width="33.33%" class="">
                                        <span>DETAILS</span>
                                    </th>
                                    <th width="33.33%"
                                        class="text-center">
                                        <span>CALL</span>
                                    </th>
                                    <th width="33.33%"
                                        class="text-center">
                                        <span>PUT</span>
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="">
                                        <span>OPTION VAL</span>
                                    </td>
                                    <td class="text-center">
                                        <span id='callPremium'> </span>
                                    </td>
                                    <td class="text-center">
                                        <span id='putPremium'> </span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class=""><span>DELTA</span></td>
                                    <td class="text-center">
                                      <span id='callDelta'>0.3800</span>
                                    </td>
                                    <td class="text-center">
                                      <span id='putDelta'>-062</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class=""><span>GAMMA</span></td>
                                    <td class="text-center">
                                        <span id='callGamma'></span>
                                    </td>
                                    <td class="text-center">
                                        <span id='putGamma'></span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class=""><span>VEGA</span></td>
                                    <td class="text-center">
                                        <span id='callVega'>0</span>
                                    </td>
                                    <td class="text-center">
                                        <span id='putVega'>0</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class=""><span>RHO</span></td>
                                    <td class="text-center">
                                        <span id='callRho'>0</span>
                                    </td>
                                    <td class="text-center">
                                        <span id='putRho'>0</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class=""><span>Theta</span></td>
                                    <td class="text-center">
                                        <span id='callTheta'>0</span>
                                    </td>
                                    <td class="text-center">
                                        <span id='putTheta'>0</span>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
        			  </div>	

  			  
                <div class="left_ipo_details_page_blk left_sip_cal_page_blk">
                  <?php
          				$post_id = 161;
          				$queried_post = get_post($post_id);
          				?>
                  <h3 class="heading_ttl"><?php echo $queried_post->post_title; ?></h3>
                  <div class="left_ipo_details_page_blkinner">
                    <div class="about_ipo_content">
                      <div class="des more1">
                      	<?php echo $queried_post->post_content; ?>
      		            </div>
                    </div>
                  </div>
                </div>

                <div class="left_ipo_details_page_blk left_sip_cal_page_blk">
                  <h3 class="heading_ttl">FAQ’s</h3>
                  <div class="left_ipo_details_page_blkinner">
                  	<?php
            				$post_id = 193;
            				$queried_post = get_post($post_id);
            				?>
            				<?php echo $queried_post->post_content; ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-5 col-12 sidebar_quick_contact_blk sidebar_sip_cal_page_sec">
              <?php get_sidebar('calculator') ?>
            </div>

          </div>
        </div>
      </div>
  </section>
  
</main>	
  <script>
    var rangeSlider = function () {
      var slider = $('.range-slider'),
        range = $('.range-slider__range'),
        value = $('.range-slider__value');

      slider.each(function () {

        value.each(function () {
          $(this).on('keyup', function(){
            var newval = $(this).val();
            $(this).parent().parent().siblings('.range-slider__range').val(newval);
          })
          var value = $(this).parent().prev().attr('value');
          $(this).html(value);
        });

        range.on('input', function () {
          $(this).next(value).find('.range-slider__value').val(this.value);
        });
      });
    };

    rangeSlider();
  </script>
  
  <script>
    function calculateResults(e) {
        let initialValue = document.querySelector('#initial-value').value;
        let finalValue = document.querySelector('#final-value').value;
        let numPeriods = document.querySelector('#num-periods').value;
        let answer = (Math.pow((finalValue/initialValue),(1/numPeriods))-1)*100;
        answer = Math.round(100*answer)/100

        document.querySelector('#result').innerText = `${answer}%`;
    }
  </script>

 <!-- start options calculator -->
  <script>
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
        //  msg = "Expiry date should be minimum 24 hours from now";
        //  this.errorList.push({ $ele: $('#dayExpiry'), msg: msg });
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
  </script>
 <!-- end options calculator -->

 <?php get_footer() ?>