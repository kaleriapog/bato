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
                    <div class="section-about-our-story__bg">
                        <img src="<?php echo get_template_directory_uri() ?>/images/effect-story.png" alt="decorative image">
                    </div>
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

                            <div class="title_basic title our-values-fake-mask-parent"><?php echo $our_values_title ?>
                                <div class="our-values-fake-mask"></div>
                            </div>

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
                    </div>
                    <div class="swiper-about-team">

                        <div class="section-team__items">

                            <?php foreach ($about_team_team as $key => $team_item) {
                                $name = $team_item['name'];
                                $position = $team_item['position'];
                                $text = $team_item['text'];
                                $image = $team_item['image'];

                            ?>
                                <div class="">
                                <div class="section-team__items-wrapp item-photo item-photo-<?php echo $key ?>">
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

    <?php 
        get_template_part('sections/about-reviews', NULL, 
            [
                'about_reviews' => $about_reviews,
                'about_reviews_title' => $about_reviews_title,
                'about_reviews_text' => $about_reviews_text,
                'about_reviews_reviews' => $about_reviews_reviews,
                'about_reviews_rating' => $about_reviews_rating,
            ]
        );
    ?>

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
</main>

<?php
get_footer();
?>
