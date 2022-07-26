<?php
/* 
Template Name: Archives
*/
get_header(); ?>

<main class="body_container">
<div class="container"> 
<div id="primary" class="site-content ipo_page_sec">
<div id="content" class="blog_sidebar_widget_content" role="main">
 <ul> 
<?php while ( have_posts() ) : the_post(); ?>
                
<li class="entry-title"><?php the_title(); ?></li>
 
<div class="entry-content">
 

</div><!-- .entry-content -->
 
<?php endwhile; // end of the loop. ?>
 </ul>
</div><!-- #content -->
</div><!-- #primary -->
</div>
</main> 

<?php get_footer(); ?>