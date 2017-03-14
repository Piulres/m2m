<?php get_header(); ?>

<div id="page" class="container">

	<section>

		<div class="row">

			<div class="col-md-12 col-xs-12">

				<!-- Start the Loop. -->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<!-- Display the Title as a link to the Post's permalink. -->
					<div class="content">

						<h2>
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

		</div>

	</section>

</div>

<?php get_footer(); ?>