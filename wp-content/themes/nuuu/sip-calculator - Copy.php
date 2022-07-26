<?php
/**
* Template Name: Sip Calculator
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
                          <h3 class="heading_ttl">SIP Calculator</h3>
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
                            <br/>
                            <div class="range-slider">
                                <span class="ttl">Monthly investment</span>
                                <input type="range" min="1" max="100000" value="25000" class="range-slider__range" id="investmentRange">
                                Rs.<span id="investmentspan">25000</span>
                            </div>
                            <input id="investment" type="hidden" value="25000"  onchange="commas(this)"/>
                            <br/>
                            <div class="range-slider">
                              <span class="ttl">Expected Rate of Return</span>
                                <input type="range" min="1" max="100" value="12" class="range-slider__range" id="returnrateRange">
                                <span id="returnratespan">12</span>%
                            </div>
                            <div><input id="return-rate"  type="hidden" value="12" onchange="percentage(this)")/></div> 
                            <!-- <div>Number of Years </div> -->
                            <br/>
                            <div class="range-slider">
                              <span class="ttl">Number of Years</span>
                                <input type="range" min="1" max="100" value="10" class="range-slider__range" id="yearsRange">
                                <span id="yearsspan">10</span>Yrs
                              </div>
                            <div><input id="years" type="hidden" value="10"></div> 
                            <!-- <br/> -->
                            <!-- <div>Expected Rate of Return </div> --> 
                          </div>
                          <!-- </br/> -->
                          <div class="calculator_btn_area">
                              <button type="button" class="calculator_btn" onclick="calculateResult()">Calculate</button>
                          </div>
                          </br/>
                          
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                           <div class="invesment_dtls_area">
                          <h4>Total Value of Your Investment</h4>
                          <h3 id="currency-change-2"><span>Rs.</span>&nbsp;<span id="wealth-gained">5548251</span></h3>
                          <div class="calculator_btn_areainner">  
                          <div class="row row_bkl"> 
                          <div class="col-lg-6 col-md-6 col-sm-6 col-6 column_blk"> 
                          <div class="invesment_dtls_blk_content">  
                          <p>Invested Amount</p>
                          <h5 id="currency-change-1"><span>Rs.</span>&nbsp;<span id="total">3000000</span></h5>
                          </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-6 column_blk"> 
                          <div class="invesment_dtls_blk_content">  
                          <p>Estimated Returns</p>
                          <h5 id="currency-change-3"><span>Rs.</span>&nbsp;<span id="maturity-value">2548251</span></h5>
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
      var slider2 = document.getElementById("returnrateRange");
      slider2.oninput = function() {
          $('#return-rate').val($(this).val());
          $('#returnratespan').html($(this).val());
      }
  </script>
  <script type="text/javascript">

    calculateResult=()=>{
        let amountValue = document.getElementById("investment").value;
        let amountWithComma = (amountValue.split(" ")[0]);
        let amount = parseInt(amountWithComma.split(',').join(''));
        document.getElementById("input-1").innerHTML = isNaN(amount)?0:amount;

        let years = document.getElementById("years").value;

        document.getElementById("input-2").innerHTML = years.length===0?"0":years;


        let returnRateValue = document.getElementById("return-rate").value;
        let returnRateWithComma = (returnRateValue.split(" ")[0]);
        let returnRate = parseInt(returnRateWithComma.split(',').join(''));
        document.getElementById("input-3").innerHTML = isNaN(returnRate)?0:returnRate;

        let checkedValue = document.getElementsByName('checked')[0].checked;
        let wealthGained = 0; total = 0;maturityValue = 0;

        if(document.getElementsByName('checked')[0].checked){
            document.getElementById("mode-1").innerHTML = document.getElementsByName('checked')[0].value;
            document.getElementById("mode-2").innerHTML = document.getElementsByName('checked')[0].value;
            document.getElementById("mode-3").innerHTML = document.getElementsByName('checked')[0].value;

        }
        if(document.getElementsByName('checked')[1].checked){
            document.getElementById("mode-1").innerHTML = document.getElementsByName('checked')[1].value;
            document.getElementById("mode-2").innerHTML = document.getElementsByName('checked')[1].value;
            document.getElementById("mode-3").innerHTML = document.getElementsByName('checked')[1].value;
        }
        if(checkedValue){
            wealthGained = Math.round((Math.pow((1 + (Math.pow((1 + returnRate / 100), (1 / 12)) - 1)), (years * 12)) - 1) / (Math.pow((1+ returnRate / 100), (1 / 12)) - 1) * amount);
            total = (amount*12)*years; 
        }else{
            total = amount;
            wealthGained = Math.round(Math.pow((1 + returnRate / 100), years) * amount);
        }

        maturityValue = wealthGained-total;
        total = total.toString();
        total = total.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        // wealthGained = wealthGained.toString();
        // wealthGained = wealthGained.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        // maturityValue = maturityValue.toString();
        // maturityValue = maturityValue.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        // document.getElementById("investment").value = ''
        // document.getElementById("years").value = '';
        // document.getElementById("return-rate").value = '';
        console.log(total,typeof total  )
        document.getElementById("total").innerHTML = total==="NaN"?"0":total;
        document.getElementById("wealth-gained").innerHTML = wealthGained==="NaN"?"0":wealthGained;
        document.getElementById("maturity-value").innerHTML = maturityValue==="NaN"?"0":maturityValue

        var xValues = ["Wealth Gained", "Maturity Value"];
        var yValues = [wealthGained==="NaN"?"0":wealthGained, maturityValue==="NaN"?"0":maturityValue];
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
    var xValues = ["Wealth Gained", "Maturity Value"];
        var yValues = [5548251, 2548251];
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
    

    currencyChange=()=>{
            let selectedValue = currency.value;
            document.getElementById("currency-change-1").innerHTML = selectedValue;
            document.getElementById("currency-change-2").innerHTML = selectedValue;
            document.getElementById("currency-change-3").innerHTML = selectedValue;

    }

    commas=(x)=> {
        let amount = document.getElementById("investment").value;
        let temp = amount.split(" ")
        if(temp.includes("Rs")){
            amount = amount.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }else{
            amount = amount.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("investment").value = amount.concat(' ').concat('Rs')
        }
    }
    percentage=(x)=>{
        let value = document.getElementById("return-rate").value;
        let temp = value.split(" ");
        if(temp.length<2)
            document.getElementById("return-rate").value = value.concat(' ').concat('%')
    }
  </script>

 <?php get_footer() ?>