<?php /* Template Name: Page History */ ?>

<?php get_header(); ?>

<div id="page-history" class="container">

	<section>

		<div class="row">

			<div class="col-md-12 col-xs-12">

				<!-- Start the Loop. -->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<!-- Display the Title as a link to the Post's permalink. -->
					<div class="content">

						<h2 class="title">
							<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
								<?php the_title();?>
							</a>
						</h2>

						<!-- Display the Post's content in a div box. -->
						<div class="entry">
							<?php the_content(); ?>
						</div>	

					</div> <!-- closes the first div box -->

					<!-- Stop The Loop (but note the "else:" - see next line). -->

				<?php endwhile; else : ?>

					<!-- The very first "if" tested to see if there were any Posts to -->
					<!-- display.  This "else" part tells what do if there weren't any. -->
					<p><?php _e( 'Sorry, strange things happen.' ); ?></p>

					<!-- REALLY stop The Loop. -->
				
				<?php endif; ?>

			</div>

			<div class="col-md-12 col-xs-12">

				<div class="isotope-grid">
	
					<div class="grid">

						<?php	

						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array(
								'posts_per_page' => 10, 
								'paged' => $paged 
						);
						query_posts($args); 

						?>

						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							
							<div class="post col-md-4 col-xs-12 isotope-grid-item" <?php post_class( 'class-name' ); ?>>

								<div class="col-md-4 col-xs-12">

									<?php the_post_thumbnail('thumbnail', array('class' => 'img-circle')); ?>

								</div>

								<div class="col-md-8 col-xs-12">

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

							</div> <!-- closes the first div box -->			

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

		</div>

	</section>

</div>

<?php get_footer(); ?>