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
                <div class="headline__inner">
                    <div class="headline-items">

                        <?php if (!empty($big_title)) : ?>
                            <?php foreach ($big_title as $item) : ?>
                                <div class="headline-item">
                                    <?php insertImage($item, 'headline__letter') ?>
                                </div>
                            <?php endforeach ?>
                        <?php endif ?>

                    </div>
                </div>

                <?php if (!empty($subtitles)) : ?>
                    <p class="subtitle"><?php echo $subtitles[0]["subtitle"] ?></p>
                <?php endif ?>

            </div>

            <?php if (!empty($link)) : ?>
                <div class="section-banner__button">
                    <a class="button-default" target="<?php echo $link['target'] ? $link['target'] : '_self' ?>" href="<?php echo $link['url'] ?>">
                        <span class="button-default__link"><?php echo $link['title'] ?></span>
                    </a>
                </div>
            <?php endif ?>
        </div>
    </div>
    <div class="section-banner__bg">

        <?php if (!empty($video)) : ?>
            <video autoplay muted playsinline preload="true" loop id="video-bg">
                <source src="<?php echo $video['url'] ?>" type="video/mp4">
            </video>
        <?php endif ?>

        <?php if (!empty($image_bg_mobile)) : ?>
            <div class="section-banner__bg-mobile">
                <img src="<?php echo $image_bg_mobile['url'] ?>" alt="<?php echo $image_bg_mobile['alt'] ?>" width="742" height="1080">
            </div>
        <?php endif ?>

        <div class="banner-circle-light">
            <div class="banner-circles">
                <div class="circle-item-small-wrapp">
                    <span id="circle-item-small" class="banner-circle-item circle-item-small"></span>
                </div>
                <div class="circle-item-big-wrapp">
                    <span id="circle-item-big" class="banner-circle-item circle-item-big"></span>
                </div>
            </div>
            <div class="banner-light-wrapp">
                <span id="banner-light" class="banner-light"></span>
            </div>
        </div>
    </div>
    <div class="halo halo-hiden"></div>
</section>