<?php /* Template Name: Page Real World */ ?>

<?php get_header(); ?>

<div id="page-real-world" class="container">

	<section>

		<div class="row">

			<div class="col-md-12 col-xs-12">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<div class="content">

						<h2>
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

			<div class="col-md-12 col-xs-12">

				<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array(
						'posts_per_page' => 10, 
						'paged' => $paged,
						'category_name' =>  'real-world',
						'order' => DESC
				);
				query_posts($args);  ?>						

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
							
							<div class="entry">
								<?php the_excerpt(); ?>
							</div>

						</div>	

					</div>		
					
				<?php endwhile; ?>

					<p><?php previous_posts_link('Previous >'); ?></p>
					<p><?php next_posts_link('< Next '); ?></p>

				<?php else : ?>

					<p><?php _e( 'Sorry, strange things happen.' ); ?></p>

				<?php endif; ?>					

			</div>

		</div>

	</section>

</div>

<?php get_footer(); ?>