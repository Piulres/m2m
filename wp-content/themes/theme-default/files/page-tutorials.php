<?php /* Template Name: Page Tutorials */ ?>

<?php get_header(); ?>

<div id="page-tutorials" class="container">

	<section class="row">

		<div class="col-md-12 col-xs-12">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="content">

					<h2 class="title">
						<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
							<?php the_title();?>
						</a>
					</h2>

					<div class="entry">
						<?php the_content(); ?>
					</div>	

				</div>

			<?php endwhile; else : ?>

				<p><?php _e( 'Sorry, strange things happen.' ); ?></p>
			
			<?php endif; ?>

		</div>

	</section>

	<section class="row">

		<div class="col-md-12 col-xs-12">

			<div class="isotope-grid">

				<div class="grid">

					<?php	

					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array(
							'posts_per_page' => 5, 
							'paged' => $paged,
							'category_name' =>  'tutorials',
							'order' => DESC
					);
					query_posts($args); 

					?>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						
						<article class="post <?php the_field('add_class'); ?> col-md-12 col-xs-12 isotope-grid-item" <?php post_class( 'class-name' ); ?>>

							<div class="col-md-2 col-xs-12">

								<a href="<?php the_permalink();?>">
									<div class="wp-post-image img-circle" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
									</div>
								</a>

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

						</article>		

					<?php endwhile; else : ?>	

						<p><?php _e( 'Sorry, strange things happen.' ); ?></p>

					<?php endif; ?>

				</div>

			</div>			

		</div>

		<div class="pagination">

			<p class="left"><?php previous_posts_link('<i class="fa fa-arrow-left" aria-hidden="true"></i> Previous'); ?></p>
			<p class="right"><?php next_posts_link('Next <i class="fa fa-arrow-right" aria-hidden="true"></i>'); ?></p>

		</div>

	</section>

</div>

<?php get_footer(); ?>