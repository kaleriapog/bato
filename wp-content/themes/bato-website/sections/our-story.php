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
                <?php if (!empty($title)) : ?>
                    <div class="title title_basic"><?php echo $title ?></div>
                <?php endif ?>

                <?php if (!empty($text)) : ?>
                    <div class="section-about-our-story__text"><?php echo $text ?></div>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>

<?php endif ?>