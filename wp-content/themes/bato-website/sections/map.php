<?php 
    $current_file_name = basename(__FILE__, '.php');
    include(__DIR__.'/../core/fields-generator.php');
?>

<?php if (!empty($fields)) : ?>
    <section class="section-about-hq section">
        <div class="main-size">
            <div class="section-about-hq__wrapper">

                <?php if (!empty($text)) : ?>
                    <div class="section-about-hq__content">
                        <div class="section-about-hq__title">
                            <?php echo $text ?>
                        </div>
                    </div>
                <?php endif ?>

                <?php if (!empty($image)) : ?>
                    <?php
                        $ellipse_big = 'map-pin-ellipse-big.svg';
                        $ellipse_small = 'map-pin-ellipse-big.svg';
                        $pin = 'pin-map.svg';
                    ?>

                    <div class="section-about-hq__interactive">
                        <div class="section-about-hq__interactive-height">
                            <div class="section-about-hq__interactive-wrapper">
                                <?php insertImage($image) ?>
                                <?php insertImage($image_color, 'image-globe-active') ?>
                                <?php insertImage($image_with_dots, 'image-globe-active-dots') ?>

                                <div class="pin pin-fr">
                                    <?php insertImage($ellipse_big) ?>
                                    <?php insertImage($ellipse_small) ?>
                                    
                                    <div class="pin__icon">
                                        <?php insertImage($pin) ?>
                                    </div>

                                    <div class="pin__light"></div>
                                </div>

                                <div class="pin pin-kh">
                                    <?php insertImage($ellipse_big) ?>
                                    <?php insertImage($ellipse_small) ?>

                                    <div class="pin__icon">
                                        <?php insertImage($pin) ?>
                                    </div>

                                    <div class="pin__light"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif ?>

            </div>
        </div>
    </section>
<?php endif ?>