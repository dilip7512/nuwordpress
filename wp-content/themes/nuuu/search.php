<?php get_header() ?>

<main class="body_container">
	<section class="ipo_page_sec">
		<div class="container">
			<div class="row">
				<?php
			    if ( have_posts() ) :
				?>
			    <div class="col-sm-12"><h2>Search results for query: "<?php the_search_query(); ?>"</h2></div>
				<?php
				while ( have_posts() ) : the_post(); ?>
					<div class="col-sm-12 col-md-12">
			        <article class="post">
						<?php if ( has_post_thumbnail() ) { ?>
			                <div class="small-thumbnail">
			                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'small-thumbnail' ); ?></a>
			                </div>
						<?php } ?>
			            <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
			            <p class="post-meta"><?php the_time( 'F jS, Y' ); ?> | <a
			                        href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
			                | <?php
							$categories = get_the_category();
							$comma      = ', ';
							$output     = '';
							
							if ( $categories ) {
								foreach ( $categories as $category ) {
									$output .= '<a href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a>' . $comma;
								}
								echo trim( $output, $comma );
							} ?>
			            </p>
			            <p>
							<?php echo get_the_excerpt() ?>
			                <a href="<?php the_permalink() ?>">Read more &raquo</a>
			            </p>
			        </article>
					</div>
				<?php endwhile;

				else :
					echo '<div class="col-sm-12"><p>No search results found!</p></div>';

				endif;
				 ?>
			</div>
		</div>
	</section>
</main>

<?php get_footer() ?>	