<?php
// Template Name: Privacy page
// Template Post Type: post, page

$fields = get_fields();
$title = $fields['title'];
$subtitle = $fields['subtitle'];
$text = $fields['text'];

get_header();
?>

<main id="primary" class="site-main">

    <section class="section-privacy">
        <div class="main-size">
            <div class="section-privacy__wrapper">

                <?php insertTitle($title, 'section-privacy__title title_basic') ?>
                <?php insertTitle($subtitle, 'section-privacy__subtitle') ?>
                <?php insertText($text, 'ection-privacy__text') ?>
                
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>