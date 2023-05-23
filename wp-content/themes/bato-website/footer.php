<footer id="footer" class="footer">

	<div class="main-size">
		<div class="footer__inner">
			<div class="logo-small"><?php insertImage('logo.png'); ?></div>
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

<?php //get_template_part('template-parts/cookie-block') ?>

</div>

<?php wp_footer(); ?>

</body>

</html>