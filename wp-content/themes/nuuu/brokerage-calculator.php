<?php
/**
* Template Name: Brokerage Calculator
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

	<section class="ipo_page_sec ipo_details_page_sec sip_cal_page_sec brokerage">
      <div class="container">
        <div class="ipo_page_secinner ipo_details_page_secinner sip_cal_page_secinner">
          <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left_ipo_details_page_sec left_sip_cal_page_sec" id="main">
              <div class="left_ipo_details_page_secinner left_sip_cal_page_secinner">
        			  <div class="left_ipo_details_page_blk left_sip_cal_page_blk">
        				  <div class="sip_calculator_area">
                      <!-- start brokerage code -->
                    <div class="tab-body">
                      <h3 class="heading_ttl">Brokerage Calculator</h3>
                      <div class="row toggle-section">
                        <div class="col-sm-6 col-xs-6">
                          <div class="">
                            <div class="btn-group btn-group-switch bseNseToggle">
                              <button type="button" class="btn nseBtn active"
                                    data-exchange="nse">NSE</button>
                              <button type="button" class="btn  bseBtn"
                                    data-exchange="bse">BSE</button>
                            </div>
                            <div class="btn-section mcxBtn"
                                style="display: none; ">
                                <a class="btn btn-filled"
                                    style=" line-height:1 !important">MCX</a>
                            </div>
                          </div>
                          <div class="range-slider">
                            <span class="ttl">Qty</span>
                            <input class="range-slider__range" type="range" value="100" min="0" max="500000">
                            <span class="value-change-min">
                              <span class="value22 value-change">
                              <input id="qty" class="range-slider__value" type="number"
                              tabindex="520" placeholder="Qty" value="100"
                              oninput="this.value=this.value.replace(/[^0-9]/g,'');"
                              maxlength="10">
                            </span></span>
                          </div>
                          <div class="range-slider">
                            <span class="ttl">Buy Price</span>
                            <input class="range-slider__range" type="range" value="521" min="0" max="500000" step="1">
                            <span class="value-change-min">
                              <span class="value22 value-change"> Rs.
                              <input id="buyPrice" class="range-slider__value"
                              type="number" tabindex="521"
                              onkeyup="brokerageUI.validateCurrencyValue(this)"
                              maxlength="10" placeholder="Buy Price"
                              value="1000.00">
                            </span></span>
                          </div>
                          <div class="range-slider">
                            <span class="ttl">Sell Price</span>
                            <input class="range-slider__range" type="range" value="990" min="0" max="500000">
                            <span class="value-change-min">
                              <span class="value22 value-change"> Rs.
                              <input id="sellPrice" class="range-slider__value"
                              type="number" tabindex="522"
                              onkeyup="brokerageUI.validateCurrencyValue(this)"
                              maxlength="10" placeholder="Sell Price"
                              value="990.00">
                            </span></span>
                          </div>
                          <div class="form-group form-group-theme">
                            <label>
                              Type <i class="icon-info custom-tooltip">
                              <span class="tooltiptext" style="font-size: 12px !important">
                              <span class="tool-content">
                                Type include delivery, Emf, Intraday
                              </span>
                              </span>
                                </i>
                            </label>
                            <select
                              class="form-control selectpicker transNContractType" tabindex="523" id="transNContractType" title="" data-width="">
                            </select>
                          </div>
                          <div class="radio-list">
                            <div class="radio radio-info radio-inline">
                              <input type="radio" id="equity" value="CASH" name="radioInline" checked="">
                              <label for="equity">Equity</label>
                            </div>
                            <div class="radio radio-info radio-inline">
                              <input type="radio" id="f&o" value="NF" name="radioInline">
                              <label for="f&o">F&O</label>
                            </div>
                            <div class="radio radio-info radio-inline">
                              <input type="radio" id="currency" value="NSE_CURR" name="radioInline">
                              <label for="currency">Currency</label>
                            </div>
                            <div class="radio radio-info radio-inline">
                              <input type="radio" id="commodity" value="MX_COMMODITY" name="radioInline">
                              <label for="commodity">Commodity</label>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                          <div class="select-section">
                            <div class="select-section-data" id="EquitySection">
                              <div class="data-content">
                                  <span class="data-text">Turnover - </span>
                                  <span class="data-value turnOver">2010000.00</span>
                              </div>
                              <div class="data-content">
                                  <span class="data-text">Brokerage - </span>
                                  <span class="data-value brokerageAmt">0</span>
                              </div>
                              <div class="data-content">
                                  <span class="data-text">Charges & Taxes - </span>
                                  <span class="data-value brokerageAmt">0</span>
                              </div>
                              <div class="data-content-sub">
                                <span class="data-text">
                                  <h4>Charges & Taxes</h4>
                                  <!-- <i class="icon-info custom-tooltip"> -->
                                  <span class="tooltiptext">
                                    <span class="tool-content">
                                      <span class="tool-text">Stt:</span>
                                      <span class="tool-value ttStt">-</span>
                                    </span>
                                    <span class="tool-content">
                                      <span class="tool-text">Exchange Transaction Charges :</span>
                                      <span class="tool-value ttTransactionCharges">-</span>
                                    </span>
                                    <span class="tool-content">
                                      <span class="tool-text">GST</span>
                                      <span class="tool-value ttGST">-</span></span>
                                      <span class="tool-content">
                                        <span class="tool-text">SEBI Chargess </span>
                                        <span class="tool-value ttSebiCharges">-</span>
                                      </span>
                                      <span class="tool-content">
                                        <span class="tool-text">Stamp Duty</span>
                                        <span class="tool-value ttStampDuty">-</span>
                                      </span>
                                    </span>
                                    <!-- </i> -->
                                     
                                  </span>
                                  <span class="data-content">
                                  <span class="tool-text">Total - </span>
                                  <span class="data-value chargesNTaxes"></span>
                                  </span>
                              </div>
                              <div class="data-content">
                                  <span class="data-text">Breakeven - </span>
                                  <span class="data-value breakEven">0.50</span>
                              </div>
                              <div class="data-content">
                                <span class="data-text">Breakeven Price - </span>
                                <span class="data-value breakEvenPrice">10000.50</span>
                              </div>
                              <div class="data-content">
                                <span class="data-text">Net PnL - </span>
                                <span class="data-value text-green netPNL">950.0</span>
                              </div>
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


 <?php get_footer() ?>