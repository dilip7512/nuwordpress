<?php
/**
* Template Name: Future Value Calculator
*
*/
 get_header() ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/chart.js"></script>
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
                          <h3 class="heading_ttl">Future Value Calculator</h3>
                          <div class="sip_calculator_areainner">


                            <div class="range-slider">
                              <span class="ttl">Monthly investment</span>
                              <input class="range-slider__range" type="range" value="100000" min="0" max="100000000">
                              <span class="value-change-min">
                              <span class="value22 value-change">Rs.<input id="investment" class="range-slider__value" type="number" value="100000"></span></span>
                            </div>

                            <div class="range-slider">
                              <span class="ttl">Expected return rate (p.a)</span>
                              <input class="range-slider__range" type="range" value="6" min="0" max="20" step="1">
                              <span class="value-change-min">
                              <span class="value22 value-change"><input id="rate" class="range-slider__value" type="number" value="6">%</span></span>
                            </div>

                            <div class="range-slider">
                              <span class="ttl">Time Period</span>
                              <input class="range-slider__range" type="range" value="5" min="0" max="24">
                               <span class="value-change-min">
                              <span class="value22 value-change"><input id="years" class="range-slider__value" type="number" value="5">Yrs</span></span>
                            </div>


                            <div class="calculator_btn_area">
                              <button type="button" id="calculate" class="theme_btn calculator_btn button"><span class="txt">Invest Now</span></button>
                            </div>

                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="invesment_dtls_area">
                          <!-- <h4>Total Value of Your Investment</h4>
                          <h3>Rs. 58,08,477</h3> -->
                          <div class="calculator_btn_areainner">
                            <div class="row row_bkl">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-6 column_blk">
                                <div class="invesment_dtls_blk_content">
                                  <p>Invested Amount</p>
                                  <h5 id="invested_amount">100000</h5>
                                </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-6 column_blk">
                                <div class="invesment_dtls_blk_content">
                                  <p>Future Value</p>
                                  <h5 id="future_value">133823</h5>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

                      </div>
                    </div>
                  </div>
        			  </div>	

  			  
                <div class="left_ipo_details_page_blk left_sip_cal_page_blk">
                  <?php
          				$post_id = 421;
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
            				$post_id = 420;
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
    // var $ = function (id) {
    //     return document.getElementById(id);
    // }
    var calculateClick = function () {
        var investment = parseFloat( $("#investment").val() );
        var annualRate = parseFloat( $("#rate").val() );
        var years = parseInt( $("#years").val() );
        
        if (isNaN(investment) || investment <= 0) {
            alert("Investment must be a valid number greater than zero.");
        } 
        else if(isNaN(annualRate) || annualRate <= 0) {
            alert("Annual rate must be a valid number greater than zero.");
        }
        else if(isNaN(years) || years <= 0) {
            alert("Years must be a valid number\nand greater than zero.");
        }
        // if all entries are valid, calulate future value
        else {
            var futureValue = investment;
            for ( i = 1; i <= years; i++ ) {
                futureValue += futureValue * annualRate / 100;
            }
            $("#future_value").html(futureValue.toFixed());
            $("#invested_amount").html(investment.toFixed());
            callChart(investment, futureValue.toFixed());
        } 
    }
    $('#calculate').click(function(){
        calculateClick();
    })
</script>
<script>
    callChart(100000, 133823);
    function callChart(ia, fv){
      var xValues = ["Invested Amount", "Future Value"];
      var yValues = [ia, fv];
      var barColors = [
        "#8872fa",
        "#280da7"
      ];
      
      new Chart("myChart", {
        type: "doughnut",
        data: {
          labels: xValues,
          datasets: [{
            backgroundColor: barColors,
            data: yValues
          }]
        },
      });
    }
</script>

 <?php get_footer() ?>