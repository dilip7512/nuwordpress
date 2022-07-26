<?php 
/**
* Template Name: Campaign
*
*/
get_header() ?>
<style type="text/css">
	.c-accordion__title{font-size:24px}
    .c-accordion__content p{font-size:16px}
    .c-accordion__content ul{margin-bottom:15px;margin-left: 20px;}
    .c-accordion__content ul li{margin-bottom: 10px;list-style-type: disc;font-size:16px}
</style>
<main class="body_container">

	<section class="home_banner_banner_sec campaign_banner_sec">
			<div class="container">
				<div class="home_banner_banner_secinner campaign_banner_secinner">
					<div class="campaign_banner_bg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/campaign_banner_bg.svg" class="img-fluid"></div>
					<div class="row align-items-center">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="home_banner_banner_content campaign_banner_content">
								<h1><span>OPEN <strong>FREE*</strong></span><br>DEMAT ACCOUNT</h1>
								<p>Enjoy Free Trading & Investments for Lifetime</p>
								<div class="home_banner_banner_form">
									<form onsubmit="send_enquiry_campaign(); return false;" method="post">
										<div class="home_banner_banner_forminner">
										  <div class="form-group">
											<input type="text" name="name" class="form-control" placeholder="Name" pattern="[A-Za-z_]{1,50}" required>
										  </div>
										  <div class="form-group">
											<input type="number" name="mobile" id="mobile" class="form-control" placeholder="Mobile Number" onKeyPress="if(this.value.length==10) return false;" pattern="/^-?\d+\.?\d*$/" required>
										  </div>
										  <div class="form-group">
											<input type="number" name="type" id="typecampaign" class="form-control" value="6" required hidden>
										  </div>
										  <div class="home_banner_banner_btn_area">
											<button class="theme_btn home_banner_banner_form_btn" type="submit" target="_blank"><span class="txt">Get Free Brokerage</span></button>
										  </div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="campaign_banner_box_area">
								<div class="desktop_campaign_banner_box_list">
									<div class="campaign_banner_box_list">
										<div class="campaign_banner_box_list_item item1">
											<div class="campaign_banner_box_list_iteminner">
												<div class="content">
													<p>₹0 on Equity<br> Delivery Trades,<br>No Hidden Charges</p>
												</div>
											</div>
										</div>
										<div class="campaign_banner_box_list_item item2">
											<div class="campaign_banner_box_list_iteminner">
												<div class="content">
													<p>Get Free <br>Brokerage* For <br>First 90 Days</p>
												</div>
											</div>
										</div>
										<div class="campaign_banner_box_list_item item3">
											<div class="campaign_banner_box_list_iteminner">
												<div class="content">
													<p>Free Virtual<br> Trading</p>
												</div>
											</div>
										</div>
										<div class="campaign_banner_box_list_item item4">
											<div class="campaign_banner_box_list_iteminner">
												<div class="content">
													<p>Flat ₹20/order For <br> Intraday And F&O</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab_campaign_banner_box_list ">
									<div class="campaign_banner_box_list_slider owl-carousel">
										<div class="campaign_banner_box_list_item item1">
											<div class="campaign_banner_box_list_iteminner">
												<div class="content">
													<p>₹0 on Equity<br> Delivery Trades,<br>No Hidden Charges</p>
												</div>
											</div>
										</div>
										<div class="campaign_banner_box_list_item item2">
											<div class="campaign_banner_box_list_iteminner">
												<div class="content">
													<p>Get Free<br>Brokerage* For<br>First 90 Days</p>
												</div>
											</div>
										</div>
										<div class="campaign_banner_box_list_item item4">
											<div class="campaign_banner_box_list_iteminner">
												<div class="content">
													<p>Flat ₹20/order For <br> Intraday And F&O </p>
												</div>
											</div>
										</div>
										<div class="campaign_banner_box_list_item item3">
											<div class="campaign_banner_box_list_iteminner">
												<div class="content">
													<p>Free Virtual<br> Trading</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>

	<section class="campaign_cupon_sec campaign_cupon_sec11">
			<div class="container">
				<?php
					$post_id = 357;
					$queried_post = get_post($post_id);
					
				?>
				<div class="heading_sec text-center">
					<h2><?php echo $queried_post->post_title; ?></h2>
					<!-- <h2>Vouchers From <span>Top-Notch</span> Brands</h2> -->
				</div>
				<div class="campaign_cupon_secinner">

					<span class="circle_border left_circle_border"></span>
					<span class="circle_border right_circle_border"></span>
					<span class="circle_border circle_border1"></span>
					<span class="circle_border circle_border2"></span>
					<span class="circle_border circle_border3"></span>
					<span class="circle_border circle_border4"></span>
					<span class="circle_border circle_border5"></span>
					<span class="circle_border circle_border6"></span>
					<span class="circle_border circle_border7"></span>
					<span class="circle_border circle_border8"></span>
					<span class="circle_border circle_border9"></span>
					<span class="circle_border circle_border10"></span>
					<span class="circle_border circle_border11"></span>
					<span class="circle_border circle_border12"></span>
					<span class="circle_border circle_border13"></span>
					<span class="circle_border circle_border14"></span>

					<div class="campaign_cupon_area">
						
						<div class="left_campaign_cupon_area">
							<?php echo $queried_post->post_content; ?>
							
							<!-- <h4>₹ 20000</h4>
							<p>Worth Discount<br>Vouchers</p> -->
						</div>
						<div class="right_campaign_cupon_area">
							<?php 

						    //Get the gallery object
						    $gallery = get_post_gallery($post_id, false );

						    //Form an array with the found ids
						    $gallery_attachment_ids = explode( ',', $gallery['ids'] );
						    // print_r($gallery_attachment_ids);die();	
						 ?>
							<ul class="right_campaign_cupon_list">
								<?php
								foreach ($gallery_attachment_ids as $key => $ids) {
									# code...
								
								?>
								<li>
									<div class="campaign_vouchers_box">
										<span class="vouchers_circle_border vouchers_circle_border1"></span>
										<span class="vouchers_circle_border vouchers_circle_border2"></span>
										<span class="vouchers_circle_border vouchers_circle_border3"></span>
										<span class="vouchers_circle_border vouchers_circle_border4"></span>
										<div class="vouchers_thumnail 1">
											<!-- <img src="<?php echo get_the_post_thumbnail_url($attachment_id,$image_name,$post_id,$image_id,$image_thumb_url); ?>" class="img-fluid"> -->
											
											<?php echo do_shortcode('[gallery ids="'.$ids.'"]'); ?>
										</div>
									</div>
								</li>
								<?php } ?>
								
								<li>
									<div class="campaign_vouchers_box">
										<span class="vouchers_circle_border vouchers_circle_border1"></span>
										<span class="vouchers_circle_border vouchers_circle_border2"></span>
										<span class="vouchers_circle_border vouchers_circle_border3"></span>
										<span class="vouchers_circle_border vouchers_circle_border4"></span>
										<div class="vouchers_thumnail">
											<p>& Many More </p>
										</div>
									</div>
								</li>


							</ul>

							<span class="campaign_cupon_info">*Complete the demat account opening process to redeem the
								offers</span>
						</div>
					</div>
				</div>
			</div>
	</section>

	<section class="campaign_how_it_works_sec">
		<div class="container">
			<div class="campaign_how_it_works_sec">
				<ul class="campaign_how_it_works_list">
					<?php
	      			$offering_args = array(
	      			'post_type' => 'campaign',
	      			'posts_per_page' => 3,
	      			'category_name' => 'Campaign Info'
	      			);
	      			$offering_posts = new WP_Query($offering_args);
	      			while($offering_posts->have_posts()){
	      			$offering_posts->the_post();
	      			?>
					<li class="active">
						<div class="icon">
						<?php the_post_thumbnail();?>
						</div>
						<div class="content">
						<?php the_excerpt();?>
						</div>
					</li>
					<?php }?>

				</ul>
			</div>
		</div>
	</section>

	<section class="campaign_user_experience_sec" style="">
		<div class="container">
			<div class="heading_sec text-center">
				<h2>Get a <span>Seamless</span> User Experience</h2>
			</div>
			<div class="campaign_user_experience_secinner">
				<div class="owl-carousel campaign_user_experience_slider">
					<?php
	      			$offering_args = array(
	      			'post_type' => 'campaign',
	      			'posts_per_page' => 12,
	      			'category_name' => 'Seamless'
	      			);
	      			$offering_posts = new WP_Query($offering_args);
	      			while($offering_posts->have_posts()){
	      			$offering_posts->the_post();
	      			?>
					<div class="campaign_user_experience_blk">
						<div class="campaign_user_experience_blkinner">
							<div class="icon">
								<?php the_post_thumbnail();?>
							</div>
							<div class="content">
								<?php the_excerpt();?></div>
						</div>
					</div>
					<?php }?>
					
				</div>
			</div>
		</div>
	</section>

	<section class="demat_faq_sec campaign_faq_sec">
		<div class="container">
			<?php
    		$post_id = 233;
    		$queried_post = get_post($post_id);
    		?>
			<div class="heading_sec text-center">
				<h2><?php echo $queried_post->post_title; ?></h2>
			</div>
			<?php echo $queried_post->post_content; ?>
		</div>
	</section>

</main>


<?php get_footer() ?>