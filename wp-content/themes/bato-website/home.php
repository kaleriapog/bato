<?php
// Template Name: Home page
// Template Post Type: post, page

$fields = get_fields();
$subtitles = $fields['subtitles'];
$link = $fields['link'];
$maintitle = $fields['big_title'];
$video = $fields['video'];
$hero_bg_mobile = $fields['image_bg_mobile'];

$about_title =  $fields['about_title'];
$about_description = $fields['about_description'];
$about_link = $fields['about_link'];

$about_background = $fields['about_background'];

$cards_title = $fields['cards_title'];
$cards_services = $fields['cards_services'];

$slider_items = $fields['slider_items'];

$offers_title = $fields['offers_title'];
$offers_cards = $fields['offers_cards'];

$numbers_title = $fields['numbers_title'];
$numbers_description = $fields['numbers_description'];
$numbers_cards = $fields['numbers_cards'];

$team_title = $fields['team_title'];
$team_items = $fields['team_items'];

$contact_title = $fields['contact_title'];
$contact_phrase = $fields['contact_phrase'];
$contact_image = $fields['contact_image'];

$accordion = $fields['accordion'];
$accordion_title = $accordion['description']['title'];
$accordion_text = $accordion['description']['text'];
$accordion_items = $accordion['items'];
$accordion_rating = $accordion['rating'];

get_header();
?>

<?php if (!empty($subtitles)) : ?>

    <script>
        const subTitles = '<?php echo json_encode($subtitles); ?>';
    </script>

<?php endif ?>

