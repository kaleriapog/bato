<?php
// Template Name: Projects page

$projects_hero = get_field('section_projects_hero', $post->ID);
$projects_list = get_field('section_projects_list', $post->ID);
$projects_reviews = get_field('section_projects_reviews', $post->ID);
$projects_ready = get_field('section_projects_ready', $post->ID);

get_header();

?>
<div class="preloader-menu-mob">
</div>
<main id="primary" class="site-main">

    <?php if (!empty($projects_hero)) : ?>

        <section class="section-projects-hero section">
            <div class="main-size">
                <div class="section-projects-hero__wrapper">
                    <div class="section-projects-hero__content">

                        <?php if (!empty($projects_hero['title'])) : ?>

                            <h1 class="title-large"><?php echo $projects_hero['title'] ?></h1>

                        <?php endif ?>

                        <?php if (!empty($projects_hero['text'])) : ?>

                            <div class="section-projects-hero__text"><?php echo $projects_hero['text'] ?></div>

                        <?php endif ?>

                    </div>
                </div>
            </div>
        </section>

    <?php endif ?>

    <?php if (!empty($projects_list)) : ?>

        <section class="section-projects section">
            <div class="main-size">
                <div class="section-projects__list">

                    <?php foreach ($projects_list['projects_list'] as $item) : ?>

                        <a class="section-projects__item" href="<?php echo $item['link']['url'] ?>" target="<?php echo $item['link']['target'] ?  $item['link']['target'] : '_self' ?>">

                            <?php if (!empty($item['image'])) : ?>

                                <div class="section-projects__item-image-wrap">

                                    <div class="section-projects__item-image-inner">

                                        <div class="section-projects__item-image"> <?php insertImage($item['image']) ?></div>

                                        <?php if (!empty($item['link'])) : ?>

                                            <div class="section-projects__item-overlay">

                                                <div class="button-default button-big-color">
                                                    <span class="section-projects__item-link button-default__link button-big-color__link"><?php echo $item['link']['title'] ?></span>
                                                </div>

                                            </div>

                                        <?php endif ?>

                                    </div>

                                </div>

                            <?php endif ?>

                            <div class="section-projects__item-content">

                                <?php if (!empty($item['date'])) : ?>

                                    <time datetime="<?php echo $item['date'] ?>" class="section-projects__item-date"><?php echo $item['date'] ?></time>

                                <?php endif ?>

                                <?php if (!empty($item['title'])) : ?>

                                    <h2 class="section-projects__item-title"><?php echo $item['title'] ?></h2>

                                <?php endif ?>

                                <?php if (!empty($item['subtitle'])) : ?>

                                    <div class="section-projects__item-subtitle"><?php echo $item['subtitle'] ?></div>

                                <?php endif ?>

                                <?php if (!empty($item['text'])) : ?>

                                    <div class="section-projects__item-text"><?php echo $item['text'] ?></div>

                                <?php endif ?>

                            </div>

                            <?php if (!empty($item['technologies'])) : ?>

                                <div class="section-projects__item-technologies">

                                    <?php foreach ($item['technologies'] as $el) : ?>


                                        <?php if (!empty($el['title'])) : ?>

                                            <div class="section-projects__item-technologies-el"><?php echo $el['title'] ?></div>

                                        <?php endif ?>

                                    <?php endforeach ?>

                                </div>

                            <?php endif ?>

                        </a>



                    <?php endforeach ?>

                </div>
            </div>
        </section>

    <?php endif ?>

    <?php if (!empty($projects_reviews)) : ?>

        <section class="section-projects-reviews section">
            <div class="main-size">
                <div class="section-projects-reviews__wrapper">

                    <?php if (!empty($projects_reviews['title'])) : ?>

                        <h2 class="section-projects-reviews__title title title_basic"><?php echo $projects_reviews['title'] ?></h2>

                    <?php endif ?>

                    <?php if (!empty($projects_reviews['text'])) : ?>

                        <div class="section-projects-reviews__text"><?php echo $projects_reviews['text'] ?></div>

                    <?php endif ?>

                    <?php if (!empty($projects_reviews['link'])) : ?>

                        <a href="<?php echo $projects_reviews['link']['url'] ?>" target="<?php echo $projects_reviews['link']['target'] ? $projects_reviews['link']['target'] : '_self' ?>" class="section-projects-reviews__rating">

                            <?php if (!empty($projects_reviews['logo'])) : ?>

                                <div class="section-projects-reviews__rating-image">

                                    <?php insertImage($projects_reviews['logo']) ?>

                                </div>

                            <?php endif ?>

                            <?php if (!empty($projects_reviews['rating'])) : ?>

                                <div class="section-projects-reviews__rating-inner">

                                    <span class="section-about-reviews__rating-number"><?php echo $projects_reviews['rating'] ?></span>
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
                                        <svg class="rating-stars-color" style="clip-path: inset(0 calc(100% - (100% * <?php echo $projects_reviews['rating'] ?>) / 5) 0 0)" width="75" height="15" viewBox="0 0 75 15" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                    <stop stop-color="#00FFFF" offset='0' />
                                                    <stop offset="1" stop-color="#01C4E5" />
                                                </linearGradient>
                                                <linearGradient id="paint1_linear_1919_254" x1="17.6004" y1="1.82487" x2="26.9825" y2="13.7488" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#00FFFF" offset='0' />
                                                    <stop offset="1" stop-color="#01C4E5" />
                                                </linearGradient>
                                                <linearGradient id="paint2_linear_1919_254" x1="32.6004" y1="1.82487" x2="41.9825" y2="13.7488" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#00FFFF" offset='0' />
                                                    <stop offset="1" stop-color="#01C4E5" />
                                                </linearGradient>
                                                <linearGradient id="paint3_linear_1919_254" x1="47.6004" y1="1.82487" x2="56.9825" y2="13.7488" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#00FFFF" offset='0' />
                                                    <stop offset="1" stop-color="#01C4E5" />
                                                </linearGradient>
                                                <linearGradient id="paint4_linear_1919_254" x1="61.7738" y1="1.82487" x2="70.9965" y2="14.3278" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#00FFFF" offset='0' />
                                                    <stop offset="1" stop-color="#01C4E5" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </span>

                                </div>

                            <?php endif ?>

                        </a>

                    <?php endif ?>

                    <?php if (!empty($projects_reviews['items'])) : ?>

                        <div class="reviews-items">

                            <ul class="section-projects-reviews__items custom-scrollbar">

                                <?php foreach ($projects_reviews['items'] as $key => $item) : ?>

                                    <li class="section-projects-reviews__item anim-item anim-item-<?php echo $key ?> section-projects-reviews__item-<?php echo $key ?>">
                                        <div class="reviews-item-bg"></div>
                                        <div class="section-projects-reviews__item-content">
                                            <span class="quotation-mark go-opacity">“</span>

                                            <?php if (!empty($item['text'])) : ?>

                                                <div class="section-projects-reviews__item-text custom-scrollbar go-opacity"><?php echo $item['text'] ?></div>

                                            <?php endif ?>

                                            <?php if (!empty($item['title'])) : ?>

                                                <div class="section-projects-reviews__item-name go-opacity"><?php echo $item['title'] ?></div>

                                            <?php endif ?>

                                        </div>
                                    </li>

                                <?php endforeach ?>

                            </ul>
                            <div class="reviews-items-light"></div>

                        </div>

                    <?php endif ?>

                </div>
            </div>
        </section>

    <?php endif ?>

    <?php if (!empty($projects_ready)) : ?>

        <section class="section-projects-ready section">
            <div class="main-size">
                <div class="section-projects-ready__wrapper">

                    <?php if (!empty($projects_ready['title'])) : ?>

                        <h2 class="section-projects-ready__title title title_basic"><?php echo $projects_ready['title'] ?></h2>

                    <?php endif ?>

                    <?php if (!empty($projects_ready['link'])) : ?>

                        <div class="button-default button-big-color">
                            <a class="button-default__link button-big-color__link" target="_blank" href="<?php echo $projects_ready['link']['url'] ?>"><?php echo $projects_ready['link']['title'] ?></a>
                        </div>

                    <?php endif ?>

                </div>
            </div>
        </section>

    <?php endif ?>

</main>

<?php


get_footer();
