<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="p:domain_verify" content="8c4ebfbe04b8294e2c9379ddc0abcc4f"/>
	<title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
	
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NP7JMT5');</script>
	<!-- End Google Tag Manager -->
	<meta name="p:domain_verify" content="c7acd4c593151ae200d27db40479ffea"/>

</head>

<body <?php body_class(); ?>>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NP7JMT5"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<?php get_template_part('template-parts/preloader') ?>

	<div class="body-wrapp">

		<header id="masthead" class="header">
			<div class="header__inner main-size"> 

				<div class="logo"><?php the_custom_logo(); ?></div>

				<nav id="header-navigation" class="header__navigation">
					<div class="navigation-bar">
						<div class="logo"><?php the_custom_logo(); ?></div>
						<div class="navigation-icon-close">
							<span><?php _e('close', 'theme') ?></span>
							<div><?php insertImage('icon-close-nav-header.svg') ?></div>
						</div>
					</div>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-header',
								'menu_id'        => 'header-menu',
								'menu_class'	 => 'header-menu',
							)
						);
					?>
				</nav> 
				<div class="navigation-icon">
					<?php insertImage('menu-icon-header.svg') ?>
				</div>
			</div>
		</header>
