<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="Merlim CoreBook - Knowledge Shire">

	<meta name="author" content="Piulres">

	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>favicon.png">

	<title><?php echo get_bloginfo('name'); ?></title>

	<!-- wp_head -->

	<?php wp_head(); ?>

	<?php include 'le_styles.php' ?>

	<?php include 'le_scripts.php' ?>

	<script type="text/javascript">

		function resizeText(multiplier) {
		  if (document.body.style.fontSize == "") {
		    document.body.style.fontSize = "1.0em";
		  }
		  document.body.style.fontSize = parseFloat(document.body.style.fontSize) + (multiplier * 0.1) + "em";

		}
		
	</script>

</head>

<body <?php body_class(); ?>>

	<?php if ( is_home() ) { /* do */ } else { ?>

		<div id="accessibility">

			<?php include 'accessibility.php' ?>
			
		</div>

	<?php } ?>

	<!-- <nav class="navbar navbar-default"> -->
	<nav class="navbar navbar-inverse">

		<div class="container-fluid">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Mobile navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo get_home_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
			</div>			
				
			<?php
	            wp_nav_menu( array(
	                'menu'              => 'menu_top',
	                'theme_location'    => 'primary',
	                'depth'             => 2,
	                'container'         => 'div',
	                'container_class'   => 'collapse navbar-collapse',
	        		'container_id'      => 'bs-example-navbar-collapse-1',
	                'menu_class'        => 'nav navbar-nav',
	                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	                'walker'            => new wp_bootstrap_navwalker())
	            );
	        ?>	        

	        <!-- 
	        <div class="plustext trick" onclick="resizeText(1)"><i class="fa fa-plus" aria-hidden="true"></i><i class="fa fa-font" aria-hidden="true"></i></div>

			<div class="minustext trick" onclick="resizeText(-1)"><i class="fa fa-minus" aria-hidden="true"></i><i class="fa fa-font" aria-hidden="true"></i></div>			
 			-->

		</div><!-- /.container-fluid -->

	</nav>

