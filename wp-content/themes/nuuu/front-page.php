<?php get_header() ?>
<style type="text/css">
.graph_area_blk .graph_area_blkinner #gallery-1 .gallery-item,
.graph_area_blk .graph_area_blkinner #gallery-2 .gallery-item
{width:100%}
figure.wp-block-gallery.has-nested-images{display:none;}
</style>


<main class="body_container">
	<section class="home_banner_banner_sec landing_page2_home_banner_banner_sec">
      <div class="container">
        <div class="home_banner_banner_secinner">
          <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-5 col-12">
              <div class="home_banner_banner_content">
                <h1>Invest for<br>your future</h1>
                <p>Easy Investment In</p>
                <div class="wrapper111">
                  <ul class="dynamic-txts">
                    <li><span>Stocks</span></li>
                    <li><span>IPOs</span></li>
                    <li><span>Mutual Funds</span></li>
                    <li><span>F&O</span></li>
                  </ul>
                </div>

                <div class="home_banner_banner_form">
                  <form action="" role="form" method="post">
                    <div class="home_banner_banner_forminner">
                      <div class="form-group">
                       <input type="text" name="name" class="form-control" placeholder="Name" pattern="[A-Za-z_]{1,50}" required>
                      </div>
                      <div class="form-group">
                       <input type="number" name="number" class="form-control" placeholder="Mobile Number" onKeyPress="if(this.value.length==10) return false;" pattern="/^-?\d+\.?\d*$/" required>
                      </div>
                      <div class="home_banner_banner_btn_area">
                        <button class="theme_btn home_banner_banner_form_btn"  value="Submit" type="submit" name="submitbtn"><span class="txt">Get Free Brokerage</span></button>
                      </div>                  
                    </div>
                  </form>
                </div>

              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 swiper-container slider1">
              
              <div class="landing_page2_top_banner_slider_area swiper-wrapper">
                <div class="swiper-slide landing_page2_top_banner_item landing_page2_top_banner_item1">
                  <div class="landing_page2_top_banner_iteminner">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/watchlist_mockup1.png" class="img-fluid" alt="" title="">
                    <h4>Get Free Brokerage*<br>For First 90 Days</h4>
                  </div>
                </div>
                <div class="swiper-slide landing_page2_top_banner_item landing_page2_top_banner_item2">
                  <div class="landing_page2_top_banner_iteminner">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/funds_mockup1.png" class="img-fluid" alt="" title="">
                    <h4>Free Access To Paper<br>Trading Platform</h4>
                  </div>
                </div>
                <div class="swiper-slide landing_page2_top_banner_item landing_page2_top_banner_item3">
                  <div class="landing_page2_top_banner_iteminner">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/dashboard_mockup1.png" class="img-fluid" alt="" title="">
                    <h4>₹0 on Equity<br>Delivery Trades<br>& <br>₹20 on Intraday<br>and F&O </h4>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
         <!--      <div class="landing_page2_top_banner_slider_area top_banner_slider tab_fld owl-carousel">
                <div class="landing_page2_top_banner_item landing_page2_top_banner_item1">
                  <div class="landing_page2_top_banner_iteminner">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/watchlist_mockup1.png" class="img-fluid" alt="" title="">
                   <h4>Get Free Brokerage<br>Credits up to ₹10000</h4>
                  </div>
                </div>
                <div class="landing_page2_top_banner_item landing_page2_top_banner_item2">
                  <div class="landing_page2_top_banner_iteminner">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/funds_mockup1.png" class="img-fluid" alt="" title="">
                    <h4>₹0<small class="astrik">*</small> Account<br>Opening Charges</h4>
                  </div>
                </div>
                <div class="landing_page2_top_banner_item landing_page2_top_banner_item3">
                  <div class="landing_page2_top_banner_iteminner">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/dashboard_mockup1.png" class="img-fluid" alt="" title="">
                    <h4>₹0 on Equity<br>Delivery Trades<br>& <br>₹20 on Intraday<br>and F&O </h4>
                  </div>
                </div>
              </div> -->
            </div>
            
          </div>
        </div>

      </div>
    </section>
	<section class="offering_sec landing_page2_sec">
		<div class="container">
			<div class="theme_heading">
				<h2 class="heading_ttl">Our Offerings</h2>
			</div>
			<div class="container1">
				<div class="offering_secinner">
					<div class="offering_list_fld_area">
						<div class="row offering_list_area1">
							<?php
							$offering_args = array(
							'post_type' => 'home-page',
							'posts_per_page' => 3,
							'category_name' => 'Our Offerings'
							);
							$offering_posts = new WP_Query($offering_args);
							while($offering_posts->have_posts()){
							$offering_posts->the_post();
							?>
							
							<div class="col-lg-4 col-md-6 offering_list_item">
								<div class="offering_list_iteminner">
									<div class="content">
										<h4><?php the_title();?></h4>
										<p><?php the_excerpt();?></p>
									</div>
									<div class="icon">
										<?php the_post_thumbnail();?>
										<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/bg1.png" class="img-fluid" alt="" title=""> -->
									</div>
								</div>
							</div>
							<?php }?>

						</div>
						<div class="offering_list_area offering_list_are1 tab_fld owl-carousel ">
							<div class="offering_list_item">
								<div class="offering_list_iteminner">
									<div class="content">
										<h4>₹0</h4>
										<p>On Equity Delivery Trades,<br>No Hidden Charges</p>
									</div>
									<div class="icon">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/bg1.png" class="img-fluid" alt="" title="">
									</div>
								</div>
							</div>
							<div class="offering_list_item bg2">
								<div class="offering_list_iteminner">
									<div class="content">
										<h4>₹0</h4>
										<p>Account Opening <br>Charges</p>
									</div>
									<div class="icon">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/card.svg" class="img-fluid" alt="" title="">
									</div>
								</div>
							</div>
							<div class="offering_list_item">
								<div class="offering_list_iteminner">
									<div class="content">
										<h4>₹0</h4>
										<p>for Intraday and F&O </p>
									</div>
									<div class="icon">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/bg2.png" class="img-fluid" alt="" title="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="theme_bg_section2 landing_page2_theme_bg_section2">
		<div class="container">
			<div class="theme_bg_section2inner">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-12">
						<div class="theme_bg_img_area2">
							<div class="theme_bg_img2">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/mockup.png" class="img-fluid" alt="" title="">
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-12">
						<div class="theme_bg_content2">
							<h2>Take On Markets With Our<br> Advanced Mobile App</h2>
							<a target="_blank" href="https://play.google.com/store/apps/details?id=com.nuuu.tradingapp" class="find_out_link">
								<span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/apple.svg" class="img-fluid" alt="" title=""></span> |
								<span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/app.svg" class="img-fluid" alt="" title=""></span>
								<span class="txt">Get The App</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
   
	<section class="home_about_content_sec landing_page2_home_about_content_sec" style="padding:50px 0 30px;">
		<div class="container">
			<div class="home_about_content_secinner">
				<?php
				$post_id = 268;
				$queried_post = get_post($post_id);
				?>
				<div class="home_about_content">
					<h2><?php echo $queried_post->post_title; ?></h2>
					<p><?php echo $queried_post->post_content; ?></p>
				</div>
			</div>
		</div>
	</section>
	<section class="theme_bg_section">
		<div class="container">
			<div class="theme_bg_sectioninner">
				<div class="row">
					<div class="col-md-7 col-sm-6 col-12">
						<div class="theme_bg_content">
							<h2>Build and manage your portfolio</h2>
							<a href="#" class="find_out_link">
								<span class="txt">Explore The Website</span>
								<span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/right_arrow.svg" class="img-fluid" alt="" title=""></span>
							</a>
						</div>
					</div>
					<div class="col-md-5 col-sm-6 col-12">
						<div class="theme_bg_img_area">
							<div class="theme_bg_img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/dashboard_img.png" class="img-fluid" alt="" title="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="graph_content_sec landing_page2_graph_content_sec">
		<div class="container">
			<div class="graph_cntent_secinner">
				<div class="row">
					<?php
						$post_id = 269;
						$queried_post = get_post($post_id);
					?>
					<div class="col-lg-7 col-md-12 col-12 graph_area_column">
						<div class="graph_area">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-12 graph_area_blk">
									<div class="graph_area_blkinner">
										<?php echo do_shortcode('[gallery ids="301"]'); ?>
										<!-- <img src="<?php echo get_the_post_thumbnail_url($post_id); ?>" class="img-fluid" alt="" title=""> -->
										
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-12 graph_area_blk">
									<div class="graph_area_blkinner">
										<?php echo do_shortcode('[gallery ids="302"]'); ?>
										<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/graph1b.svg" class="img-fluid" alt="" title=""> -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-md-12 col-12 content_column">
						
						<div class="content_area">
							<h2><?php echo $queried_post->post_title; ?></h2>
							<p><?php echo $queried_post->post_content; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="trading_modes_sec landing_page2_trading_modes_sec pb-5">
		<div class="container">
			<div class="trading_modes_secinner">
			<h2>Two Trading Modes</h2>
			<div id="carousel" class="carousel slide vertical" data-ride="carousel">
				<div class="row" >
					<div class="col-md-2 trading_modes_nav_slider">
						<div class="trading_modes_nav_sliderinner">
							<a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/up_arrow1.png">
							</a>
							<ol class="carousel-indicators">
								<li data-target="#carousel" data-slide-to="0" class="active">Trader</li>
								<li data-target="#carousel" data-slide-to="1">Investor</li>
							</ol>
							
							<a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/down_arrow1.png" alt="image">
							</a>
						</div>
					</div>
					<div class="col-md-10 trading_modes_slider_fld">
						<div class="row">
							<div class="col-lg-6 col-md-12 col-12">
								<div class="trading_modes_block_slider_blk">
								<div class="carousel-inner" role="listbox">
								<div class="carousel-item active">
									<div class="trading_modes_block_slider_blkinner">
									<div class="trading_modes_img_area">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/trading.svg" class="img-fluid" alt="" title="">
									</div>
									</div>
								</div>
								<div class="carousel-item">
								<div class="trading_modes_block_slider_blkinner">
								<div class="trading_modes_img_area">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/investor.png" class="img-fluid" alt="" title="">
								</div>
								</div>
								</div>
									
								</div>

								</div>
							</div>
							
							<div class="col-lg-6 col-md-12 col-12">
								<?php
								$post_id = 272;
								$queried_post = get_post($post_id);
								?>
								<div class="trading_modes_content_area">
								<h2><?php echo $queried_post->post_title; ?></h2>
								<p><?php echo $queried_post->post_content; ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</section>
	
	<section class="other_product_sec landing_page2_other_product_sec mt-5">
		<div class="container">
			<div class="theme_heading">
				<h2 class="heading_ttl">Explore Other Products</h2>
			</div>
		</div>
		<div class="container">
			<div class="other_product_secinner">
				<div class="other_product_list_fld_area swiper-container slider2">
					<div class="row other_product_list_area2 desktop_fld swiper-wrapper">
						<?php
							$explore_args = array(
							'post_type' => 'home-page',
							'posts_per_page' => 3,
							'category_name' => 'Explore Other Products'
							);
							$explore_posts = new WP_Query($explore_args);
							while($explore_posts->have_posts()){
							$explore_posts->the_post();
						?>
						<div class="col-lg-4 col-md-6 other_product_list_item swiper-slide">
							<div class="other_product_list_iteminner">
								<div class="content">
									<h4><?php the_title();?></h4>
									<p><?php the_excerpt();?></p>
								</div>
								<div class="icon2">
									<?php the_post_thumbnail();?>
								</div>
							</div>
						</div>
						
						<?php }?>
						<div class="swiper-pagination"></div>
					</div>
					<!-- <div class="other_product_list_area other_product_list_area2 owl-carousel tab_fld">
						<div class="other_product_list_item bg">
							<div class="other_product_list_iteminner">
								<div class="content">
									<h4>Advisory</h4>
									<p>Get the best in class and customized equity and portfolio advice that is timely, smart and actionable </p>
								</div>
								<div class="icon2">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/advisory.svg" class="img-fluid" alt="" title="">
								</div>
							</div>
						</div>
						<div class="other_product_list_item">
							<div class="other_product_list_iteminner">
								<div class="content">
									<h4>Mutual Funds</h4>
									<p>Leave it to the experts to manage your long term wealth. Nuuu offers cost-effective Direct Mutual Funds for all financial needs. </p>
								</div>
								<div class="icon2">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/funds.svg" class="img-fluid" alt="" title="">
								</div>
							</div>
						</div>
						<div class="other_product_list_item bg">
							<div class="other_product_list_iteminner">
								<div class="content">
									<h4>Insurance</h4>
									<p>Risk can be mitigated by hedging but uncertainty can only be covered by insurance. Welcome to the post-COVID realty.</p>
								</div>
								<div class="icon2">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/insurance.svg" class="img-fluid" alt="" title="">
								</div>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</section>
	
	
