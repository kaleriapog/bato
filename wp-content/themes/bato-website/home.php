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
        <div class="block-cube-small" >
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

                    <video autoplay muted playsinline loop id="video-bg">
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

        <?php if(!empty($accordion)) { ?>

            <section class="section-accordion">
                <div class="main-size">
                    <div class="section-accordion__wrapper">
                        <div class="section-accordion__text">

                            <?php if(!empty($accordion_title)) { ?>

                                <div class="title_basic title">
                                    <?php echo $accordion_title ?>
                                </div>

                            <?php } ?>
                            <?php if(!empty($accordion_text)) { ?>

                                <div class="section-accordion__description">
                                    <?php echo $accordion_text ?>
                                </div>

                            <?php } ?>
                            <?php if(!empty($accordion_rating)) { ?>

                                <a href="<?php echo $accordion_rating['link']['url'] ?>" class="section-accordion__rating">

                                    <?php if(!empty($accordion_rating['logo'])) { ?>

                                        <div class="section-accordion__rating-image">
                                            <img src="<?php echo $accordion_rating['logo']['url'] ?>" alt="<?php echo $accordion_rating['logo']['name'] ?>" loading="lazy">
                                        </div>

                                    <?php } ?>
                                    <?php if(!empty($accordion_rating['rating_number'])) { ?>

                                        <div class="section-accordion__rating-inner">
                                            <span class="section-accordion__rating-number"><?php echo $accordion_rating['rating_number'] ?></span>
                                            <span class="section-accordion__rating-stars">
                                                <svg class="rating-stars" width="75" height="15" viewBox="0 0 75 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M67.5 0.809018L68.9461 5.25963L69.0022 5.43237H69.1839H73.8635L70.0776 8.183L69.9306 8.28976L69.9868 8.46251L71.4329 12.9131L67.6469 10.1625L67.5 10.0557L67.3531 10.1625L63.5671 12.9131L65.0132 8.46251L65.0694 8.28976L64.9224 8.183L61.1365 5.43237H65.8161H65.9978L66.0539 5.25963L67.5 0.809018Z" fill="white" fill-opacity="0.2" stroke="#666666" stroke-width="0.5"/>
                                                    <path d="M52.5 0.809018L53.9461 5.25963L54.0022 5.43237H54.1839H58.8635L55.0776 8.183L54.9306 8.28976L54.9868 8.46251L56.4329 12.9131L52.6469 10.1625L52.5 10.0557L52.3531 10.1625L48.5671 12.9131L50.0132 8.46251L50.0694 8.28976L49.9224 8.183L46.1365 5.43237H50.8161H50.9978L51.0539 5.25963L52.5 0.809018Z" fill="white" fill-opacity="0.2" stroke="#666666" stroke-width="0.5"/>
                                                    <mask id="mask0_2014_168" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="30" y="0" width="15" height="14">
                                                    <path d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z" fill="white"/>
                                                    </mask>
                                                    <g mask="url(#mask0_2014_168)">
                                                    <path d="M37.5 0.809018L38.9461 5.25963L39.0022 5.43237H39.1839H43.8635L40.0776 8.183L39.9306 8.28976L39.9868 8.46251L41.4329 12.9131L37.6469 10.1625L37.5 10.0557L37.3531 10.1625L33.5671 12.9131L35.0132 8.46251L35.0694 8.28976L34.9224 8.183L31.1365 5.43237H35.8161H35.9978L36.0539 5.25963L37.5 0.809018Z" fill="white" fill-opacity="0.2" stroke="#666666" stroke-width="0.5"/>
                                                    </g>
                                                    <mask id="mask1_2014_168" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="15" y="0" width="15" height="14">
                                                    <path d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z" fill="white"/>
                                                    </mask>
                                                    <g mask="url(#mask1_2014_168)">
                                                    <path d="M22.5 0.809018L23.9461 5.25963L24.0022 5.43237H24.1839H28.8635L25.0776 8.183L24.9306 8.28976L24.9868 8.46251L26.4329 12.9131L22.6469 10.1625L22.5 10.0557L22.3531 10.1625L18.5671 12.9131L20.0132 8.46251L20.0694 8.28976L19.9224 8.183L16.1365 5.43237H20.8161H20.9978L21.0539 5.25963L22.5 0.809018Z" fill="white" fill-opacity="0.2" stroke="#666666" stroke-width="0.5"/>
                                                    </g>
                                                    <mask id="mask2_2014_168" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="15" height="14">
                                                    <path d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z" fill="white"/>
                                                    </mask>
                                                    <g mask="url(#mask2_2014_168)">
                                                    <path d="M7.5 0.809018L8.94609 5.25963L9.00222 5.43237H9.18386H13.8635L10.0776 8.183L9.93064 8.28976L9.98677 8.46251L11.4329 12.9131L7.64695 10.1625L7.5 10.0557L7.35305 10.1625L3.56714 12.9131L5.01323 8.46251L5.06936 8.28976L4.92241 8.183L1.1365 5.43237H5.81614H5.99778L6.05391 5.25963L7.5 0.809018Z" fill="white" fill-opacity="0.2" stroke="#666666" stroke-width="0.5"/>
                                                    </g>
                                                </svg>
                                                <svg class="rating-stars-color" style="clip-path: inset(0 calc(100% - (100% * <?php echo $accordion_rating['rating_number'] ?>) / 5) 0 0)" width="75" height="15" viewBox="0 0 75 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z" fill="url(#paint0_linear_1919_254)"/>
                                                    <path d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z" fill="url(#paint1_linear_1919_254)"/>
                                                    <path d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z" fill="url(#paint2_linear_1919_254)"/>
                                                    <path d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z" fill="url(#paint3_linear_1919_254)"/>
                                                    <path d="M67.5 0.809018L68.9461 5.25963L69.0022 5.43237H69.1839H73.8635L70.0776 8.183L69.9306 8.28976L69.9868 8.46251L71.4329 12.9131L67.6469 10.1625L67.5 10.0557L67.3531 10.1625L63.5671 12.9131L65.0132 8.46251L65.0694 8.28976L64.9224 8.183L61.1365 5.43237H65.8161H65.9978L66.0539 5.25963L67.5 0.809018Z" fill="white" fill-opacity="0.2" stroke="#666666" stroke-width="0.5"/>
                                                    <mask id="mask0_1919_254" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="60" y="0" width="15" height="14">
                                                    <path d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z" fill="white"/>
                                                    </mask>
                                                    <g mask="url(#mask0_1919_254)">
                                                    <rect x="59" width="16" height="15" fill="url(#paint4_linear_1919_254)"/>
                                                    </g>
                                                    <defs>
                                                    <linearGradient id="paint0_linear_1919_254" x1="2.6004" y1="1.82487" x2="11.9825" y2="13.7488" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#00FFFF"/>
                                                    <stop offset="1" stop-color="#01C4E5"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint1_linear_1919_254" x1="17.6004" y1="1.82487" x2="26.9825" y2="13.7488" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#00FFFF"/>
                                                    <stop offset="1" stop-color="#01C4E5"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint2_linear_1919_254" x1="32.6004" y1="1.82487" x2="41.9825" y2="13.7488" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#00FFFF"/>
                                                    <stop offset="1" stop-color="#01C4E5"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint3_linear_1919_254" x1="47.6004" y1="1.82487" x2="56.9825" y2="13.7488" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#00FFFF"/>
                                                    <stop offset="1" stop-color="#01C4E5"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint4_linear_1919_254" x1="61.7738" y1="1.82487" x2="70.9965" y2="14.3278" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#00FFFF"/>
                                                    <stop offset="1" stop-color="#01C4E5"/>
                                                    </linearGradient>
                                                    </defs>
                                                </svg>
                                            </span>
                                        </div>

                                    <?php } ?>

                                </a>

                            <?php } ?>

                        </div>

                        <?php if(!empty($accordion_items)) { ?>

                            <ul class="section-accordion__items accordion">

                                <?php foreach ($accordion_items as $key=>$accordion_item) {
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

                                                    <?php if(!empty($link)) { ?>

                                                        <div class="button-default">
                                                            <a class="button-default__link" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a>
                                                        </div>

                                                    <?php } ?>

                                                </div>
                                            </div>
                                            <div class="accordion__item-icon">
                                                <svg width="16" height="27" viewBox="0 0 16 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.29289 26.2071C7.68342 26.5976 8.31658 26.5976 8.70711 26.2071L15.0711 19.8431C15.4616 19.4526 15.4616 18.8195 15.0711 18.4289C14.6805 18.0384 14.0474 18.0384 13.6569 18.4289L8 24.0858L2.34315 18.4289C1.95262 18.0384 1.31946 18.0384 0.928932 18.4289C0.538408 18.8195 0.538408 19.4526 0.928932 19.8431L7.29289 26.2071ZM7 0.5V25.5H9V0.5H7Z" fill="white"/>
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

                        <h2 class="title_basic"><?php echo $contact_title ?></h2>

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

<?php if (!isset($_COOKIE['cookies-accepted'])) { ?>

    <div class="block-cookies">
        <div class="block-cookies__fake-block"></div>
        <div class="main-size">
            <div class="block-cookies__inner">
                <div class="block-cookies__icon">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="25" height="25" fill="url(#pattern0)"/>
                        <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_2441_2994" transform="scale(0.00195312)"/>
                            </pattern>
                            <image id="image0_2441_2994" width="512" height="512" xlink:href="data:image/png;base64,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"/>
                        </defs>
                    </svg>
                </div>
                <div class="block-cookies__text">This website uses cookies to ensure you get the best experience on our website. <a class="block-cookies__link" target="_blank" href="./privacy">Cookies Policy</a></div>
                <div class="block-cookies__button">AGREE</div>
            </div>
        </div>
    </div>

<?php } ?>

<?php
get_footer();
?>