<?php
// Template Name: Home page
// Template Post Type: post, page

$fields = get_fields();

foreach ($fields as $field_name => $field) {
    ${"$field_name"} = $field;
}

get_header();
?>

<?php if (!empty($subtitles)) : ?>

    <script>
        const subTitles = '<?php echo json_encode($subtitles); ?>';
    </script>

<?php endif ?>

<main id="primary" class="site-main">
    <?php 
        get_template_part('sections/banner', NULL, 
            [
                'big_title' => $big_title,
                'subtitles' => $subtitles,
                'link' => $link,
                'video' => $video,
                'image_bg_mobile' => $image_bg_mobile,
            ]
        );

        get_template_part('sections/about', NULL, 
            [
                'about_title' => $about_title,
                'about_description' => $about_description,
                'about_link' => $about_link,
            ]
        );

        /* get_template_part('sections/slider', NULL, 
            [
                'slider_items' => $slider_items,
            ]
        ); */

        get_template_part('sections/accordion', NULL, 
            [
                'accordion' => $accordion,
            ]
        );

        get_template_part('sections/technologies', NULL,
            [
                'title' => $title,
                'images' => $images,
            ]
        );

        get_template_part('sections/cards', NULL, 
            [
                'cards_title' => $cards_title,
                'cards_services' => $cards_services,
            ]
        );

        get_template_part('sections/offers', NULL, 
            [
                'offers_title' => $offers_title,
                'offers_cards' => $offers_cards,
            ]
        );

        get_template_part('sections/team', NULL, 
            [
                'team_title' => $team_title,
                'team_items' => $team_items,
            ]
        );

        get_template_part('sections/numbers', NULL, 
            [
                'numbers_title' => $numbers_title,
                'numbers_description' => $numbers_description,
                'numbers_cards' => $numbers_cards,
            ]
        );

        get_template_part('sections/contact', NULL, 
            [
                'contact_title' => $contact_title,
                'contact_phrase' => $contact_phrase,
                'contact_image' => $contact_image,
            ]
        );
    ?>
</main>

<div class="block-cube-small">
    <div class="fallback-stage"></div>
    <div class="container">
        <div class="stage">
            <a href="<?php echo home_url('contact') ?>" class="cube">
                <span class="back"><span class="text-only">START A PROJECT</span></span>
                <span class="top"><span class="text-only">START A PROJECT</span></span>
                <span class="bottom"><span class="text-only">START A PROJECT</span></span>
                <span class="left"><span class="text-only">START A PROJECT</span></span>
                <span class="right"><span class="text-only">START A PROJECT</span></span>
                <span class="front"><span class="text-only">START A PROJECT</span></span>
            </a>
        </div>
    </div>
</div>

<?php get_footer(); ?>
