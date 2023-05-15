<?php 
    $current_file_name = basename(__FILE__, '.php');
    include(__DIR__.'/../core/fields-generator.php');
?>

<?php if (!empty($fields)) : ?>

<section class="section-projects-hero section">
    <div class="main-size">
        <div class="section-projects-hero__wrapper">
            <div class="section-projects-hero__content">

                <?php if (!empty($title)) : ?>

                    <h1 class="title-large"><?php echo $title ?></h1>

                <?php endif ?>

                <?php if (!empty($text)) : ?>

                    <div class="section-projects-hero__text"><?php echo $text ?></div>

                <?php endif ?>

            </div>
        </div>
    </div>
</section>

<?php endif ?>