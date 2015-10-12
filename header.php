<?php if ( ! isset( $_SESSION ) ) session_start(); ?>
<!DOCTYPE html>

<!-- Compat Start -->
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<!-- Compat End -->
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php bloginfo('name').wp_title(); ?></title>

	<?php include "includes/fcc-head-styles.php"; ?>
    <?php wp_head(); ?>

</head>

<body>

	<div id="wrapper">
		<?php if ( get_theme_mod( 'boxed_layout' ) ) : ?>
			<div class="container">
		<?php else: ?>
			<div class="full">
		<?php endif; ?>


		
			<div id="header">
				<div class="container">
					<div class="col-xs-12" id="header-top">
						<!-- <img id="logo" src='<?php bloginfo('template_directory'); ?>/assets/images/logo-1.png'> -->
						<?php if ( get_theme_mod( 'fcc_logo' ) ) : ?>
							<div id='header-logo'>
								<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img id="logo" src='<?php echo esc_url( get_theme_mod( 'fcc_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' ></a>
							</div>
						<?php else : ?>
							<hgroup>
								<h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
								<h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
							</hgroup>
						<?php endif; ?>
					</div>
				</div>
				<div id="header-nav">

					<div id="dummy">
					<nav class="navbar navbar-default" role="navigation">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="<?php echo home_url(); ?>">
									<?php if(get_theme_mod( 'hide_fcc_brand' ) == ''): ?>
										<?php if (get_theme_mod( 'fcc_brand') == ''): 
											bloginfo('name'); 
										endif; ?>
										<?php echo get_theme_mod( 'fcc_brand', 'No nav brand set. Customize the page' ); ?> 
									<?php endif; ?>
								</a>
							</div>

								<?php if ( has_nav_menu( 'primary' ) ) { ?>
								<?php
									wp_nav_menu( array(
										'menu'              => '',
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
								<?php } ?>
					</nav>
					</div>
					</div>
			</div>

<div id="main-content">