</main>
<!-- Subscribe Modal -->
<div class="modal onload_popup fade" id="modal-subscribe">
<div class="onload_popup_inner_fld">
	<div class="modal-dialog onload_popupinner" role="document">
		<div class="close" data-dismiss="modal" aria-label="Close"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/close.svg"
		class="img-fluid"></div>
		<h4>Make Your Stock Investments Easier!</h4>
		<p>The 1<sup>st</sup> 2000 users will get free brokerage credits ‘worth’ ₹ 5000<strong>Join the tribe now!
			</strong>
		</p>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-12">
				<div class="onload_popup_form">
					<form>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Name">
						</div>
						<div class="form-group">
							<input type="number" class="form-control" placeholder="Mobile Number">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="City">
						</div>
						<div class="onload_popup_form_btn_area">
							<button class="theme_btn onload_popup_form_btn" type="button"><span class="txt">Start
							Investing</span></button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-12">
				<div class="onload_popup_img_area">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/popup_img.svg" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</div>
</div>

  <script>
  	if (window.innerWidth <= 991) {
    var swiper = new Swiper('.slider1', {
      slidesPerView: 1,
      spaceBetween: 0,
      autoplay: {
       delay:3000,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
 }
if (window.innerWidth <= 991) {
    var swiper = new Swiper('.slider2', {
      slidesPerView: 1,
      spaceBetween: 0,
      autoplay: {
       delay:3000,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });

    }
  </script>

<?php get_footer() ?>