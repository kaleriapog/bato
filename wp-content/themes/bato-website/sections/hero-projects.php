<?php 
    $current_file_name = basename(__FILE__, '.php');
    include(__DIR__.'/../core/fields-generator.php');
?>

<?php if (!empty($fields)) : ?>

<section class="section-projects-hero section">
    <div class="main-size">
        <div class="section-projects-hero__wrapper">
            <div class="section-projects-hero__content">
                <?php insertTitle($title, 'title-large', 'h1') ?>
                <?php insertText($text, 'section-projects-hero__text') ?>
            </div>
        </div>
    </div>
</section>

<?php endif ?>