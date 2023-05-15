<?php
// Template Name: About page
// Template Post Type: post, page

$page_about = get_field('page_about', $post->ID);


$section_hero = $page_about['section_hero'];
$section_our_story = $page_about['section_our_story'];
$section_our_values = $page_about['section_our_values'];
$section_about_team= $page_about['section_about_team'];
$section_about_hq = $page_about['section_about_hq'];
$section_about_family = $page_about['section_about_family'];
$section_about_reviews = $page_about['section_about_reviews'];
$section_about_follow = $page_about['section_about_follow'];
$section_about_ready = $page_about['section_about_ready'];

var_dump($section_about_ready);


get_header();
?>

<div class="about-decorative-page">
    <img src="<?php echo get_template_directory_uri() ?>/images/effect-about.png" alt="decorative image">
</div>

<main id="primary" class="site-main">

    <?php 
        get_template_part('sections/hero', NULL, 
            [
                'fields' => $section_hero,
            ]
        );

        get_template_part('sections/our-story', NULL, 
            [
                'fields' => $section_our_story,
            ]
        );

        get_template_part('sections/our-values', NULL, 
            [
                'fields' => $section_our_values,
            ]
        );

        get_template_part('sections/team-about', NULL, 
            [
                'fields' => $section_about_team,
            ]
        );

        get_template_part('sections/map', NULL, 
            [
                'fields' => $section_about_hq,
            ]
        );

        get_template_part('sections/family', NULL, 
            [
                'fields' => $section_about_family,
            ]
        );

        get_template_part('sections/reviews', NULL, 
            [
                'fields' => $section_about_reviews,
            ]
        );

        get_template_part('sections/follow', NULL, 
            [
                'fields' => $section_about_follow,
            ]
        );

        get_template_part('sections/cta', NULL, 
            [
                'fields' => $section_about_ready,
            ]
        );
    ?>
</main>

<?php get_footer(); ?>
