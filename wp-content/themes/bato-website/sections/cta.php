<?php 
    $current_file_name = basename(__FILE__, '.php');
    include(__DIR__.'/../core/fields-generator.php');
?>

<?php if (!empty($fields)) : ?>

<section class="section-about-ready section">
    <div class="main-size">
        <div class="section-about-ready__wrapper">
            <?php insertTitle($title, 'title title_basic') ?>
            <?php insertLink($link, 'button-big-color') ?>
        </div>
    </div>
</section>

<?php endif ?>