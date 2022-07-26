<?php
/**
* Template Name: Mutual Fund Returns Calculator
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
                          <h3 class="heading_ttl">Mutual Fund Returns Calculator</h3>
                          <div class="sip_calculator_areainner">

                            <div class="switch-container" style="display: none;">
                                <div class="radio-button">
                                    <label for="sip">SIP</label>
                                    <input type="radio"  name="checked" value="SIP">
                                    <label for="lumpsum">LumpSum</label>
                                    <input type="radio" checked name="checked" value="LumpSum">
                                </div>
                                <div class="dropdown">
                                    Currency
                                    <select onchange="currencyChange(this)" id="currency" class="currency">
                                        <!-- &#8377; -->
                                        <option value="Rs">&#8377; &nbsp;INR</option>
                                        <option value="$">&#128176;USD</option>
                                        <!-- &#x24; -->
                                    </select>
                                </div>
                            </div>
                            <div class="range-slider">
                              <span class="ttl">Total investment</span>
                              <input class="range-slider__range" type="range" value="25000" min="0" max="100000000">
                              <span class="value-change-min">
                              <span class="value22 value-change">Rs.<input id="investment" class="range-slider__value" type="number" value="25000">
                              </span></span>
                            </div>

                            <div class="range-slider">
                              <span class="ttl">Expected return rate (p.a)</span>
                              <input class="range-slider__range" type="range" value="12" min="0" max="20" step="1">
                              <span class="value-change-min">
                              <span class="value22 value-change"><input id="return-rate" class="range-slider__value" type="number" value="12">%</span></span>
                            </div>

                            <div class="range-slider">
                              <span class="ttl">Time Period</span>
                              <input class="range-slider__range" type="range" value="10" min="0" max="24">
                              <span class="value-change-min">
                              <span class="value22 value-change"><input id="years" class="range-slider__value" type="number" value="10">Yrs</span></span>
                            </div>


                            <div class="calculator_btn_area">
                              <button type="button" class="calculator_btn button" onclick="calculateResult()">Invest Now</button>
                            </div>

                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="invesment_dtls_area">
                          <h4>Total Investment</h4>
                          <h3 id="payment">Rs. 25,000</h3>
                          <div class="calculator_btn_areainner">
                            <div class="row row_bkl">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-6 column_blk">
                                <div class="invesment_dtls_blk_content">
                                  <p>Est Returns</p>
                                  <h5 id="estreturns">Rs. 52,646</h5>
                                </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-6 column_blk">
                                <div class="invesment_dtls_blk_content">
                                  <p>Total value</p>
                                  <h5 id="total">Rs. 77,646</h5>
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
<!-- start lumpsum code -->
  <script>
    var rangeSlider = function () {
      var slider = $('.range-slider'),
        range = $('.range-slider__range'),
        value = $('.range-slider__value');

      slider.each(function () {

        value.each(function () {
          $(this).on('keyup', function(){
            var newval = $(this).val();
            $(this).parent().siblings('.range-slider__range').val(newval);
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
  <script type="text/javascript">

    calculateResult=()=>{
        let amountValue = document.getElementById("investment").value;
        let amountWithComma = (amountValue.split(" ")[0]);
        let amount = parseInt(amountWithComma.split(',').join(''));
        let years = document.getElementById("years").value;
        let returnRateValue = document.getElementById("return-rate").value;
        let returnRateWithComma = (returnRateValue.split(" ")[0]);
        let returnRate = parseInt(returnRateWithComma.split(',').join(''));
        let checkedValue = document.getElementsByName('checked')[0].checked;
        let wealthGained = 0; total = 0;maturityValue = 0;
        if(checkedValue){
            wealthGained = Math.round((Math.pow((1 + (Math.pow((1 + returnRate / 100), (1 / 12)) - 1)), (years * 12)) - 1) / (Math.pow((1+ returnRate / 100), (1 / 12)) - 1) * amount);
            total = (amount*12)*years; 
        }else{
            total = amount;
            wealthGained = Math.round(Math.pow((1 + returnRate / 100), years) * amount);
        }

        maturityValue = wealthGained-total;
        callChart(amountValue, maturityValue);
        total = total.toString();
        total = total.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        wealthGained = wealthGained.toString();
        wealthGained = wealthGained.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        maturityValue = maturityValue.toString();
        maturityValue = maturityValue.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("payment").innerHTML = total==="NaN"?"0":total;
        document.getElementById("total").innerHTML = wealthGained==="NaN"?"0":wealthGained;
        document.getElementById("estreturns").innerHTML = maturityValue==="NaN"?"0":maturityValue
    }

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
  <script>
    callChart(25000, 52646);
    function callChart(pa, ti){
      var xValues = ["Invested Amount", "Est Returns"];
      var yValues = [pa, ti];
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
  <!-- end lumpsum code -->

 <?php get_footer() ?>