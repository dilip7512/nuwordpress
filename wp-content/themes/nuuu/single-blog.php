<?php
/**
* Template Name: Single Blog
*
*/
 get_header() ?>

<main class="body_container single_blog ipo_page_sec">
  <!-- <section class="single_blog_top_content_sec">
    <div class="container">
     
    </div>
  </section> -->

  <!--  <section class="single_blog_top_banner_sec">
    <div class="container">
      
    </div>
  </section> -->

  <section class="blog_listing_sec">
    <div class="container">
      <div class="blog_listing_secinner">
        <div class="single_blog_top_content_secinner">
          <div class="single_blog_top_content_area">
            <h1><?php the_title();?></h1>
           <!--  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
              industry's standard dummy text ever since the 1500s</p> -->
          </div>
          <div class="single_blog_top_audio_area">
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 col-sm-7 col-12">
            <div class="single_blog_top_banner_secinner">
              <div class="thumnail_area">
                <?php the_post_thumbnail('single-img');?>
              </div>
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
            <div class="blog_listing_area">
              <div class="blog_listing_heading_area">
                <!-- <h4>Stock Market Blogs</h4> -->
              </div>
              <div class="blog_listing_areainner">
                <div class="row">
              <?php
              $blog_args = array(
              'post_type' => 'blog',
              'post_status'=>'publish',
              'posts_per_page' => 6
              );
              ?>
              <div class=" col-12 blog_listing_blk">
                <div class="blog_listing_blkinner">
                  
                  <div class="content_area">
                    <!-- <h4 class="ttl"></h4> -->
                    <div class="single_blog_content_areainner"><?php the_content();?></div>
                   
                  </div>
                </div>
              </div>
             <?php ?>

                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-5 col-12 sidebar_quick_contact_blk blog_sidebar_area" style="display:block;">

             <?php get_sidebar('form') ?>

            <div class="blog_sidebar_widget">
              <div class="blog_sidebar_widget_ttl">
                <h4>Categories</h4>
              </div>
              <div class="blog_sidebar_widget_content">
                <ul>
                  <?php wp_list_categories( array(
                      'orderby'    => 'name',
                      'show_count' => true,
                      'exclude'    => array( 10 )
                  ) ); ?>
                 <!--  <?php
                 $categories = get_the_category( array(
                  'post_type' => 'blog',
                  'taxonomy' => 'BlogCategory',
                    'orderby' => 'name',
                    'order'   => 'ASC'
                ) );
                 
                foreach( $categories as $category ) {
                 echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';   
                }?> -->
                 
                </ul>
              </div>
            </div>


            <div class="blog_sidebar_widget">
              <div class="blog_sidebar_widget_ttl">
                <h4>Archives</h4>
              </div>
              <div class="blog_sidebar_widget_content">
                <ul>
                  <li><a href=""><?php dynamic_sidebar('sidebar-7'); ?></a></li>
                  
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
    
  <section class="related_articale_sec single_blog_related_articale_sec"> 
    <div class="container">
      <div class="related_articale_secinner">
        <ul class="related_articale_list">
         <?php 

            $orig_post = $post;
            global $post;
            $categories = get_the_category($post->ID);
            if ($categories) {
            $category_ids = array();
            foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
            // print_r($category_ids);die;
            $args=array(
            'post_type' => 'blog',
            'category__in' => $category_ids,
            'post__not_in' => array($post->ID),
            'posts_per_page'=> 5, // Number of related posts that will be displayed.
            'caller_get_posts'=>1,
            'orderby'=>'rand' // Randomize the posts
            );
            $my_query = new wp_query( $args );
            if( $my_query->have_posts() ) {
            echo '<div class="related_articale_heading">
            <h4>Related Articles</h4> </div>';
            while( $my_query->have_posts() ) {
            $my_query->the_post(); ?>
            <li>
             
             <a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
             
            </li>
            <?php }
            echo '</ul></div>';
            } }
            $post = $orig_post;
            wp_reset_query(); ?>
        </ul>
      </div>
    </div>
  </section>

</main>


 <?php get_footer() ?>