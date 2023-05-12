<?php
// Template Name: Contact page
// Template Post Type: post, page

$fields = get_fields();

foreach ($fields as $field_name => $field) {
    ${"$field_name"} = $field;
}

$shortcode = $form['shortcode'];
$title_forms = $form['title_forms'];

get_header();
?>

<main id="primary" class="site-main">
    <section class="contact-page section">
        <div class="main-size">
            <div class="contact-page__wrapper">
                <div class="contact-page__info">

                    <?php if (!empty($title)) : ?>
                        <div class="contact-page__title title title_basic"><?php echo $title ?></div>
                    <?php endif ?>

                    <?php if (!empty($text)) : ?>
                        <div class="contact-page__text text"><?php echo $text ?></div>
                    <?php endif ?>

                    <?php if (!empty($contacts)) : ?>
                        <div class="contact-page__columns">

                            <?php foreach ($contacts as $item) : ?>
                                <?php
                                    $title = $item['title'];
                                    $items_elem = $item['items'];
                                ?>

                                <div class="contact-page__col contact-item">
                                    <div class="contact-item__title"><?php echo $title ?></div>

                                    <?php if (!empty($items_elem)) : ?>
                                        <?php foreach ($items_elem as $item_elem) : ?>
                                            <?php
                                                $name = $item_elem['name'];
                                                $mode = $item_elem['mode'];
                                            ?>

                                            <?php if ($mode === 'Mail') : ?>
                                                <a href="mailto:<?php echo $name ?>" class="contact-item__item"><?php echo $name ?></a>
                                            <?php elseif ($mode === 'Tel') : ?>
                                                <a href="tel:<?php echo preg_replace("/[^0-9]/", "", $name); ?>" class="contact-item__item"><?php echo $name ?></a>
                                            <?php elseif ($mode === 'Address') : ?>
                                                <address class="contact-item__item"><?php echo $name ?></address>
                                            <?php else : ?>
                                                <a href="<?php echo $name ?>" class="contact-item__item"><?php echo $name ?></a>
                                            <?php endif ?>

                                        <?php endforeach ?>
                                    <?php endif ?>

                                </div>
                            <?php endforeach ?>

                        </div>

                    <?php endif ?>

                </div>

                <?php if (!empty($shortcode)) : ?>
                    <div class="contact-page__form">

                        <?php if (!empty($title_forms)) : ?>
                            <h3 class="contact-page__form-title title title_basic"><?php echo $title_forms ?></h3>
                        <?php endif ?>

                        <?php if (!empty($shortcode)) : ?>
                            <?php echo do_shortcode($shortcode) ?>
                        <?php endif ?>

                    </div>
                <?php endif ?>

            </div>
        </div>

        <?php if (!empty($image_map)) : ?>
            <div class="contact-page__map-main">
                <div class="contact-page__map">
                    <?php insertImage($image_map, 'map-desktop') ?>
                    <?php insertImage($image_map_mobile, 'map-mobile') ?>

                    <div class="pin" style="top: <?php echo $position_pin_in_map['top'] ?>%; left: <?php echo $position_pin_in_map['left'] ?>%;">
                        <?php insertImage('pin__ellipse-big.svg') ?>
                        <?php insertImage('pin__ellipse-small.svg') ?>
                        <div class="pin__icon"><?php insertImage('pin-map.svg') ?></div>
                        <div class="pin__light"></div>
                    </div>
                </div>
            </div>
        <?php endif ?>

    </section>
</main>

<?php get_footer(); ?>