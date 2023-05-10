<footer id="footer" class="footer">

	<div class="main-size">
		<div class="footer__inner">
			<div class="logo-small"><?php the_custom_logo(); ?></div>
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

<div id="back-to-top" class="back-to-top">
	<span>up</span>
	<img src="<?php echo get_template_directory_uri(); ?>/images/arrow-to-top.svg" alt="to top">
</div>

<?php get_template_part('template-parts/cookie-block', null) ?>

</div>

<?php wp_footer(); ?>

</body>

</html>