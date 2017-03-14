<?php get_header(); ?>

<div id="search" class="container">

	<section>

		<div class="row">

			<div class="col-md-12 col-xs-12">

			<h2 class="search-title">
				<?php echo $wp_query->found_posts; ?> <?php _e( '- Search for', 'locale' ); ?>: <?php the_search_query(); ?>
			</h2>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<div class="post" <?php post_class( 'class-name' ); ?>>

						<div class="col-md-2 col-xs-12">

							<?php the_post_thumbnail('thumbnail', array('class' => 'img-circle')); ?>

						</div>

						<div class="col-md-10 col-xs-12">

							<h3>
								<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
									<?php the_title();?>
								</a>
							</h3>

							<small>
								<?php the_date('F j, Y'); ?> at <?php the_time('G:i'); ?> by <?php the_author(); ?>
							</small>

							<p class="postmetadata">
								<?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?>
							</p>

							<div class="entry">
								<?php the_excerpt(); ?>
							</div>

						</div>	

					</div>			

				<?php endwhile; else : ?>

					<p><?php _e( 'Sorry, strange things happen.' ); ?></p>
					
				<?php endif; ?>

			</div>

		</div>

	</section>

</div>

<?php get_footer(); ?>