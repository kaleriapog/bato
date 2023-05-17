<?php 
    $current_file_name = basename(__FILE__, '.php');
    include(__DIR__.'/../core/fields-generator.php');
?>

<?php if (!empty($fields)) : ?>

<section class="section-about-hero section">
    <div class="section-about-hero__media">
        <div id="lottie-people-inner" class="lottie-people-inner">
            <div class="lottie-mask"></div>
        </div>
    </div>
    <div class="section-about-hero__wrapper">
        <div class="main-size">
            <div class="section-about-hero__content">
                <?php insertTitle($title, 'title-large') ?>
                <?php insertText($text, 'section-about-hero__text') ?>
            </div>
        </div>
    </div>
</section>

<?php endif ?>