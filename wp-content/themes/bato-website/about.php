<?php
// Template Name: About page
// Template Post Type: post, page

$page_about = get_field('page_about', $post->ID);
$section_hero = $page_about['section_hero'];
$hero_title = $section_hero['title'];
$hero_text = $section_hero['text'];
$hero_file = $section_hero['lottiefile'];

$section_our_story = $page_about['section_our_story'];
$our_story_title = $section_our_story['title'];
$our_story_text = $section_our_story['text'];

$our_values = $page_about['section_our_values'];
$our_values_title = $our_values['title'];
$our_values_items = $our_values['items'];

$about_team = $page_about['section_about_team'];
$about_team_title = $about_team['title'];
$about_team_team = $about_team['team'];

$about_hq = $page_about['section_about_hq'];
$about_hq_text = $about_hq['text'];
$about_hq_image = $about_hq['image'];
$about_hq_image_color = $about_hq['image_color'];
$about_hq_image_dots = $about_hq['image_with_dots'];

$about_family = $page_about['section_about_family'];
$about_family_title = $about_family['title'];
$about_family_images = $about_family['images'];

$length = count($about_family_images);
$about_family_images1 = array();
$about_family_images2 = array();
$about_family_images3 = array();

for ($i = 0; $i < $length; $i++) {
    if ($i % 3 == 0) {
        array_push($about_family_images1, $about_family_images[$i]);
    } elseif ($i % 3 == 1) {
        array_push($about_family_images2, $about_family_images[$i]);
    } else {
        array_push($about_family_images3, $about_family_images[$i]);
    }
}

$about_follow = $page_about['section_about_follow'];
$about_follow_title = $about_follow['title'];
$about_follow_image = $about_follow['image'];
$about_follow_links = $about_follow['links'];

$about_ready = $page_about['section_about_ready'];
$about_ready_title = $about_ready['title'];
$about_ready_link = $about_ready['link'];

$about_reviews = $page_about['section_about_reviews'];
$about_reviews_title = $about_reviews['title'];
$about_reviews_text = $about_reviews['text'];
$about_reviews_reviews = $about_reviews['reviews'];
$about_reviews_rating = $about_reviews['rating'];

get_header();
?>

<div class="preloader-menu-mob">
</div>
<div class="about-decorative-page">
    <img src="<?php echo get_template_directory_uri() ?>/images/effect-about.png" alt="decorative image">
