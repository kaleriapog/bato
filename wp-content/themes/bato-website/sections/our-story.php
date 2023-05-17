<?php 
    $current_file_name = basename(__FILE__, '.php');
    include(__DIR__.'/../core/fields-generator.php');
?>

<?php if (!empty($fields)) : ?>

<section class="section-about-our-story section">
    <div class="main-size">
        <div class="section-about-our-story__wrapper">
            <div class="section-about-our-story__bg">
                <?php insertImage('effect-story.png') ?>
            </div>

            <div class="section-about-our-story__content">
                <?php insertTitle($title, 'title title_basic') ?>
                <?php insertText($text, 'section-about-our-story__text') ?>
            </div>
        </div>
    </div>
</section>

<?php endif ?>