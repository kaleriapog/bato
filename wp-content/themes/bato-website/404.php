<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package bato-website
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<div class="main-size">
				<h1 class="title-not-found">404</h1>
				<a class="link-to-home" href="<?php echo get_home_url() ?>">home</a>
			</div>
		</section><

	</main>

<?php
get_footer();