<div class="preloader-menu-mob">
</div>
<main id="primary" class="site-main">
    <div class="block-cube-small">
        <div class="fallback-stage"></div>
        <div class="container">
            <div class="stage">
                <a href="/contact" class="cube">
                    <span class="back"><span class="text-only">START A PROJECT</span></span>
                    <span class="top"><span class="text-only">START A PROJECT</span></span>
                    <span class="bottom"><span class="text-only">START A PROJECT</span></span>
                    <span class="left"><span class="text-only">START A PROJECT</span></span>
                    <span class="right"><span class="text-only">START A PROJECT</span></span>
                    <span class="front"><span class="text-only">START A PROJECT</span></span>
                </a>
            </div>
        </div>
    </div>
    <section class="section-banner">
        <div class="section-banner__inner main-size">
            <div class="section-banner__description">
                <div class="headline">
                    <div class="headline__inner">
                        <div class="headline-items">
                            <?php if (!empty($maintitle)) : ?>
                                <?php foreach ($maintitle as $item) : ?>

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
                <div class="section-banner__button">
                    <div class="button-default">

                        <?php if (!empty($link)) : ?>

                            <a class="button-default__link" target="<?php echo $link['target'] ? $link['target'] : '_self' ?>" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a>

                        <?php endif ?>


                    </div>
                </div>
            </div>
        </div>
        <div class="section-banner__bg">

            <?php if (!empty($video)) : ?>

                <video autoplay muted playsinline preload="true" loop id="video-bg">
                    <source src="<?php echo $video['url'] ?>" type="video/mp4">
                </video>

            <?php endif ?>

            <?php if (!empty($hero_bg_mobile)) : ?>

                <div class="section-banner__bg-mobile">

                    <?php insertImage($hero_bg_mobile) ?>

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
    <section class="section-about" id="section-about">
        <div class="section-about__inner main-size">
            <div class="section-about__description">

                <?php if (!empty($about_title)) : ?>

                    <h2 class="title_basic title_about"><?php echo $about_title ?></h2>

                <?php endif ?>

                <?php if (!empty($about_description)) : ?>

                    <div class="section-about__text">
                        <?php echo $about_description ?>
                    </div>

                <?php endif ?>

                <?php if (!empty($about_link)) : ?>

                    <div class="button-default">
                        <a class="button-default__link" target="<?php echo $about_link['target'] ? $about_link : '_self' ?>" href="<?php echo $about_link['url'] ?>"><?php echo $about_link['title'] ?></a>
                    </div>

                <?php endif ?>

            </div>
            <div class="circles-about">
                <div class="circle-about-big-wrapp">
                    <div id="circle-about-big" class="circle-about-big"></div>
                </div>
                <div class="circle-about-light-wrapp">
                    <div id="circle-about-light" class="circle-about-light"></div>
                </div>
            </div>
        </div>
    </section>

    <?php if (!empty($slider_items)) : ?>

        <section class="section-slider" id="section-slider">
            <div class="section-slider__inner">
                <div class="splide slider slider-home">
                    <div class="splide__track slider-inner">
                        <ul class="splide__list slider-items">

                            <?php foreach ($slider_items as $item) : ?>

                                <li class="splide__slide slider-item">
                                    <div class="slider-item-name">

                                        <?php echo $item["slide"] ?>

                                        <p class="slider-item-name-hover">

                                            <?php echo $item["slide"] ?>
                                        </p>
                                    </div>
                                </li>

                            <?php endforeach ?>

                        </ul>
                    </div>
                </div>
            </div>
        </section>

    <?php endif ?>

    <?php if (!empty($accordion)) { ?>

        <section class="section-accordion">
            <div class="main-size">
                <div class="section-accordion__wrapper">
                    <div class="section-accordion__text">

                        <?php if (!empty($accordion_title)) { ?>

                            <div class="title_basic title">
                                <?php echo $accordion_title ?>
                            </div>

                        <?php } ?>
                        <?php if (!empty($accordion_text)) { ?>

                            <div class="section-accordion__description">
                                <?php echo $accordion_text ?>
                            </div>

                        <?php } ?>
                        <?php if (!empty($accordion_rating)) { ?>

                            <a href="<?php echo $accordion_rating['link']['url'] ?>" class="section-accordion__rating">

                                <?php if (!empty($accordion_rating['logo'])) { ?>

                                    <div class="section-accordion__rating-image">
                                        <img src="<?php echo $accordion_rating['logo']['url'] ?>" alt="<?php echo $accordion_rating['logo']['name'] ?>" loading="lazy">
                                    </div>

                                <?php } ?>
                                <?php if (!empty($accordion_rating['rating_number'])) { ?>

                                    <div class="section-accordion__rating-inner">
                                        <span class="section-accordion__rating-number"><?php echo $accordion_rating['rating_number'] ?></span>
                                        <span class="section-accordion__rating-stars">
                                            <svg class="rating-stars" width="75" height="15" viewBox="0 0 75 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M67.5 0.809018L68.9461 5.25963L69.0022 5.43237H69.1839H73.8635L70.0776 8.183L69.9306 8.28976L69.9868 8.46251L71.4329 12.9131L67.6469 10.1625L67.5 10.0557L67.3531 10.1625L63.5671 12.9131L65.0132 8.46251L65.0694 8.28976L64.9224 8.183L61.1365 5.43237H65.8161H65.9978L66.0539 5.25963L67.5 0.809018Z" fill="white" fill-opacity="0.2" stroke="#666666" stroke-width="0.5" />
                                                <path d="M52.5 0.809018L53.9461 5.25963L54.0022 5.43237H54.1839H58.8635L55.0776 8.183L54.9306 8.28976L54.9868 8.46251L56.4329 12.9131L52.6469 10.1625L52.5 10.0557L52.3531 10.1625L48.5671 12.9131L50.0132 8.46251L50.0694 8.28976L49.9224 8.183L46.1365 5.43237H50.8161H50.9978L51.0539 5.25963L52.5 0.809018Z" fill="white" fill-opacity="0.2" stroke="#666666" stroke-width="0.5" />
                                                <mask id="mask0_2014_168" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="30" y="0" width="15" height="14">
                                                    <path d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_2014_168)">
                                                    <path d="M37.5 0.809018L38.9461 5.25963L39.0022 5.43237H39.1839H43.8635L40.0776 8.183L39.9306 8.28976L39.9868 8.46251L41.4329 12.9131L37.6469 10.1625L37.5 10.0557L37.3531 10.1625L33.5671 12.9131L35.0132 8.46251L35.0694 8.28976L34.9224 8.183L31.1365 5.43237H35.8161H35.9978L36.0539 5.25963L37.5 0.809018Z" fill="white" fill-opacity="0.2" stroke="#666666" stroke-width="0.5" />
                                                </g>
                                                <mask id="mask1_2014_168" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="15" y="0" width="15" height="14">
                                                    <path d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z" fill="white" />
                                                </mask>
                                                <g mask="url(#mask1_2014_168)">
                                                    <path d="M22.5 0.809018L23.9461 5.25963L24.0022 5.43237H24.1839H28.8635L25.0776 8.183L24.9306 8.28976L24.9868 8.46251L26.4329 12.9131L22.6469 10.1625L22.5 10.0557L22.3531 10.1625L18.5671 12.9131L20.0132 8.46251L20.0694 8.28976L19.9224 8.183L16.1365 5.43237H20.8161H20.9978L21.0539 5.25963L22.5 0.809018Z" fill="white" fill-opacity="0.2" stroke="#666666" stroke-width="0.5" />
                                                </g>
                                                <mask id="mask2_2014_168" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="15" height="14">
                                                    <path d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z" fill="white" />
                                                </mask>
                                                <g mask="url(#mask2_2014_168)">
                                                    <path d="M7.5 0.809018L8.94609 5.25963L9.00222 5.43237H9.18386H13.8635L10.0776 8.183L9.93064 8.28976L9.98677 8.46251L11.4329 12.9131L7.64695 10.1625L7.5 10.0557L7.35305 10.1625L3.56714 12.9131L5.01323 8.46251L5.06936 8.28976L4.92241 8.183L1.1365 5.43237H5.81614H5.99778L6.05391 5.25963L7.5 0.809018Z" fill="white" fill-opacity="0.2" stroke="#666666" stroke-width="0.5" />
                                                </g>
                                            </svg>
                                            <svg class="rating-stars-color" style="clip-path: inset(0 calc(100% - (100% * <?php echo $accordion_rating['rating_number'] ?>) / 5) 0 0)" width="75" height="15" viewBox="0 0 75 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z" fill="url(#paint0_linear_1919_254)" />
                                                <path d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z" fill="url(#paint1_linear_1919_254)" />
                                                <path d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z" fill="url(#paint2_linear_1919_254)" />
                                                <path d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z" fill="url(#paint3_linear_1919_254)" />
                                                <path d="M67.5 0.809018L68.9461 5.25963L69.0022 5.43237H69.1839H73.8635L70.0776 8.183L69.9306 8.28976L69.9868 8.46251L71.4329 12.9131L67.6469 10.1625L67.5 10.0557L67.3531 10.1625L63.5671 12.9131L65.0132 8.46251L65.0694 8.28976L64.9224 8.183L61.1365 5.43237H65.8161H65.9978L66.0539 5.25963L67.5 0.809018Z" fill="white" fill-opacity="0.2" stroke="#666666" stroke-width="0.5" />
                                                <mask id="mask0_1919_254" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="60" y="0" width="15" height="14">
                                                    <path d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_1919_254)">
                                                    <rect x="59" width="16" height="15" fill="url(#paint4_linear_1919_254)" />
                                                </g>
                                                <defs>
                                                    <linearGradient id="paint0_linear_1919_254" x1="2.6004" y1="1.82487" x2="11.9825" y2="13.7488" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#00FFFF" />
                                                        <stop offset="1" stop-color="#01C4E5" />
                                                    </linearGradient>
                                                    <linearGradient id="paint1_linear_1919_254" x1="17.6004" y1="1.82487" x2="26.9825" y2="13.7488" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#00FFFF" />
                                                        <stop offset="1" stop-color="#01C4E5" />
                                                    </linearGradient>
                                                    <linearGradient id="paint2_linear_1919_254" x1="32.6004" y1="1.82487" x2="41.9825" y2="13.7488" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#00FFFF" />
                                                        <stop offset="1" stop-color="#01C4E5" />
                                                    </linearGradient>
                                                    <linearGradient id="paint3_linear_1919_254" x1="47.6004" y1="1.82487" x2="56.9825" y2="13.7488" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#00FFFF" />
                                                        <stop offset="1" stop-color="#01C4E5" />
                                                    </linearGradient>
                                                    <linearGradient id="paint4_linear_1919_254" x1="61.7738" y1="1.82487" x2="70.9965" y2="14.3278" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#00FFFF" />
                                                        <stop offset="1" stop-color="#01C4E5" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </span>
                                    </div>

                                <?php } ?>

                            </a>

                        <?php } ?>

                    </div>

                    <?php if (!empty($accordion_items)) { ?>

                        <ul class="section-accordion__items accordion">

                            <?php foreach ($accordion_items as $key => $accordion_item) {
                                $text = $accordion_item['text'];
                                $title = $accordion_item['title'];
                                $link = $accordion_item['link'];
                            ?>

                                <li class="accordion__item accordion__item-<?php echo $key ?>">
                                    <div class="accordion__item-inner">
                                        <div class="accordion__item-content">
                                            <h3 class="accordion__item-title"><?php echo $title ?></h3>
                                            <div class="accordion__item-description">
                                                <div class="accordion__item-text"><?php echo $text ?></div>

                                                <?php if (!empty($link)) { ?>

                                                    <div class="button-default">
                                                        <a class="button-default__link" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a>
                                                    </div>

                                                <?php } ?>

                                            </div>
                                        </div>
                                        <div class="accordion__item-icon">
                                            <svg width="16" height="27" viewBox="0 0 16 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.29289 26.2071C7.68342 26.5976 8.31658 26.5976 8.70711 26.2071L15.0711 19.8431C15.4616 19.4526 15.4616 18.8195 15.0711 18.4289C14.6805 18.0384 14.0474 18.0384 13.6569 18.4289L8 24.0858L2.34315 18.4289C1.95262 18.0384 1.31946 18.0384 0.928932 18.4289C0.538408 18.8195 0.538408 19.4526 0.928932 19.8431L7.29289 26.2071ZM7 0.5V25.5H9V0.5H7Z" fill="white" />
                                            </svg>
                                        </div>
                                    </div>
                                </li>

                            <?php } ?>

                        </ul>

                    <?php } ?>

                </div>
            </div>
        </section>

    <?php } ?>

    <section class="section-cards" id="section-cards">
        <div class="section-cards__inner main-size">

            <?php if (!empty($cards_title)) : ?>

                <h1 class="title_basic"><?php echo $cards_title ?></h1>

            <?php endif ?>

            <?php if (!empty($cards_services)) : ?>

                <div class="cards-services">
                    <?php
                    foreach ($cards_services["сards_services"] as $key => $item) : ?>

                        <div id="card-services-<?php echo $key ?>" class="card-services card-services-<?php echo $key ?>">
                            <div class="card-services__inner">
                                <div class="card-services-wrapp">
                                    <div class="card-services-blur">
                                        <div class="card-description">

                                            <?php if (!empty($item['card_title'])) : ?>

                                                <h3 class="card-title"><?php echo $item['card_title'] ?></h3>

                                            <?php endif ?>

                                            <?php if (!empty($item['card_text'])) : ?>

                                                <div class="card-text"><?php echo $item['card_text'] ?></div>

                                            <?php endif ?>

                                        </div>
                                        <div class="card-icon">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach ?>
                </div>

            <?php endif ?>

        </div>
    </section>
    <section class="section-offers" id="section-offers">
        <div class="section-offers__inner main-size">

            <?php if (!empty($offers_title)) : ?>

                <h2 class="title_basic"><?php echo $offers_title ?></h2>

            <?php endif ?>

            <div class="section-offers__cards">
                <?php
                foreach ($offers_cards as $item) : ?>

                    <div class="section-offers__card">

                        <?php if (!empty($item['offers_card_title'])) : ?>

                            <h3 class="card-title"><?php echo $item['offers_card_title'] ?></h3>

                        <?php endif ?>

                        <?php if (!empty($item['offers_card_text'])) : ?>

                            <?php echo $item['offers_card_text'] ?>

                        <?php endif ?>

                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
    <section class="section-team" id="section-team">
        <div class="section-team__inner main-size">

            <?php if (!empty($team_title)) : ?>

                <h2 class="title_basic"><?php echo $team_title ?></h2>

            <?php endif ?>

            <?php if (!empty($team_items)) : ?>
                <div class="section-team__items">

                    <?php foreach ($team_items as $key => $item) : ?>

                        <div class="section-team__items-wrapp item-photo item-photo-<?php echo $key ?>">
                            <div class="container">
                                <div class="viewport">
                                    <div class="cube">
                                        <div class="cube-item front-cube">
                                            <div class="front-cube-inner">
                                                <div class="front-cube-content">

                                                    <?php if (!empty($item["team_name"])) : ?>

                                                        <span class="section-team__card-team-name"><?php echo $item["team_name"] ?></span>

                                                    <?php endif ?>

                                                    <?php if (!empty($item["team_name"])) : ?>

                                                        <span class="section-team__card-team-position"><?php echo $item["team_position"] ?></span>

                                                    <?php endif ?>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="cube-item bottom-cube">
                                            <div class="photo-cube-inner">
                                                <div class="photo-cube-img-wrapp">

                                                    <?php if (!empty($item['team_image'])) : ?>

                                                        <?php insertImage($item['team_image']) ?>

                                                    <?php endif ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach ?>

                </div>

            <?php endif ?>

        </div>
    </section>
    <section class="section-numbers" id="section-numbers">
        <div class="section-numbers__inner main-size">

            <?php if (!empty($numbers_title)) : ?>

                <h2 class="title_basic"><?php echo $numbers_title ?></h2>

            <?php endif ?>

            <?php if (!empty($numbers_description)) : ?>

                <p class="section-numbers__description"><?php echo $numbers_description ?></p>

            <?php endif ?>

            <?php if (!empty($numbers_cards)) : ?>

                <div class="section-numbers__cards">

                    <?php foreach ($numbers_cards as $key => $item) : ?>

                        <div class="section-numbers__card numbers-card-<?php echo $key ?>">

                            <?php if (!empty($item["numbers_card_number"])) : ?>

                                <p class="section-numbers__number"><?php echo $item["numbers_card_number"] ?></p>

                            <?php endif ?>

                            <?php if (!empty($item["numbers_card_title"])) : ?>

                                <div class="section-numbers__text-wrapp">
                                    <p class="section-numbers__text"><?php echo $item["numbers_card_title"] ?></p>
                                </div>

                            <?php endif ?>

                        </div>

                    <?php endforeach ?>

                </div>

            <?php endif ?>

        </div>
    </section>
    <section class="section-contact" id="section-contact">
        <div class="section-contact__inner main-size">
            <div class="section-contact__description">

                <?php if (!empty($contact_title)) : ?>

                    <h2 class="title_basic title"><?php echo $contact_title ?></h2>

                <?php endif ?>

                <?php if (!empty($contact_phrase)) : ?>

                    <div class="section-contact__phrase">

                        <?php echo $contact_phrase ?>

                    </div>

                <?php endif ?>


            </div>
            <div class="section-contact__image">

                <?php if (!empty($contact_image)) : ?>

                    <div class="section-contact__image-wrapp">

                        <?php insertImage($contact_image) ?>

                    </div>

                <?php endif ?>

                <div class="section-contact__light-wrapp">
                    <div class="section-contact__light" id="contact-light">

                        <?php insertImage('get-bg.svg') ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--	<div id="back-to-top" class="back-to-top">-->
    <!--		<span>up</span>-->
    <!--		<img src="--><?php //echo get_template_directory_uri(); 
                                ?><!--/images/arrow-to-top.svg" alt="to top">-->
    <!--	</div>-->
    <div class="preloader">
        <div class="preloader__wrapp">

            <?php insertImage('preloader.svg') ?>

        </div>
    </div>
</main>


<?php
get_footer();
?>