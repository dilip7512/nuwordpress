<?php 
/**
* Template Name: Term Definitions for Stock Trading Options
*
*/
get_header() ?>

<main class="body_container">

	<section class="single_blog_top_content_sec">
    <div class="container">
    	<?php
  		$post_id = 247;
  		$queried_post = get_post($post_id);
  		?>
      <div class="single_blog_top_content_secinner">
        <div class="single_blog_top_content_area">
          <h1><?php echo $queried_post->post_title; ?></h1>
          <p>K: Intraday trading advice for stocks</p>
        </div>
        <div class="single_blog_top_social_area">
          <ul class="single_blog_top_social_list">
            <li><a href="#" class="facebook"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/facebook.svg" class="img-fluid" alt=""
                  title=""></a></li>
            <li><a href="#" class="twitter"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/twitter.svg" class="img-fluid" alt=""
                  title=""></a></li>
            <li><a href="#" class="linkdin"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/linkdin.svg" class="img-fluid" alt=""
                  title=""></a></li>
            <li><a href="#" class="instagram"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/instagram.svg" class="img-fluid" alt=""
                  title=""></a></li>
          </ul>
        </div>
        <div class="single_blog_top_audio_area">
        </div>
      </div>
    </div>
  </section>

  <section class="single_blog_top_banner_sec">
    <div class="container">
      <div class="single_blog_top_banner_secinner">
        <div class="thumnail_area">
          <img src="<?php echo get_the_post_thumbnail_url($post_id); ?>" class="img-fluid" alt="" title="">
        </div>
      </div>
    </div>
  </section>

  <section class="blog_listing_sec single_blog_sec">
    <div class="container">

      <div class="blog_listing_secinner single_blog_secinner">
        <div class="row">
          <div class="col-md-8 col-sm-7 col-12">
            <div class="single_blog_content_area">
              
	    		  <?php echo $queried_post->post_content; ?>

            </div>


            <section class="related_articale_sec single_blog_related_articale_sec">

              <div class="related_articale_heading">
                <h4>Related Articles</h4>
              </div>
              <div class="related_articale_secinner">
                <ul class="related_articale_list">
                  <li><a href="#"><span class="txt">Lorem Ipsum is simply dummy text of the printing</span></a></li>
                  <li><a href="#"><span class="txt">Lorem Ipsum is simply dummy text of the printing</span></a></li>
                  <li><a href="#"><span class="txt">Lorem Ipsum is simply dummy</span></a></li>
                  <li><a href="#"><span class="txt">Lorem Ipsum is simply dummy text of the printing</span></a></li>
                  <li><a href="#"><span class="txt">Lorem Ipsum</span></a></li>
                </ul>
              </div>
            </section>

          </div>

          <div class="col-md-4 col-sm-5 col-12 sidebar_quick_contact_blk blog_sidebar_area" style="display:block;">
            <?php get_sidebar('form') ?>

            <div class="blog_sidebar_widget">
              <div class="blog_sidebar_widget_ttl">
                <h4>Categories</h4>
              </div>
              <div class="blog_sidebar_widget_content">
                <ul>
                  <li><a href="">Lorem Ipsum Lorem Ipsum (25)</a></li>
                  <li><a href="">Lorem Ipsum Lorem Ipsum (12)</a></li>
                  <li><a href="">Lorem Ipsum (156)</a></li>
                </ul>
              </div>
            </div>

            <div class="blog_sidebar_widget">
              <div class="blog_sidebar_widget_ttl">
                <h4>Archives</h4>
              </div>
              <div class="blog_sidebar_widget_content">
                <ul>
                  <li><a href="">Lorem Ipsum (25)</a></li>
                  <li><a href="">Lorem Ipsum Lorem Ipsum (12)</a></li>
                  <li><a href="">Lorem Ipsum (2)</a></li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
    
</main>


<?php get_footer() ?>