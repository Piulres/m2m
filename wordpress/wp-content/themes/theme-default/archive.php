<?php get_header(); ?>

<div id="archive" class="container">

	<section class="row">

		<div class="col-md-12 col-xs-12">

			<h2 class="archive"><?php single_cat_title('Currently browsing in '); ?>.</h2>

		</div>

	</section>

	<section class="row">

		<div class="col-md-12 col-xs-12">

			<div class="isotope-grid">

				<div class="grid">					

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						
						<article class="post <?php the_field('add_class'); ?> col-md-4 col-xs-12 isotope-grid-item" <?php post_class( 'class-name' ); ?>>

							<div class="col-md-4 col-xs-12">

								<a href="<?php the_permalink();?>">
									<?php the_post_thumbnail('thumbnail', array('class' => 'img-hover img-circle')); ?>
								</a>

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

						</article>		

					<?php endwhile; else : ?>	

						<p><?php _e( 'Sorry, strange things happen.' ); ?></p>

					<?php endif; ?>

				</div>

			</div>			

		</div>		

	</section>

</div>

<?php get_footer(); ?>