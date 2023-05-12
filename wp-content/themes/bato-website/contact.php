<?php
// Template Name: Contact page
// Template Post Type: post, page

$page_about = get_field('page_about', $post->ID);
$contact_title = get_field('title', $post->ID);
$contact_text = get_field('text', $post->ID);
$contact_contacts = get_field('contacts', $post->ID);
$form = get_field('form', $post->ID);
$form_shortcode = $form['shortcode'];
$form_title = $form['title_forms'];
$image_map = get_field('image_map', $post->ID);
$position_pin = get_field('position_pin_in_map', $post->ID);
$image_map_mobile = get_field('image_map_mobile', $post->ID);

get_header();
?>

<main id="primary" class="site-main">
    <section class="contact-page section">
        <div class="main-size">
            <div class="contact-page__wrapper">
                <div class="contact-page__info">

                    <?php if (!empty($contact_title)) { ?>

                        <div class="contact-page__title title title_basic"><?php echo $contact_title ?></div>

                    <?php } ?>
                    <?php if (!empty($contact_text)) { ?>

                        <div class="contact-page__text text"><?php echo $contact_text ?></div>

                    <?php } ?>
                    <?php if (!empty($contact_contacts)) { ?>

                        <div class="contact-page__columns">

                            <?php foreach ($contact_contacts as $item) {
                                $title = $item['title'];
                                $items_elem = $item['items'];
                            ?>

                                <div class="contact-page__col contact-item">
                                    <div class="contact-item__title"><?php echo $title ?></div>

                                    <?php if (!empty($items_elem)) { ?>

                                        <?php foreach ($items_elem as $item_elem) {
                                            $name = $item_elem['name'];
                                            $mode = $item_elem['mode'];
                                        ?>

                                            <?php if ($mode === 'Mail') { ?>

                                                <a href="mailto:<?php echo $name ?>" class="contact-item__item"><?php echo $name ?></a>

                                            <?php } ?>
                                            <?php if ($mode === 'Tel') { ?>

                                                <a href="tel:<?php echo preg_replace("/[^0-9]/", "", $name); ?>" class="contact-item__item"><?php echo $name ?></a>

                                            <?php } ?>
                                            <?php if ($mode === 'Address') { ?>

                                                <address class="contact-item__item"><?php echo $name ?></address>

                                            <?php } ?>
                                            <?php if (!($mode === 'Address') && !($mode === 'Tel') && !($mode === 'Mail')) { ?>

                                                <a href="<?php echo $name ?>" class="contact-item__item"><?php echo $name ?></a>

                                            <?php } ?>
                                        <?php } ?>
                                    <?php } ?>

                                </div>

                            <?php } ?>

                        </div>

                    <?php } ?>

                </div>

                <?php if (!empty($form)) { ?>

                    <div class="contact-page__form">

                        <?php if (!empty($form_title)) { ?>

                            <h3 class="contact-page__form-title title title_basic"><?php echo $form_title ?></h3>

                        <?php } ?>
                        <?php if (!empty($form_shortcode)) { ?>

                            <?php echo do_shortcode($form_shortcode) ?>

                        <?php } ?>

                    </div>

                <?php } ?>

            </div>
        </div>

        <?php if (!empty($image_map)) { ?>
            <div class="contact-page__map-main">
                <div class="contact-page__map">
                    <img class="map-desktop" src="<?php echo $image_map['url'] ?>" alt="<?php echo $image_map['title'] ?>">
                    <img class="map-mobile" src="<?php echo $image_map_mobile['url'] ?>" alt="<?php echo $image_map_mobile['title'] ?>">
                    <div class="pin" style="top: <?php echo $position_pin['top'] ?>%; left: <?php echo $position_pin['left'] ?>%;">
                        <svg class="pin__ellipse-big" width="250" height="250" viewBox="0 0 250 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_1939_363)">
                                <circle cx="125" cy="125" r="44.5" stroke="url(#paint0_linear_1939_363)" shape-rendering="geometricPrecision" />
                            </g>
                            <defs>
                                <filter id="filter0_d_1939_363" x="0" y="0" width="250" height="250" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset />
                                    <feGaussianBlur stdDeviation="40" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1939_363" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1939_363" result="shape" />
                                </filter>
                                <linearGradient id="paint0_linear_1939_363" x1="95.6024" y1="90.9492" x2="151.895" y2="162.493" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#00FFFF" />
                                    <stop offset="1" stop-color="#01C4E5" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <svg class="pin__ellipse-small" width="250" height="250" viewBox="0 0 250 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_1939_363)">
                                <circle cx="125" cy="125" r="44.5" stroke="url(#paint0_linear_1939_363)" shape-rendering="geometricPrecision" />
                            </g>
                            <defs>
                                <filter id="filter0_d_1939_363" x="0" y="0" width="250" height="250" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset />
                                    <feGaussianBlur stdDeviation="40" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1939_363" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1939_363" result="shape" />
                                </filter>
                                <linearGradient id="paint0_linear_1939_363" x1="95.6024" y1="90.9492" x2="151.895" y2="162.493" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#00FFFF" />
                                    <stop offset="1" stop-color="#01C4E5" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <div class="pin__icon">
                            <img loading="lazy" class="pin-bato" src="<?php echo get_template_directory_uri(); ?>/images/pin-map.svg" alt="pin-bato">
                        </div>
                        <div class="pin__light"></div>
                    </div>
                </div>
            </div>

        <?php } ?>

    </section>
</main>

<?php
get_footer();
?>