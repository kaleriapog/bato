<?php
// Template Name: Projects page

$projects_hero = get_field('section_projects_hero', $post->ID);
$projects_list = get_field('section_projects_list', $post->ID);
$projects_reviews = get_field('projects_reviews', $post->ID);
$projects_ready = get_field('section_projects_ready', $post->ID);
$projects_creative_space = get_field('section_creative_space', $post->ID);

get_header();

?>

<main id="primary" class="site-main">

    <?php 
        get_template_part('sections/hero-projects', NULL,
            [
                'fields' => $projects_hero,
            ]
        );

        get_template_part('sections/projects', NULL,
            [
                'fields' => $projects_list,
            ]
        );

        get_template_part('sections/creative-space', NULL,
            [
                'fields' => $projects_creative_space,
            ]
        );

        get_template_part('sections/reviews', NULL,
            [
                'fields' => $projects_reviews,
            ]
        );

        get_template_part('sections/cta', NULL,
            [
                'fields' => $projects_ready,
            ]
        );
    ?>
</main>

<?php


get_footer();
