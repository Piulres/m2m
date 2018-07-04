<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="Merlim CoreBook - Knowledge Shire">

	<meta name="author" content="Piulres">

	<!-- <meta http-equiv="refresh" content="420; url=http://merlim.xyz/"> -->

	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">

	<!-- <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700,900" rel="stylesheet"> -->

	<title><?php echo get_bloginfo('name'); ?></title>

	<!-- wp_head -->

	<?php include 'le_styles.php' ?>

	<?php include 'le_scripts.php' ?>	
	
	<?php wp_head(); ?>	

</head>

<body <?php body_class(); ?>>

	<nav class="navbar navbar-default">
	<!-- <nav class="navbar navbar-inverse"> -->

		<!-- <div class="container-fluid"> -->
		<div class="container">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Mobile navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- <a class="navbar-brand" href="<?php // echo get_home_url(); ?>"><?php // echo get_bloginfo( 'name' ); ?></a> -->
				<a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img id="logo" class="none" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" /></a>
			</div>			
				
			<?php
	            wp_nav_menu( array(
	                'menu'              => 'menu_top',
	                'theme_location'    => 'primary',
	                'depth'             => 2,
	                'container'         => 'div',
	                'container_class'   => 'collapse navbar-collapse',
	        		'container_id'      => 'menu_top',
	                'menu_class'        => 'menu nav navbar-nav',
	                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	                'walker'            => new wp_bootstrap_navwalker())
	            );
	        ?>

	        <div class="rede-social">
	        	<a target="_blank" href="https://www.facebook.com/M2MSolutions/"><img src="<?php echo get_template_directory_uri(); ?>/img/ico-facebook.png" /></a>
	        	<a target="_blank" href="https://www.linkedin.com/company/m2m-solutions-sa/"><img src="<?php echo get_template_directory_uri(); ?>/img/ico-linkedin.png" /></a>
	        	<a target="_blank" href="https://www.youtube.com/user/CanalM2M"><img src="<?php echo get_template_directory_uri(); ?>/img/ico-youtube.png" /></a>
	        </div>        

		</div>

	</nav>