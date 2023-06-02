<?php 
    $current_file_name = basename(__FILE__, '.php');
    include(__DIR__.'/../core/fields-generator.php');
?>

<?php if (!empty($fields)) : ?>
    <section class="map section">
        <div class="map__wrapper main-size">
            <?php insertTitle($text, 'map__title', 'h2') ?>
            
            <div class="map__content">
                <?php insertImage('new-map.png', 'map__image') ?>

                <div class="map__pin pin pin_left">
                    <?php insertImage('pin__ellipse-big.svg') ?>
                    <?php insertImage('pin__ellipse-small.svg') ?>
                    <div class="pin__icon"><?php insertImage('pin-map.svg') ?></div>
                    <div class="pin__light"></div>
                </div>

                <div class="map__pin pin pin_right">
                    <?php insertImage('pin__ellipse-big.svg') ?>
                    <?php insertImage('pin__ellipse-small.svg') ?>
                    <div class="pin__icon"><?php insertImage('pin-map.svg') ?></div>
                    <div class="pin__light"></div>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>