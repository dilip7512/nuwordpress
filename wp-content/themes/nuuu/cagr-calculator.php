<?php
/**
* Template Name: CAGR Calculator
*
*/
 get_header() ?>


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
                          <h3 class="heading_ttl">CAGR Calculator</h3>
                          <div class="sip_calculator_areainner">


                            <div class="range-slider">
                              <span class="ttl">Initial investment</span>
                              <input class="range-slider__range" type="range" value="5000" min="0" max="500000">
                              <span class="value-change-min">
                              <span class="value22 value-change">Rs.<input id="initial-value" class="range-slider__value" type="number" value="5000"></span></span>
                              
                            </div>

                            <div class="range-slider">
                              <span class="ttl">Final investment</span>
                              <input class="range-slider__range" type="range" value="25000" min="0" max="500000" step="1">
                             
                              <span class="value-change-min">
                              <span class="value22 value-change">Rs.<input id="final-value" class="range-slider__value" type="number" value="25000"></span></span>
                            </div>

                            <div class="range-slider">
                              <span class="ttl">Duration of investment</span>
                              <input class="range-slider__range" type="range" value="5" min="0" max="24">
                              <span class="value-change-min">
                              <span class="value22 value-change"><input id="num-periods" class="range-slider__value" type="number" value="5">Yrs</span></span>
                             
                            </div>


                            <div class="calculator_btn_area">
                              <button type="button" class="calculator_btn button">Invest Now</button>
                            </div>

                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="results hide">
                          <div class="monthly-payment invesment_dtls_area">
                            <h4>CAGR is</h4>
                            <h3 id="result">37.97%</h3>
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
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js'></script>

<script>
    const simpleInterest = document.querySelector('.simple-interest');
    const button = document.querySelector('.button');
    //const loading = document.querySelector('.loader');
    const results = document.querySelector('.results');

    

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
    function calculateResults(e) {
        let initialValue = document.querySelector('#initial-value').value;
        let finalValue = document.querySelector('#final-value').value;
        let numPeriods = document.querySelector('#num-periods').value;
        let answer = (Math.pow((finalValue/initialValue),(1/numPeriods))-1)*100;
        answer = Math.round(100*answer)/100

        document.querySelector('#result').innerText = `${answer}%`;
    }
  </script>

 <?php get_footer() ?>