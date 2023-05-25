<?php
// Template Name: About page
// Template Post Type: post, page

get_header();
?>

<div class="about-decorative-page">
    <?php insertImage('about-home-effect.png', '', 0) ?>
</div>

<main id="primary" class="site-main">
    <?php get_template_part('core/block-loader'); ?>
</main>

<?php get_footer(); ?>
