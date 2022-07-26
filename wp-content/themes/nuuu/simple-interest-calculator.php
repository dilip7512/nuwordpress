<?php
/**
* Template Name: Simple Interest Calculator
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
                          <h3 class="heading_ttl">Simple Interest Calculator</h3>
                          <div class="sip_calculator_areainner">
                            <div class="range-slider">
                              <span class="ttl">Monthly investment</span>
                              <input class="range-slider__range" type="range" value="100000" min="0" max="100000000">
                              <span class="value-change-min">
                              <span class="value22 value-change">Rs.<input id="principal" class="range-slider__value" type="number" value="100000"></span></span>
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
                              <span class="value22 value-change"><input id="time" class="range-slider__value" type="number" value="5">Yrs</span></span>
                            </div>


                            <div class="calculator_btn_area">
                              <button type="button" class="theme_btn calculator_btn button"><span class="txt">Invest Now</span></button>
                            </div>

                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="invesment_dtls_area">
                          <h4>Total Amount</h4>
                          <h3 id="total">Rs. 58,08,477</h3>
                          <div class="calculator_btn_areainner">
                            <div class="row row_bkl">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-6 column_blk">
                                <div class="invesment_dtls_blk_content">
                                  <p>Principal Amount</p>
                                  <h5 id="payment">Rs. 100000</h5>
                                </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-6 column_blk">
                                <div class="invesment_dtls_blk_content">
                                  <p>Total Interest</p>
                                  <h5 id="interest">Rs. 28,08,477</h5>
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
  <script>
    const simpleInterest = document.querySelector('.simple-interest');
    const button = document.querySelector('.button');
    //const loading = document.querySelector('.loader');
    const results = document.querySelector('.results');

    function calculateResults(e) {
        // ui elements
        const principal = document.querySelector('#principal');
        const rate = document.querySelector('#rate');
        const time = document.querySelector('#time');
        const monthlyPayment = document.querySelector('#payment');
        const totalInterest = document.querySelector('#interest');
        const totalAmount = document.querySelector('#total');
        // formula variables
        const p = parseFloat(principal.value);
        const r = parseFloat(rate.value);
        const t = parseFloat(time.value);
        
        // calculate total interest
        const interest = (p*t*r/100);
        // calculate monthly payment
        const payment = ((interest + p) / (t * 12)).toFixed(2);
        // calculate total amount paid
        const total = (interest + p).toFixed(2);
        
        if (isFinite(payment)) {
            totalInterest.innerHTML = '$' + (interest).toFixed(2);
            monthlyPayment.innerHTML = '$' + p;
            totalAmount.innerHTML = '$' + total;
            callChart(p, interest);
            // hide loader
            button.classList.remove('loading');
            // show results
            results.classList.remove('hide');
        } else {
            // show error
            showError('Please check your numbers and try again.');
            // hide loader
            button.classList.remove('loading');
        }
    }

    function showError(error) {
        // create error
        const errorMessage = document.createElement('div');
        const calculate = document.querySelector('#calculate');

        errorMessage.className = 'error';
        errorMessage.appendChild(document.createTextNode(error));
        simpleInterest.insertBefore(errorMessage, calculate);
        // clear error
        setTimeout(clearError, 3000);
    }

    function clearError() {
        // remove error
        document.querySelector('.error').remove();
    }

    button.addEventListener('click', (e) => {
        console.log('Calculating...');
        // show loader
        button.classList.add('loading');
        
        // set timeout
        // setTimeout(calculateResults, 2000);
        calculateResults();
        
        // prevent page from reloading on submit
        e.preventDefault();
    });
  </script>
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
    callChart(100000, 30000);
    function callChart(pa, ti){
      var xValues = ["Principal Amount", "Total Interest"];
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

 <?php get_footer() ?>