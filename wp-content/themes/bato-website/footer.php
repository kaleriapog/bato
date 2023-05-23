<?php
	$options = get_fields('options');
?>

<footer id="footer" class="footer">

	<div class="main-size">
		<div class="footer__inner">
			<div class="footer__main">		
				<div class="logo-small"><?php insertImage('logo.png'); ?></div>

				<?php
					wp_nav_menu(
						array(
							'container'  => '',
							'theme_location' => 'menu-header',
							'menu_id'        => 'footer-menu',
							'menu_class'	 => 'footer-menu',
						)
					);
				?>

				<?php if(!empty($options['contacts'])): ?>
					<div class="footer-contacts">
						<?php foreach ($options['contacts'] as $c): ?>
							<a class="footer-contacts__item underline" href="<?php echo $c['link']['url'] ?>"><?php echo $c['link']['title'] ?></a>
						<?php endforeach ?>
					</div>
				<?php endif ?>
			</div>

			<?php if (!empty($options['socials'])): ?>
				<div class="footer-socials">
					<?php foreach ($options['socials'] as $s): ?>
						<a class="footer-socials__item" href="<?php echo $s['url'] ?>" target="_blank" rel="nofollow"><?php insertImage($s['image']) ?></a>
					<?php endforeach ?>
				</div>
			<?php endif ?>
		</div>
	</div>
</footer>

<?php get_template_part('template-parts/cookie-block') ?>

</div>

<?php wp_footer(); ?>

</body>

</html>