<?php /* Template Name: Page Slider */ ?>

<?php get_header(); ?>

<div class="container">
	
	<section class="row">
		
		<div class="trick col-md-8 col-xs-12">

			<h1 class="center">Welcome friend!</h1>
			<p class="welcome">Here we will present several topics on development and design. It's about this ecosystem, art and technology.</br>
			Will be presented distinguished topics , aiming at the growth of people who are building a new world.</br>
			Our purpose is the expansion of knowledge, nothing more.</p>				

		</div>

	</section>

</div>

<div class="slider">

	<div data-slide="1" class="slider__slide slider__slide--active">

		<div class="slider__wrap">
			<div class="slider__back"></div>
		</div>

		<div class="slider__inner">
			<div class="slider__content">
				<h1>Slide <br> One</h1>
				<a class="go-to-next">next</a>
			</div>
		</div>

	</div>

	<div data-slide="2" class="slider__slide">

		<div class="slider__wrap">
			<div class="slider__back"></div>
		</div>

		<div class="slider__inner">
			<div class="slider__content">
				<h1>Slide <br> Two</h1>
				<a class="go-to-next">next</a>
			</div>
		</div>

	</div>

	<div data-slide="3" class="slider__slide">

		<div class="slider__wrap">
			<div class="slider__back"></div>
		</div>

		<div class="slider__inner">
			<div class="slider__content">
				<h1>Slide <br> Three</h1>
				<a class="go-to-next">next</a>
			</div>
		</div>

	</div>

	<div class="slider__indicators"></div>

</div>

<div class="container">	

	<section class="row">

		<div class="history-posts col-md-12 col-xs-12">

			<h2 class="trick">Recent Topics</h2>
			
			<div class="isotope-grid">

				<div class="grid">

					<?php query_posts( 'posts_per_page=10&order=DESC' ); ?>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<article class="post <?php the_field('add_class'); ?> col-md-6 col-xs-12 isotope-grid-item" <?php post_class( 'class-name' ); ?>>

							<div class="col-md-4 col-xs-12">

								<a href="<?php the_permalink();?>">
									<?php the_post_thumbnail('full', array('class' => 'img-hover img-circle')); ?>
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

						</article> <!-- closes the first div box -->			

					<?php endwhile; else : ?>

						<p><?php _e( 'Sorry, strange things happen.' ); ?></p>

						<!-- REALLY stop The Loop. -->

					<?php endif; ?>				

				</div>	

			</div>	

		</div>	

	</section>

	<section class="row">
		
		<div class="col-md-12 col-xs-12">

			<h3 class="trick seemore"><a href="<?php echo get_home_url(); ?>/history">See more <i class="fa fa-arrow-right" aria-hidden="true"></i></a></h3>
		
		</div>

	</section>

	<section class="row">	

		<div class="topics col-md-12 col-xs-12">

			<div class="col-md-4 col-xs-12">

				<h2 class="trick">Development - Last Topics</h2>

				<?php query_posts( 'category_name=development&posts_per_page=5&order=DESC' ); ?>

				<ul>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						
							<li class="post-trick">
								<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title();?></a>
							</li>
						
					<?php endwhile; else : ?>

						<p><?php _e( 'Sorry, strange things happen.' ); ?></p>

					<?php endif; ?>

				</ul>

			</div>

			<div class="col-md-4 col-xs-12">

				<h2 class="trick">Art - Last Topics</h2>

				<?php query_posts( 'category_name=design&posts_per_page=5&order=DESC' ); ?>

				<ul>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						
							<li class="post-trick">
								<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title();?></a>
							</li>
						
					<?php endwhile; else : ?>

						<p><?php _e( 'Sorry, strange things happen.' ); ?></p>

					<?php endif; ?>

				</ul>

			</div>

			<div class="col-md-4 col-xs-12">

				<h2 class="trick">Tutorials  - Last Topics</h2>

				<?php query_posts( 'category_name=tutorials&posts_per_page=5&order=DESC' ); ?>

				<ul>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						
							<li class="post-trick">
								<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title();?></a>
							</li>
						
					<?php endwhile; else : ?>

						<p><?php _e( 'Sorry, strange things happen.' ); ?></p>

					<?php endif; ?>

				</ul>

			</div>

		</div>

	</section>	

</div>

<script type="text/javascript">
	
	$(document).ready(function(){
	  for (var i=1; i <= $('.slider__slide').length; i++){
	    $('.slider__indicators').append('<div class="slider__indicator" data-slide="'+i+'"></div>')
	  }
	  setTimeout(function(){
	    $('.slider__wrap').addClass('slider__wrap--hacked');
	  }, 1000);
	})

	function goToSlide(number){
	  $('.slider__slide').removeClass('slider__slide--active');
	  $('.slider__slide[data-slide='+number+']').addClass('slider__slide--active');
	}

	$('.slider__next, .go-to-next').on('click', function(){
	  var currentSlide = Number($('.slider__slide--active').data('slide'));
	  var totalSlides = $('.slider__slide').length;
	  currentSlide++
	  if (currentSlide > totalSlides){
	    currentSlide = 1;
	  }
	  goToSlide(currentSlide);
	})

</script>

<?php get_footer(); ?>