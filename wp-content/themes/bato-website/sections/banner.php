<?php 
/*     $current_file_name = basename(__FILE__, '.php');
    include(__DIR__.'/../core/fields-generator.php'); */

    if(!empty($args)) {
        foreach ($args as $field_name => $field) {
            ${"$field_name"} = $field;
        }
    }
?>

<section class="section-banner">
    <div class="section-banner__inner main-size">
        <div class="section-banner__description">
            <div class="headline">

                <?php if(!empty($title)) { ?>

                    <?php insertTitle($title, 'title_basic title title-banner', 'h1') ?>

                <?php } ?>

            </div>

                <?php if (!empty($subtitles)) : ?>
                    <p class="subtitle"><?php echo $subtitles[0]["subtitle"] ?></p>
                <?php endif ?>

        </div>

        <?php if (!empty($email)) : ?>
            <div class="section-banner__button">
                <span class="section-banner__button-title">Write to us</span>
                <a href="mailto:<?php echo $email ?>" class="button button-banner">
                    <span><?php echo $email ?></span>
                </a>
            </div>
        <?php endif ?>

    </div>
    <div class="section-banner__bg">

        <?php if (!empty($video) && !is_mobile()) : ?>
            <video autoplay muted playsinline preload="true" loop id="video-bg">
                <source src="<?php echo $video['url'] ?>" type="video/mp4">
            </video>
        <?php endif ?>

        <?php if (!empty($image_bg_if_not_video)) : ?>
            <div class="section-banner__bg-image">
                <?php insertImage($image_bg_if_not_video, '', 0, 742, 1080) ?>
            </div>
        <?php endif ?>

        <?php if (!empty($image_bg_mobile)) : ?>
            <div class="section-banner__bg-mobile">
                <?php insertImage($image_bg_mobile, '', 0, 742, 1080) ?>
            </div>
        <?php endif ?>

        <div class="banner-circle-light">
            <?php insertImage('effect-home-hero.png', '', 0) ?>
        </div>
    </div>
    <div class="halo halo-hiden"></div>
</section>