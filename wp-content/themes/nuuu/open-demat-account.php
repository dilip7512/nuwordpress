<?php
/**
* Template Name: Open Demat Account
*
*/
get_header() ?>
  <style>
    .morecontent span {display: none;}
    .morelink {display: block;}
    .c-accordion__title{font-size:24px}
    .c-accordion__content p{font-size:16px}
    .c-accordion__content ul{margin-bottom:15px;margin-left: 20px;}
    .c-accordion__content ul li{margin-bottom: 10px;list-style-type: disc;font-size:16px}
    #ac-2173 ul li{list-style-type:decimal;}
  </style>	
<main class="body_container">
  <section class="campaign_feature_sec">
      <div class="container">
        <div class="campaign_feature_secinner">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
              <div class="campaign_feature_img_area">
                <h1><span>Open a Free</span><br> Demat Account</h1>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/campaign_feature_img.svg" class="img-fluid" style="width:100%;">
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
              <div class="campaign_feature_list_area">
                <div class="campaign_feature_list_item">
                  <div class="icon_area"><span class="number"><sub>₹</sub>0</span></div>
                  <div class="content_area">
                    <h4>Equity Delivery Trades</h4>
                    <p>No Hidden Charges</p>
                  </div>
                </div>
                <div class="campaign_feature_list_item">
                  <div class="icon_area"><span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/campaign_feature_icon2.png"
                        class="img-fluid"></span></div>
                  <div class="content_area">
                    <h4>Get Free Brokerage*</h4>
                    <p>For First 90 Days</p>
                  </div>
                </div>
                <div class="campaign_feature_list_item">
                  <div class="icon_area"><span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/campaign_feature_icon3.png"
                        class="img-fluid"></span></div>
                  <div class="content_area">
                    <h4>FREE</h4>
                    <p>Virtual Trading</p>
                  </div>
                </div>
                <div class="campaign_feature_list_item">
                  <div class="icon_area"><span class="number"><sub>₹</sub>20</span></div>
                  <div class="content_area">
                    <h4>Per Order</h4>
                    <p>For Intraday And F&O</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <section class="campaign_investing_form_sec">
      <div class="container">
        <div class="campaign_investing_form_secinner">
           <form action="" role="form" method="post">
            <div class="campaign_investing_form">
              <div class="row">
                <div class="col-md-4 col-sm-4 col-12 campaign_investing_form_blk">
                  <input type="text" name="name" class="form-control" placeholder="Name" pattern="[A-Za-z_]{1,50}" required>
                </div>
                <div class="col-md-4 col-sm-4 col-12 campaign_investing_form_blk">
                  <input type="number" name="number" class="form-control" placeholder="Mobile Number" onKeyPress="if(this.value.length==10) return false;" pattern="/^-?\d+\.?\d*$/" required>
                </div>
                <div class="form-group">
                  <input type="number" name="type" id="Demat" class="form-control" value="3" required hidden>
                </div>
                <div class="col-md-4 col-sm-4 col-12 campaign_investing_form_blk">
                  <button class="theme_btn campaign_investing_form_btn" value="Submit" type="submit" name="submitbtn" target="_blank"><span class="txt">Start Investing</span></button>
                </div>
              </div>
            </div>
          </form>
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
  <section class="theme_how_it_works_sec">
    <div class="container">
      <div class="heading_sec">
        <h2>How To Open A Demat Account In Nuuu</h2>
        <p>Jump-Start in 3 Easy Steps!</p>
      </div>
      <div class="theme_how_it_works_secinner">
        <div class="row">
        	<?php
    			$offering_args = array(
    			'post_type' => 'open-demat-account',
    			'posts_per_page' => 3,
    			'category_name' => 'How to open a demat account on NUUU'
    			);
    			$offering_posts = new WP_Query($offering_args);
    			while($offering_posts->have_posts()){
    			$offering_posts->the_post();
    			?>
          <div class="col-md-4 col-sm-4 col-12 theme_how_it_works_blk">
            <div class="theme_how_it_works_blkinner">
              <div class="icon">
                <?php the_post_thumbnail();?>
              </div>
              <div class="content">
                <h4><?php the_title();?></h4>
                <p><?php the_excerpt();?></p>
              </div>
            </div>
          </div>
          <?php }?>
        </div>
      </div>
      <div class="theme_how_it_works_btn_area">
        <a href="https://www.nuuu.com/kyc" target="_blank" class="theme_btn theme_how_it_works_btn"><span class="txt">Open Demat Account</span></a>
      </div>
    </div>
  </section>

  <section class="demat_about_section">
    <div class="container">
      <div class="demat_about_sectioninner">
        <div class="row">
        	<?php
    			$post_id = 214;
    			$queried_post = get_post($post_id);
    			?>
          <div class="col-md-6 col-sm-6 col-12">
            <div class="demat_about_content">
              <h2><?php echo $queried_post->post_title; ?></h2>
              <div class="content_more">
                <?php echo $queried_post->post_content; ?>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-12">
            <div class="demat_about_img">
              <img src="<?php echo get_the_post_thumbnail_url($post_id); ?>" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="demat_faq_sec">
    <div class="container">
    	<?php
  		$post_id = 217;
  		$queried_post = get_post($post_id);
  		?>
      <div class="heading_sec text-center">
        <h2><?php echo $queried_post->post_title; ?></h2>
      </div>
      <div class="demat_faq_secinner">
        <div class="demat_faq_area">
          <?php echo $queried_post->post_content; ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer() ?>	 

