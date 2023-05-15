<?php 
    if(!empty($args)) {
        foreach ($args as $field_name => $field) {
            ${"$field_name"} = $field;
        }
    }

    $about_hq_text = $fields['text'];
    $about_hq_image = $fields['image'];
    $about_hq_image_color = $fields['image_color'];
    $about_hq_image_dots = $fields['image_with_dots'];
?>

<?php if (!empty($about_hq_text)) : ?>
    <section class="section-about-hq section">
        <div class="main-size">
            <div class="section-about-hq__wrapper">

                <?php if (!empty($about_hq_text)) : ?>
                    <div class="section-about-hq__content">
                        <div class="section-about-hq__title">
                            <?php echo $about_hq_text ?>
                        </div>
                    </div>
                <?php endif ?>

                <?php if (!empty($about_hq_image)) : ?>
                    <?php
                        $ellipse_big = 'map-pin-ellipse-big.svg';
                        $ellipse_small = 'map-pin-ellipse-big.svg';
                        $pin = 'pin-map.svg';
                    ?>

                    <div class="section-about-hq__interactive">
                        <div class="section-about-hq__interactive-height">
                            <div class="section-about-hq__interactive-wrapper">
                                <?php insertImage($about_hq_image) ?>
                                <?php insertImage($about_hq_image_color, 'image-globe-active') ?>
                                <?php insertImage($about_hq_image_dots, 'image-globe-active-dots') ?>

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