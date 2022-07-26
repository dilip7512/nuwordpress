<?php
/**
* Template Name: Single Category
*/
 
get_header(); ?> 

<div style="margin-top: 78px;padding: 40px 0 40px;">
	<?php        
if(has_term('category', 'category', $post)) {      
   get_template_part('single-category', 'category');
} else {
   // use default template file single-template.php
   get_template_part('single-template');
}
?>
</div>
 
<section id="primary" class="site-content who_we_are_banner_sec">
	<div id="content" role="main">

		<?php 
		// cprint_r($have_posts);die;
		// Check if there are any posts to display
		if ( have_posts() ) : ?>
		 

		 
		<?php
		 
		// The Loop
		while ( have_posts() ) : the_post();?>

		<div class="col-md-4 offering_list_item">
			<div class="offering_list_iteminner">
				<div class="content">
					<h4><?php single_cat_title(); ?></h4>
					<p><?php the_content(); ?></p>
				</div>
				<div class="icon">
					<?php the_post_thumbnail();?>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/bg1.png" class="img-fluid" alt="" title="">
				</div>
			</div>
		</div>
		 
		<?php endwhile; // End Loop
		 
		else: ?>	
		<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>

	</div>
</section>

<?php get_footer(); ?>