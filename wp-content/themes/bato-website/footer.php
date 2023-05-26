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

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NP7JMT5');</script>
<!-- End Google Tag Manager -->

<?php wp_footer(); ?>

</body>

</html>