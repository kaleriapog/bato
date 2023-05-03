<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bato-website
 */
?>

<footer id="footer" class="footer">
	<div id="back-to-top" class="back-to-top">
		<span>up</span>
		<img src="<?php echo get_template_directory_uri(); ?>/images/arrow-to-top.svg" alt="to top">
	</div>

	<div class="main-size">
		<div class="footer__inner">
			<div class="logo-small">
				<?php
				the_custom_logo();
				?>
			</div>
			<div class="footer__social">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'social-media',
						'menu_id'        => 'social-media',
						'menu_class'	 => 'social-media',
					)
				);
				?>
			</div>
		</div>
	</div>
</footer>

<?php get_template_part('template-parts/cookie-block', null) ?>


<?php wp_footer(); ?>
</div>
</body>

</html>