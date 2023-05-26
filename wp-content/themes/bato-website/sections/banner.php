<?php 
    $current_file_name = basename(__FILE__, '.php');
    include(__DIR__.'/../core/fields-generator.php');
?>

<section class="section-banner">
    <div class="section-banner__inner main-size">
        <div class="section-banner__description">
            <div class="headline">
                <?php insertTitle($title, 'title_basic title title-banner', 'h1') ?>
            </div>

            <?php if (!empty($subtitles)) : ?>
                <script>
                    const subTitles = '<?php echo json_encode($subtitles); ?>';
                </script>
                
                <div class="section-banner__subtitle">
                    <p class="subtitle"><?php echo $subtitles[0]["subtitle"] ?></p>
                </div>
            <?php endif ?>
        </div>

        <?php if (!empty($email)) : ?>
            <div class="section-banner__button">
                <span class="section-banner__button-title"><?php _e('Write to us', 'theme') ?></span>
                <a href="mailto:<?php echo $email ?>" class="button button-banner magnetic">
                    <span><?php echo $email ?></span>
                </a>
            </div>
        <?php endif ?>

    </div>
    <div class="section-banner__bg">

        <?php if(!is_mobile()): ?>
            <?php if (!empty($video)) : ?>
                <video autoplay muted playsinline preload="true" loop id="video-bg">
                    <source src="<?php echo $video['url'] ?>" type="video/mp4">
                </video>
            <?php endif ?>

            <div class="section-banner__bg-image">
                <?php insertImage('image-for-safari.png', '', 1, 1) ?>
            </div>
        <?php endif ?>

        <?php if (!empty($image_bg_mobile)) : ?>
            <div class="section-banner__bg-mobile">
                <?php insertImage($image_bg_mobile, '', 0, 1) ?>
            </div>
        <?php endif ?>

        <div class="banner-circle-light">
            <?php insertImage('effect-home-hero.png', '', 0, 1) ?>
        </div>
    </div>
    <div class="halo halo-hiden"></div>
</section>