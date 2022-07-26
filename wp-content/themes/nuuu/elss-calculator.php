<?php
/**
* Template Name: ELSS Calculator
*
*/
 get_header() ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/sip_func.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/chart.js"></script>
<main class="body_container">

	<section class="ipo_page_sec ipo_details_page_sec sip_cal_page_sec">
      <div class="container">
        <div class="ipo_page_secinner ipo_details_page_secinner sip_cal_page_secinner">
          <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left_ipo_details_page_sec left_sip_cal_page_sec" id="main">
             
              <div class="left_ipo_details_page_secinner left_sip_cal_page_secinner">
  			  
          		<!-- 	<div class="left_ipo_details_page_blk left_sip_cal_page_blk">
          			  <div class="sip_calculator_area">
            			  <div class="row">
              			  <div class="col-lg-6 col-md-6 col-sm-6">
                  			<div class="sip_calculator_fldarea">
                  			  <h3 class="heading_ttl">SIP Calculator</h3>
                    			<div class="sip_calculator_areainner">
                    			  <div class="range-slider">
                    					<span class="ttl">Monthly investment</span>	
                    				  <input class="range-slider__range" type="range" value="25000" min="0" max="70000">
                    				  Rs.<span class="value22"><span class="range-slider__value">0</span></span>
                    				</div>

                    				<div class="range-slider">
                    					<span class="ttl">Expected return rate (p.a)</span>	
                    				  <input class="range-slider__range" type="range" value="12" min="0" max="20" step="1">
                    				  <span class="value22"><span class="range-slider__value">0</span></span>%
                    				</div>

                    				<div class="range-slider">
                    					<span class="ttl">Time Period</span>	
                    				  <input class="range-slider__range" type="range" value="10" min="0" max="24">
                    				  <span class="value22"><span class="range-slider__value">0</span></span>Yrs
                    				</div> 
              			  
                  			  
                  			  	<div class="calculator_btn_area">				  
                  				  <button type="button" class="calculator_btn">Invest Now</button>
                  				  </div>
              			      </div>
            			      </div>
        			        </div>
              			  <div class="col-lg-6 col-md-6 col-sm-6">
                			  <div class="invesment_dtls_area">
                  			  <h4>Total Value of Your Investment</h4>
                  			  <h3>Rs. 58,08,477</h3>
                  			  <div class="calculator_btn_areainner">	
                  			  <div class="row row_bkl">	
                  			  <div class="col-lg-6 col-md-6 col-sm-6 col-6 column_blk">	
                  			  <div class="invesment_dtls_blk_content">	
                  			  <p>Invested Amount</p>
                  			  <h5>Rs. 30,00,000</h5>
                  			  </div>
                  			  </div>
                  			  <div class="col-lg-6 col-md-6 col-sm-6 col-6 column_blk">	
                  			  <div class="invesment_dtls_blk_content">	
                  			  <p>Estimated Returns</p>
                  			  <h5>Rs. 28,08,477</h5>
                  			  </div>
                  			  </div>
                  			  </div>
                  			  </div>			  
                			  </div>
                			  
                			  <div class="invesment_piechart_area">
                  			  <div class="invesment_piechart_top_area">
                    			  <ul>
                    			  <li><span class="color"></span> <span class="txt">Invested Amount</span></li>
                    			  <li><span class="color" style="background:#8872FA;"></span> <span class="txt">Estimated Returns</span></li>
                    			  <ul>
                  			  </div>
                  			   <div class="invesment_piechart_areainner" style="text-align:center;padding-top:20px;">
                  			   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pie_chart_img1.svg" class="img-fluid">			   
                  			  </div>
                			  </div>
              			  </div>
      			        </div>
    			        </div>
    			      </div> -->

        			  <div class="left_ipo_details_page_blk left_sip_cal_page_blk">
        				  <div class="sip_calculator_area">
        				  	<div class="page-container">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                          <h3 class="heading_ttl">ELSS Calculator</h3>
                          <div class="switch-container" style="display:none;">
                              <div class="radio-button">
                                  <label for="sip">SIP</label>
                                  <input type="radio" checked name="checked" value="SIP">
                                  <label for="lumpsum">LumpSum</label>
                                  <input type="radio" name="checked" value="LumpSum">
                              </div>
                              <div class="dropdown">
                                  Currency
                                  <select onchange="currencyChange(this)" id="currency" class="currency">
                                      <option value="Rs">&#8377; &nbsp;INR</option>
                                      <option value="$">&#128176;USD</option>
                                  </select>
                              </div>
                          </div>
                          <div class="input-container">
                            <!-- <br/> -->
                            <div class="range-slider">
                                <span class="ttl">Monthly investment</span>
                                <input type="range" min="1" max="100000" value="25000" class="range-slider__range" id="investmentRange">
                                 <span class="value-change-min">
                                <span class="value-change">Rs.<input id="investment" onchange="commas(this)" type="number" value="25000" class="range-slider__value input-val"/>
                                </span></span>
                            </div>
                            <!-- <input id="investment" type="hidden" value="25000"  onchange="commas(this)"/> -->
                            <!-- <br/> -->
                            <div class="range-slider">
                              <span class="ttl">Expected Rate of Return</span>
                                <input type="range" min="1" max="100" value="12" class="range-slider__range" id="returnrateRange">
                                 <span class="value-change-min">
                                <span class="value-change"><input id="return-rate" class="range-slider__value input-val" type="number" value="12" />%</span></span>
                            </div>
                            <!-- <div><input id="return-rate" type="hidden" value="12" onchange="percentage(this)")/></div> --> 
                            <!-- <div>Number of Years </div> -->
                            <!-- <br/> -->
                            <div class="range-slider">
                              <span class="ttl">Number of Years</span>
                                <input type="range" min="1" max="100" value="10" class="range-slider__range" id="yearsRange">
                                 <span class="value-change-min">
                                <span class="value-change"><input id="years" type="number" value="10" class="range-slider__value input-val">Yrs</span></span>
                              </div>
                            <!-- <div><input id="years" type="hidden" value="10"></div>  -->
                            <!-- <br/> -->
                            <!-- <div>Expected Rate of Return </div> --> 
                          </div>
                          <!-- </br/> -->
                          <div class="calculator_btn_area">
                              <button type="button" class="theme_btn calculator_btn" onclick="return calculate();"><span class="txt">Calculate</span></button>
                          </div>
                          </br/>                          
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                          <div class="invesment_dtls_area">
                            <h4>Total Value of Your Investment</h4>
                            <h3><span class="value-show">Rs.&nbsp;<input type="text" id="totalInvested" name="totalInvested" value="3000000"/></span></h3>
                            <div class="calculator_btn_areainner">  
                              <div class="row row_bkl"> 
                              <div class="col-lg-6 col-md-6 col-sm-6 col-6 column_blk"> 
                              <div class="invesment_dtls_blk_content">  
                              <p>Invested Amount</p>
                              <h5><span class="value-show">Rs.&nbsp;<input type="text" id="expectedAmount" name="expectedAmount" value="5808477"/></span></h5>
                              </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-6 column_blk"> 
                              <div class="invesment_dtls_blk_content">  
                              <p>Estimated Returns</p>
                              <h5><span class="value-show">Rs.&nbsp;<input type="text" id="expectedReturn" name="expectedReturn" value="2808477" /></span></h5>
                              </div>
                              </div>
                              </div>
                            </div>        
                          </div>
                          <div style="display: flex;">
                              <div class="result-container" style="display:none;">
                                  <div>Monthly Investment for <span id="mode-1">SIP</span></div>
                                  <br/>
                                  <div><span>Rs.</span>&nbsp;<span id="input-1">25000</span></div>
                                  <br/>
                                  <div>Number of Years <span id="mode-2">SIP</span></div>
                                  <br/>
                                  <div><span>Years:</span>&nbsp;<span id="input-2">10</span></div> 
                                  <br/>
                                  <div>Expected Rate of Return <span id="mode-3">SIP</span></div>
                                  <br/>
                                  <div><span>%:</span>&nbsp;<span id="input-3">12</span></div> 
                              </div>
                          </div>
                          <br/>
                          <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                        </div>  
                      </div>
                    </div>
        				  </div>
        			  </div>	

  			  
                <div class="left_ipo_details_page_blk left_sip_cal_page_blk ul-dis">
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
              <div class="sidebar_quick_contact_blkinner">
                <div class="sidebar_quick_contact_form_area calculatior_list_area" id="sidebar">
                  <h4>Categories</h4>
          				<div class="calculatior_list_areainner">
          				  <ul>
          				  <?php
                    
      	                $categories = get_categories( array(
      	                  'post_type' => 'blog',
      	                  // 'taxonomy' => 'BlogCategory',
      	                    'orderby' => 'name',
      	                    'order'   => 'ASC'
      	                ) );

      	                foreach( $categories as $category ) {
      	                 echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';   
      	                }?>
          					
          				  </ul>
          				</div>   
                </div>

        				<div class="open_account_btn_area">				  
        				  <a href="#" class="open_account_btn">Open Demat Account</a>
        				</div>

              </div>
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
    var slider1 = document.getElementById("investmentRange");
        slider1.oninput = function() {
            $('#investment').val($(this).val());
            $('#investmentspan').html($(this).val());
        }
        var slider2 = document.getElementById("yearsRange");
        slider2.oninput = function() {
            $('#years').val($(this).val());
            $('#yearsspan').html($(this).val());
        }
        var slider3 = document.getElementById("returnrateRange");
        slider3.oninput = function() {
            $('#return-rate').val($(this).val());
            $('#returnratespan').html($(this).val());
        }
    function calculate() {
      var principal = parseFloat(document.getElementById("investment").value);
      var period = parseFloat(document.getElementById("years").value);
      var freq = 1
      var rateofreturn = parseFloat(document.getElementById("return-rate").value);  
      if (isNaN(principal)) {
        alert("Please enter Amount Invested in each Installment");
      } else if (isNaN(period)) {
        alert("Please enter No of Years");
      }else if (isNaN(freq)) {
        alert("Please enter Frequency");
      } else if (isNaN(rateofreturn)) {
        alert("Please enter Rate of Return");
      } else {
        var instalment_amount = principal;
        var no_of_compounding_periods = (12/freq)*period;
        var int_rate_per_period = rateofreturn/(12/freq)/100; 
        var total_amount_invested = period*instalment_amount*12;
        // var F = P [({(1+i) ^n}-1)/i];
        var expected_amount_on_maturity =  instalment_amount*((Math.pow(1+int_rate_per_period, no_of_compounding_periods)-1)/int_rate_per_period)*(1+int_rate_per_period);
        document.getElementById("totalInvested").value = Math.ceil(total_amount_invested);
        document.getElementById("expectedAmount").value = Math.ceil(expected_amount_on_maturity);
        var expreturn = Math.ceil(expected_amount_on_maturity) - Math.ceil(total_amount_invested);
        document.getElementById("expectedReturn").value = Math.ceil(expreturn);
      }
      callChart(Math.ceil(expected_amount_on_maturity), Math.ceil(expreturn));
    }
    callChart(5808477, 2808477);
    function callChart(wg, mv){
      var xValues = ["Wealth Gained", "Maturity Value"];
      var yValues = [wg, mv];
      var barColors = [
        "#8872fa",
        "#280da7"
      ];
      
      new Chart("myChart", {
        type: "pie",
        data: {
          labels: xValues,
          datasets: [{
            backgroundColor: barColors,
            data: yValues
          }]
        },
      });
    }

     $(function () {
      $('.input-val').on('input', function () { $('.text').text($('.input-val').val()); });
    });
</script>

 <?php get_footer() ?>