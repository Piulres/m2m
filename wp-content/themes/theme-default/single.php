<?php get_header(); ?>

<div id="single" class="container">

	<section>

		<div class="row">

			<div class="col-md-12 col-xs-12">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<div class="content">

						<small><?php the_time('F jS, Y'); ?>. by <?php the_author(); ?>.</small>

						<h1>
							<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
								<?php the_title();?>
							</a>
						</h1>

						<div class="entry">
							<?php the_content(); ?>
						</div>

						<p><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?>.</p>
						
						<?php echo do_shortcode('[fbcomments]'); ?>					

					</div>

				<?php endwhile; else : ?>

					<p><?php _e( 'Sorry, strange things happen.' ); ?></p>

				<?php endif; ?>

			</div>

		</div>

	</section>

</div>

<?php get_footer(); ?>