<?php 
    $current_file_name = basename(__FILE__, '.php');
    include(__DIR__.'/../core/fields-generator.php');
?>

<section class="section-about" id="section-about">
    <div class="section-about__inner main-size">
        <div class="section-about__description">
            <?php insertTitle($about_title, 'title_basic title_about', 'h2') ?>
            <?php insertText($about_description, 'section-about__text') ?>
            <?php insertLink($about_link) ?>
        </div>
        <div class="circles-about">
            <?php insertImage('about-home-effect.png', '', 0) ?>
        </div>
    </div>
</section>
