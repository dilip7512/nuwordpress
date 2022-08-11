<?php 
/**
* Template Name: Info
*
*/
get_header() ?>

<main class="body_container">
<!--     <section class="blog_listing_banner_sec">
      <div class="container">
        <div class="blog_listing_banner_secinner">
          <div class="blog_listing_banner_content">
            <h1>The Advantages of Having a Demat Account in India</h1>
            <p>A Demat account is a place where you can keep electronic copies of your investments and financial securities. National Securities Depository...</p>
            <a href="the-advantages-of-having-a-demat-account-in-india.html" class="theme_btn read_articale_link"><span class="txt">Read Article</span></a>
          </div>
        </div>
      </div>
    </section> -->

    <section class="blog_listing_sec ipo_page_sec">
      <div class="container">

        <div class="blog_listing_secinner">
          <div class="row">
            <div class="col-md-8 col-sm-7 col-12">
              <div class="blog_listing_area">
                <div class="blog_listing_heading_area">
                  <h4>Stock Market Blogs</h4>
                </div>
                <div class="blog_listing_areainner">
                  <div class="row">
                 <?php
                  $current = get_query_var('paged') ? get_query_var('paged'): 1;
                  $paginationtest = new WP_Query(array(
                  'post_type' => 'blog',
                  'posts_per_page' => 6,
                  'paged' => $current,
                  
                  ));
                  
                  while($paginationtest->have_posts()) : 
                  $paginationtest->the_post();
                  ?>

                  <div class="col-md-6 col-sm-6 col-12 blog_listing_blk">
                    <div class="blog_listing_blkinner">
                      <div class="thumnail_area">
                       <a href="<?php the_permalink();?>"> <?php the_post_thumbnail();?></a>
                      </div>
                      <div class="content_area">
                       <h4 class="ttl"> <a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                        <div class="des"><?php the_excerpt();?></div>
                        <!-- <a href="<?php the_permalink();?>" class="theme_btn2 read_article_btn"><span class="txt">Read Article</span></a> -->
                      </div>
                    </div>
                  </div>


                 <?php endwhile;?>
                <div class="col-12 my-pagination">
                  <?php
                  $totalpage = $paginationtest->max_num_pages;
                   echo paginate_links(array(
                  'total' => $totalpage,
                  'current' => $current,
                  'type' => 'list',
                  'show_all' => true,
                  ));
                  ?>
                </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-5 col-12 sidebar_quick_contact_blk blog_sidebar_area" style="display:block;">
               <?php get_sidebar('form') ?>
               <?php get_sidebar('blog') ?>
 <!--  <?php
            $offering_args = array(
            'post_type' => 'blog',
            'posts_per_page' => 30,
             'category_name' => $cat_name
            );
            $cat_name = new WP_Query($offering_args);
            while($cat_name->have_posts()){
            $cat_name->the_post();
          ?>
              <li><a href="<?php the_permalink()?>"><?php the_title();?></a></li>
          <?php }?>  -->           




              <div class="blog_sidebar_widget">
                <div class="blog_sidebar_widget_ttl">
                  <h4>Categories</h4>
                </div>
                <div class="blog_sidebar_widget_content">
                <!-- <ul> -->
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
                  ));
                foreach( $categories as $category ) {
                 echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';   
                }?> -->
                 
                <!-- </ul> -->
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
    
</main>

<?php get_footer() ?>