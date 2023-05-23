<?php

get_header();

$fields = get_fields();

foreach ($fields as $field_name => $field) {
    ${"$field_name"} = $field;
}
?>

<?php if (!empty($subtitles)) : ?>
    <script>
        const subTitles = '<?php echo json_encode($subtitles); ?>';
    </script>
<?php endif ?>

<main id="primary" class="site-main">
    <?php get_template_part('core/block-loader'); ?>

    <?php 
        get_template_part('sections/banner', NULL, 
            [
                'title_banner' => $title_banner,
                'subtitles' => $subtitles,
                'email' => $email,
                'video' => $video,
                'image_bg_mobile' => $image_bg_mobile,
                'image_bg_if_not_video' => $image_bg_if_not_video
            ]
        );

        get_template_part('sections/about', NULL, 
            [
                'about_title' => $about_title,
                'about_description' => $about_description,
                'about_link' => $about_link,
            ]
        );

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

<?php get_template_part('template-parts/cube');  ?>

<?php get_footer(); ?>
