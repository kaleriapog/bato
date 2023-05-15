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

                <?php if (!empty($title)) : ?>
                    <div class="title-large"><?php echo $title ?></div>
                <?php endif ?>

                <?php if (!empty($text)) : ?>
                    <div class="section-about-hero__text"><?php echo $text ?></div>
                <?php endif ?>

            </div>
        </div>
    </div>
</section>

<?php endif ?>