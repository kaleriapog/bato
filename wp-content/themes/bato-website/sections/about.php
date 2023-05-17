<?php 
    if(!empty($args)) {
        foreach ($args as $field_name => $field) {
            ${"$field_name"} = $field;
        }
    }
?>

<section class="section-about" id="section-about">
    <div class="section-about__inner main-size">
        <div class="section-about__description">
            <?php insertTitle($about_title, 'title_basic title_about', 'h2') ?>
            <?php insertText($about_description, 'section-about__text') ?>
            <?php insertLink($about_link) ?>
        </div>
        <div class="circles-about">
            <?php insertImage('effect-about.png') ?>
        </div>
    </div>
</section>
