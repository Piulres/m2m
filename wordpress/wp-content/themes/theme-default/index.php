<?php
/**
 * Index Page Template
 **/
?>

<?php get_header(); ?>

<div id="home" class="container">

	<section>

		<div class="row">
			
			<div class="col-md-8 col-xs-12">

				<h1 class="center">Welcome friend!</h1>
				<h2 class="welcome">Here we will present several topics on development and design. It's about this ecosystem, art and technology.</br>
				Will be presented distinguished topics , aiming at the growth of people who are building a new world.</br>
				Our purpose is the expansion of knowledge, nothing more.</h2>				

			</div>

			<div class="col-md-4 col-xs-12">
			
				<?php get_search_form(); ?>

				<?php if ( is_active_sidebar( 'home' ) ) : ?>
					
					<?php dynamic_sidebar( 'home' ); ?>

				<?php endif; ?>

			</div>

		</div>		

		<div class="row">

			<div class="history-posts col-md-12 col-xs-12">

				<h2>Recent Topics</h2>
				
				<div class="isotope-grid">
	
					<div class="grid">

						<?php query_posts( 'posts_per_page=6&order=DESC' ); ?>

						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

							<div class="post col-md-6 col-xs-12 isotope-grid-item" <?php post_class( 'class-name' ); ?>>

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

							<!-- REALLY stop The Loop. -->

						<?php endif; ?>				

					</div>	

				</div>	

			</div>	

		</div>

		<div class="row">
			
			<div class="col-md-12 col-xs-12">

				<h3 class="seemore"><a href="<?php echo get_home_url(); ?>/history">See more <i class="fa fa-arrow-right" aria-hidden="true"></i></a></h3>
			
			</div>

		</div>

		<div class="row">	

			<div class="topics col-md-12 col-xs-12">

				<div class="col-md-4 col-xs-12">

					<h2>Development - Last Topics</h2>

					<?php query_posts( 'category_name=development&posts_per_page=5&order=DESC' ); ?>

					<ul>

						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							
								<li>
									<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title();?></a>
								</li>
							
						<?php endwhile; else : ?>

							<p><?php _e( 'Sorry, strange things happen.' ); ?></p>

						<?php endif; ?>

					</ul>

				</div>

				<div class="col-md-4 col-xs-12">

					<h2>Art - Last Topics</h2>

					<?php query_posts( 'category_name=design&posts_per_page=5&order=DESC' ); ?>

					<ul>

						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							
								<li>
									<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title();?></a>
								</li>
							
						<?php endwhile; else : ?>

							<p><?php _e( 'Sorry, strange things happen.' ); ?></p>

						<?php endif; ?>

					</ul>

				</div>

				<div class="col-md-4 col-xs-12">

					<h2>Tutorials  - Last Topics</h2>

					<?php query_posts( 'category_name=tutorials&posts_per_page=5&order=DESC' ); ?>

					<ul>

						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							
								<li>
									<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title();?></a>
								</li>
							
						<?php endwhile; else : ?>

							<p><?php _e( 'Sorry, strange things happen.' ); ?></p>

						<?php endif; ?>

					</ul>

				</div>

			</div>

		</div>

	</section>

</div>

<?php get_footer(); ?>