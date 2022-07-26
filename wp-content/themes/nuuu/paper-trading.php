<?php 
/**
* Template Name: Paper Trading
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
          <h1>You have nothing to lose when playing with Nuuu Paper Trading</h1>    
          </div>          
          </div>
          <div class="col-lg-7 col-md-6 col-sm-6 col-6 column_box">
          <div class="who_we_are_banner_img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/paper-trading-banner.svg" class="img-fluid">
        </div> 
        </div>
      </div>
      </div>
    </div>
  </section>

  <section class="who_we_are_overview_sec">
    <div class="container">
    <div class="theme_heading text-center">
          <h2 class="heading_ttl">Features</h2>
        </div>
    <div class="who_we_are_belisfs_secinner">
    <div class="row row_box">
    <?php
      $offering_args = array(
      'post_type' => 'paper-trading',
      'posts_per_page' => 4,
      'category_name' => 'Features'
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

  <section class="who_we_are_belisfs_sec">
    <div class="container">
      <?php
        $post_id = 480;
        $queried_post = get_post($post_id);
      ?>
    <div class="theme_heading text-center">
          <h2 class="heading_ttl"><?php echo $queried_post->post_title; ?></h2>
        </div>
    <div class="who_we_are_overview_secinner">
    <div class="content">
    <p><?php echo $queried_post->post_content; ?> </p>
    </div>
    </div>
    </div>
  </section>

  <section class="demat_faq_sec">
    <div class="container">
      <?php
      $post_id = 481;
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