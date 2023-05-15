<?php 
    if(!empty($args)) {
        foreach ($args as $field_name => $field) {
            ${"$field_name"} = $field;
        }
    }

    $hero_title = $fields['title'];
    $hero_text = $fields['text'];
    $hero_file = $fields['lottiefile'];
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

                <?php if (!empty($hero_title)) : ?>
                    <div class="title-large"><?php echo $hero_title ?></div>
                <?php endif ?>

                <?php if (!empty($hero_text)) : ?>
                    <div class="section-about-hero__text"><?php echo $hero_text ?></div>
                <?php endif ?>

            </div>
        </div>
    </div>
</section>

<?php endif ?>