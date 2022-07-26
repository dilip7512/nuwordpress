<?php 
/**
* Template Name: About
*
*/
get_header() ?>

<main class="body_container">
  <section class="who_we_are_banner_sec">
    <div class="container">
      <div class="who_we_are_banner_secinner">
        <div class="row row_box">
          <div class="col-lg-5 col-md-6 col-sm-6 col-6 column_box">
          <div class="who_we_are_banner_content">
          <h1>Discover<br>Smarter Finance<br>Opportunities  </h1>    
          </div>          
          </div>
          <div class="col-lg-7 col-md-6 col-sm-6 col-6 column_box">
          <div class="who_we_are_banner_img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/who_we_are_banner_img.svg" class="img-fluid">
        </div> 
        </div>
      </div>
      </div>
    </div>
  </section>

  <section class="who_we_are_overview_sec">
    <div class="container">
      <?php
        $post_id = 142;
        $queried_post = get_post($post_id);
      ?>
    <div class="theme_heading text-center">
          <h2 class="heading_ttl"><?php echo $queried_post->post_title; ?></h2>
        </div>
    <div class="who_we_are_overview_secinner">
    <div class="content text-center">
    <p><?php echo $queried_post->post_content; ?> </p>
    </div>
    </div>
    </div>
  </section>

  <section class="who_we_are_belisfs_sec">
    <div class="container">
    <div class="theme_heading text-center">
          <h2 class="heading_ttl">Our Beliefs</h2>
        </div>
    <div class="who_we_are_belisfs_secinner">
    <div class="row row_box">
    <?php
      $offering_args = array(
      'post_type' => 'who-we-are',
      'posts_per_page' => 4,
      'category_name' => 'Our Beliefs'
      );
      $offering_posts = new WP_Query($offering_args);
      while($offering_posts->have_posts()){
      $offering_posts->the_post();
    ?>
    <div class="col-lg-6 col-md-6 col-sm-6 col-12 who_we_are_belisfs_box column_box">
    <div class="who_we_are_belisfs_boxinner">
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
        <div class="other_product_list_fld_area">
          <div class="row other_product_list_area2 desktop_fld">
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
            <div class="col-md-4 other_product_list_item">
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
            
          </div>
          <div class="other_product_list_area other_product_list_area2 owl-carousel tab_fld">
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
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer() ?>