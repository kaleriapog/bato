<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bato-website
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="p:domain_verify" content="8c4ebfbe04b8294e2c9379ddc0abcc4f"/>
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

<style>
	@keyframes preloader_animation {
		0% {
			transform: translateY(0);
		}
		100% {
			transform: translateY(-100%);
		}
	}

	.preloader {
		transition: transform 3s ease;
		display: flex;
		align-items: center;
		justify-content: center;
		position: fixed;
		z-index: 100;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		width: 100vw;
		height: 100vh;
		background-color: #121212;
		overflow: hidden;
	}
	
    .preloader__wrapp {
      position: relative;
    }

	.preloader__wrapp::after {
	  content: "";
	  background-color: rgba(18, 18, 18, 0.5);
	  position: absolute;
	  z-index: 1;
	  left: 0;
	  right: 0;
	  top: 0;
	  bottom: 0;
	  transform: translateY(0);
	}

	.preloader-start {
		animation: preloader_animation 1s cubic-bezier(0.22, 0.17, 0, 0.98) 1.5s forwards;
	}

    .preloader-start .preloader__wrapp::after {
		animation: preloader_animation 1.5s linear forwards;
    }
</style>

<div class="preloader">
    <div class="preloader__wrapp"><?php insertImage('preloader.svg') ?></div>
</div>
<div class="preloader-menu-mob"></div>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NP7JMT5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	
<div class="body-wrapp">
<?php wp_body_open(); ?>

	<header id="masthead" class="header">
		<div class="header__inner main-size"> 
			<div class="logo">
				<?php the_custom_logo(); ?>
			</div>
			<nav id="header-navigation" class="header__navigation">
				<div class="navigation-bar">
					<div class="logo">
						<?php
							the_custom_logo();
						?>
					</div>
					<div class="navigation-icon-close">
						<span>close</span>
						<div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/icon-close-nav-header.svg" alt="icon menu close">
						</div>
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
				<img src="<?php echo get_template_directory_uri(); ?>/images/menu-icon-header.svg" alt="icon menu">
			</div>
        </div>
	</header>