</div>
<main id="primary" class="site-main">

    <?php if (!empty($section_hero)) { ?>

        <section class="section-about-hero section">
            <div class="section-about-hero__media">
                <div id="lottie-people-inner" class="lottie-people-inner">
                    <div class="lottie-mask"></div>
                </div>
            </div>
            <div class="section-about-hero__wrapper">
                <div class="main-size">
                    <div class="section-about-hero__content">

                        <?php if (!empty($hero_title)) { ?>

                            <div class="title-large"><?php echo $hero_title ?></div>

                        <?php } ?>

                        <?php if (!empty($hero_text)) { ?>

                            <div class="section-about-hero__text"><?php echo $hero_text ?></div>

                        <?php } ?>

                    </div>
                </div>
            </div>
        </section>

    <?php } ?>

    <?php if (!empty($section_our_story)) { ?>

        <section class="section-about-our-story section">
            <div class="main-size">
                <div class="section-about-our-story__wrapper">
                    <div class="section-about-our-story__content">

                        <?php if (!empty($our_story_title)) { ?>

                            <div class="title title_basic"><?php echo $our_story_title ?></div>

                        <?php } ?>

                        <?php if (!empty($our_story_text)) { ?>

                            <div class="section-about-our-story__text"><?php echo $our_story_text ?></div>

                        <?php } ?>

                    </div>
                </div>
            </div>
        </section>

    <?php } ?>

    <?php if (!empty($our_values)) { ?>

        <section class="section-our-values section">
            <div class="main-size">
                <div class="section-our-values__wrapper">
                    <div class="section-our-values__content">
                        <div class="section-our-values-scene-trigger-start"></div>

                        <?php if (!empty($our_values_title)) { ?>

                            <div class="title_basic title"><?php echo $our_values_title ?></div>

                        <?php } ?>

                        <?php if (!empty($our_values_items)) { ?>

                            <div class="section-our-values__items">
                                <div class="section-our-values__items-mask"></div>
                                <ul class="section-our-values__items-list">

                                    <?php foreach ($our_values_items as $key => $our_values_item) {
                                        $title = $our_values_item['title'];
                                        $text = $our_values_item['text']

                                    ?>

                                        <li class="section-our-values__item section-our-values__item-<?php echo $key ?>">
                                            <div class="section-our-values__item-number section-our-values__item-number-<?php echo $key ?>">

                                                <?php if ($key <= 8) { ?>

                                                    <span class="item-number" style="-webkit-background-clip: text;">0<?php echo $key + 1 ?></span>

                                                <?php } ?>
                                                <?php if ($key > 8) { ?>

                                                    <span class="item-number" style="-webkit-background-clip: text;"><?php echo $key + 1 ?></span>

                                                <?php } ?>

                                            </div>
                                            <div class="section-our-values__item-content">
                                                <?php if (!empty($our_values_items)) { ?>

                                                    <h3 class="section-our-values__item-title"><?php echo strip_tags($title, '<br>, <span>, <strong>, <mark>, <i>, <em>, <b>') ?></h3>

                                                <?php } ?>

                                                <?php if (!empty($our_values_items)) { ?>

                                                    <div class="section-our-values__item-text"><?php echo $text ?></div>

                                                <?php } ?>
                                            </div>

                                        </li>

                                    <?php } ?>

                                </ul>
                            </div>
                            <div class="section-our-values-scene-trigger-end"></div>

                        <?php } ?>

                    </div>
                </div>
            </div>
        </section>

    <?php } ?>

    <?php if (!empty($about_team_team)) { ?>

        <section class="section-team section-about-team section" id="section-team">
            <div class="main-size">
                <div class="section-team__inner">
                    <div class="section-team__nav">
                        <h2 class="title_basic title"><?php echo $about_team_title ?></h2>
                        <div class="slider__buttons">
                            <button class="swiper-button-prev">
                                <span class="swiper-button__arrow-inner">
                                    <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.292892 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM21 7L1 7V9L21 9V7Z" fill="#666666" />
                                    </svg>
                                    <svg class="swiper-button__arrow-svg-hover" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.7071 8.70711C21.0976 8.31658 21.0976 7.68342 20.7071 7.29289L14.3431 0.928932C13.9526 0.538408 13.3195 0.538408 12.9289 0.928932C12.5384 1.31946 12.5384 1.95262 12.9289 2.34315L18.5858 8L12.9289 13.6569C12.5384 14.0474 12.5384 14.6805 12.9289 15.0711C13.3195 15.4616 13.9526 15.4616 14.3431 15.0711L20.7071 8.70711ZM20 7L0 7V9L20 9V7Z" fill="url(#paint0_linear_1663_1877)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_1663_1877" x1="16.5328" y1="7.87834" x2="16.4822" y2="6.59326" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#00FFFF" />
                                                <stop offset="1" stop-color="#01C4E5" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </span>
                            </button>
                            <button class="swiper-button-next">
                                <span class="swiper-button__arrow-inner">
                                    <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.292892 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM21 7L1 7V9L21 9V7Z" fill="#666666" />
                                    </svg>
                                    <svg class="swiper-button__arrow-svg-hover" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.7071 8.70711C21.0976 8.31658 21.0976 7.68342 20.7071 7.29289L14.3431 0.928932C13.9526 0.538408 13.3195 0.538408 12.9289 0.928932C12.5384 1.31946 12.5384 1.95262 12.9289 2.34315L18.5858 8L12.9289 13.6569C12.5384 14.0474 12.5384 14.6805 12.9289 15.0711C13.3195 15.4616 13.9526 15.4616 14.3431 15.0711L20.7071 8.70711ZM20 7L0 7V9L20 9V7Z" fill="url(#paint0_linear_1663_18772)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_1663_18772" x1="16.5328" y1="7.87834" x2="16.4822" y2="6.59326" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#00FFFF" />
                                                <stop offset="1" stop-color="#01C4E5" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="swiper swiper-about-team">

                        <div class="swiper-wrapper section-team__items">

                            <?php foreach ($about_team_team as $key => $team_item) {
                                $name = $team_item['name'];
                                $position = $team_item['position'];
                                $text = $team_item['text'];
                                $image = $team_item['image'];

                            ?>
                                <div class="swiper-slide">
                                <div class=" section-team__items-wrapp item-photo item-photo-<?php echo $key ?>">
                                    <div class="container">
                                        <div class="viewport">
                                            <div class="cube">
                                                <div class="cube-item front-cube">
                                                    <div class="front-cube-inner">
                                                        <div class="front-cube-content">
                                                            <div class="section-team__card-team-description">
                                                                <span class="section-team__card-team-name"><?php echo $name ?></span>
                                                                <span class="section-team__card-team-position"><?php echo $position ?></span>
                                                                <span class="section-team__card-team-text"><?php echo $text ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cube-item back-cube"></div>
                                                <div class="cube-item top-cube">
                                                    <div class="photo-cube-inner">
                                                        <div class="photo-cube-img-wrapp">
                                                            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['name'] ?>" loading="lazy">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cube-item bottom-cube">
                                                    <div class="photo-cube-inner">
                                                        <div class="photo-cube-img-wrapp">
                                                            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['name'] ?>" loading="lazy">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cube-item left-cube">
                                                    <div class="photo-cube-inner">
                                                        <div class="photo-cube-img-wrapp">
                                                            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['name'] ?>" loading="lazy">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cube-item right-cube">
                                                    <div class="photo-cube-inner">
                                                        <div class="photo-cube-img-wrapp">
                                                            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['name'] ?>" loading="lazy">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php } ?>

    <?php if (!empty($about_hq_text)) { ?>

        <section class="section-about-hq section">
            <div class="main-size">
                <div class="section-about-hq__wrapper">
                    <div class="section-about-hq__content">

                        <?php if (!empty($about_hq_text)) { ?>

                            <div class="section-about-hq__title">

                                <?php echo $about_hq_text ?>

                            </div>

                        <?php } ?>

                    </div>

                    <?php if (!empty($about_hq_image)) { ?>
                        <div class="section-about-hq__interactive">

                            <div class="section-about-hq__interactive-height">

                                <div class="section-about-hq__interactive-wrapper">

                                <?php if (!empty($about_hq_image)) { ?>

                                    <img src="<?php echo $about_hq_image['url'] ?>" alt="<?php echo $about_hq_image['title'] ?>">

                                <?php } ?>

                                <?php if (!empty($about_hq_image_color)) { ?>

                                    <img class="image-globe-active" src="<?php echo $about_hq_image_color['url'] ?>" alt="<?php echo $about_hq_image_color['title'] ?>">

                                <?php } ?>

                                <?php if (!empty($about_hq_image_dots)) { ?>

                                    <img class="image-globe-active-dots" src="<?php echo $about_hq_image_dots['url'] ?>" alt="<?php echo $about_hq_image_dots['title'] ?>">

                                <?php } ?>

                                <div class="pin pin-fr">
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
                                <div class="pin pin-kh">
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

                        </div>

                    <?php } ?>

                </div>
            </div>
        </section>

    <?php } ?>

    <?php if (!empty($about_family_images) || !empty($about_family_title)) { ?>

        <section class="section-about-family section">
            <div class="main-size">
                <div class="section-about-family__wrapper">
                    <div class="section-about-family__content">

                        <?php if (!empty($about_family_title)) { ?>

                            <div class="section-about-family__title title title_basic"><?php echo $about_family_title ?></div>

                        <?php } ?>

                        <?php if (!empty($about_family_images)) { ?>

                            <ul class="section-about-family__images family-images-desktop">
                                <li class="section-about-family__images-column">
                                    <ul class="section-about-family__images-column-inner">

                                        <?php foreach ($about_family_images2 as $key => $image) {
                                            $title = $image['image']['title'];
                                            $url = $image['image']['url']; ?>

                                            <li class="section-about-family__image image-<?php echo $key ?>">
                                                <img loading="lazy" src="<?php echo $url ?>" alt="<?php echo $title ?>">
                                                <div class="section-about-family__image-bg"></div>
                                            </li>

                                        <?php } ?>

                                    </ul>
                                </li>
                                <li class="section-about-family__images-column">
                                    <ul class="section-about-family__images-column-inner">

                                        <?php foreach ($about_family_images1 as $key => $image) {
                                            $title = $image['image']['title'];
                                            $url = $image['image']['url'];
                                        ?>

                                            <li class="section-about-family__image image-<?php echo $key ?>">
                                                <img loading="lazy" src="<?php echo $url ?>" alt="<?php echo $title ?>">
                                                <div class="section-about-family__image-bg"></div>
                                            </li>

                                        <?php } ?>
                                    </ul>
                                </li>
                                <li class="section-about-family__images-column">
                                    <ul class="section-about-family__images-column-inner">

                                        <?php foreach ($about_family_images3 as $key => $image) {
                                            $title = $image['image']['title'];
                                            $url = $image['image']['url'];
                                        ?>

                                            <li class="section-about-family__image image-<?php echo $key ?>">
                                                <img loading="lazy" src="<?php echo $url ?>" alt="<?php echo $title ?>">
                                                <div class="section-about-family__image-bg"></div>
                                            </li>

                                        <?php } ?>
                                    </ul>
                                </li>

                            </ul>
                            <ul class="section-about-family__images family-images-mobile">

                                <?php foreach ($about_family_images as $key => $image) {
                                    $title = $image['image']['title'];
                                    $url = $image['image']['url']; ?>

                                    <li class="section-about-family__image image-<?php echo $key ?>">
                                        <img loading="lazy" src="<?php echo $url ?>" alt="<?php echo $title ?>">
                                        <div class="section-about-family__image-bg"></div>
                                    </li>

                                <?php } ?>

                            </ul>

                        <?php } ?>

                    </div>
                </div>
            </div>
        </section>

    <?php } ?>

    <?php if (!empty($about_reviews)) { ?>

        <section class="section-about-reviews section">
            <div class="main-size">
                <div class="section-about-reviews__wrapper">

                    <?php if (!empty($about_reviews_title)) { ?>

                        <div class="title title_basic"><?php echo $about_reviews_title ?></div>

                    <?php } ?>
                    <?php if (!empty($about_reviews_text)) { ?>

                        <div class="section-about-reviews__text"><?php echo $about_reviews_text ?></div>

                    <?php } ?>
                    <?php if (!empty($about_reviews_rating)) { ?>

                        <a href="<?php echo $about_reviews_rating['link']['url'] ?>" class="section-about-reviews__rating">

                            <?php if (!empty($about_reviews_rating['logo'])) { ?>

                                <div class="section-about-reviews__rating-image">
                                    <img src="<?php echo $about_reviews_rating['logo']['url'] ?>" alt="<?php echo $about_reviews_rating['logo']['name'] ?>" loading="lazy">
                                </div>

                            <?php } ?>
                            <?php if (!empty($about_reviews_rating['rating_number'])) { ?>

                                <div class="section-about-reviews__rating-inner">
                                    <span class="section-about-reviews__rating-number"><?php echo $about_reviews_rating['rating_number'] ?></span>
                                    <span class="section-about-reviews__rating-stars">
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
                                        <svg class="rating-stars-color" style="clip-path: inset(0 calc(100% - (100% * <?php echo $about_reviews_rating['rating_number'] ?>) / 5) 0 0)" width="75" height="15" viewBox="0 0 75 15" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    <?php if (!empty($about_reviews_reviews)) {  ?>

                        <div class="reviews-items">
                            <ul class="section-about-reviews__items custom-scrollbar">

                                <?php foreach ($about_reviews_reviews as $key => $review) {
                                    $text = $review['review_text'];
                                    $name = $review['review_name'];
                                ?>

                                    <li class="section-about-reviews__item anim-item anim-item-<?php echo $key ?>">
                                        <div class="reviews-item-bg"></div>
                                        <div class="section-about-reviews__item-content">
                                            <span class="quotation-mark go-opacity">“</span>
                                            <div class="section-about-reviews__item-text custom-scrollbar go-opacity"><?php echo $text ?></div>
                                            <div class="section-about-reviews__item-name go-opacity"><?php echo $name ?></div>
                                        </div>
                                    </li>

                                <?php } ?>

                            </ul>
                            <div class="reviews-items-light"></div>
                        </div>

                    <?php } ?>

                </div>
            </div>
        </section>

    <?php } ?>

    <?php if (!empty($about_follow)) { ?>

        <section class="section-about-follow section">
            <div class="main-size">
                <div class="section-about-follow__wrapper">

                    <?php if (!empty($about_follow_image)) { ?>

                        <div class="section-about-follow__image">
                            <img src="<?php echo $about_follow_image['url'] ?>" alt="<?php echo $about_follow_image['title'] ?>">
                        </div>

                    <?php } ?>

                    <?php if (!empty($about_follow_title) || !empty($about_follow_links)) { ?>

                        <div class="section-about-follow__content">

                            <?php if (!empty($about_follow_title)) { ?>

                                <h2 class="title title_basic"><?php echo strip_tags($about_follow_title, '<br>, <span>, <strong>, <mark>, <i>, <em>, <b>') ?></h2>

                            <?php } ?>
                            <?php if (!empty($about_follow_links)) { ?>

                                <ul class="section-about-follow__links">

                                    <?php foreach ($about_follow_links as $key => $link) {
                                        $name = $link['link']['title'];
                                        $url = $link['link']['url'];

                                    ?>

                                        <li class="section-about-follow__link"><a href="<?php echo $url ?>"><?php echo $name ?></a></li>

                                    <?php }  ?>

                                </ul>

                            <?php } ?>

                        </div>

                    <?php } ?>

                </div>
            </div>
        </section>

    <?php } ?>

    <?php if (!empty($about_ready)) { ?>

        <section class="section-about-ready section">
            <div class="main-size">
                <div class="section-about-ready__wrapper">

                    <?php if (!empty($about_ready_title)) { ?>

                        <div class="title title_basic">

                            <?php echo $about_ready_title ?>

                        </div>

                    <?php } ?>

                    <?php if (!empty($about_ready_link)) : ?>

                        <a class="button-default button-big-color" target="<?php echo $about_ready_link['target'] ? $about_ready_link['target'] : '_self' ?>" href="<?php echo $about_ready_link['url'] ?>">
                            <span class="button-default__link"><?php echo $about_ready_link['title'] ?></span>
                        </a>

                    <?php endif ?>

                </div>
            </div>
        </section>

    <?php } ?>
    <div class="preloader">
        <div class="preloader__wrapp">

            <?php insertImage('preloader.svg') ?>

        </div>
    </div>
</main>

<?php
get_footer();
?>
