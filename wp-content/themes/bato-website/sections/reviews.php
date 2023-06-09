<?php
    $fields = get_field('reviews', 'options');

    if(!empty($fields)) {
        foreach ($fields as $field_name => $field) {
            ${"$field_name"} = $field;
        }
    }
?>

<?php if (!empty($fields) && !empty($list)) : ?>

<section class="section-about-reviews section">
    <div class="section-about-reviews__pin-section">
    
        <div class="main-size">
            <div class="section-about-reviews__wrapper">

                <?php insertTitle($title, 'title_basic title', 'h2') ?>
                <?php insertText($text, 'section-about-reviews__text') ?>
                
                <?php if (!empty($rating)) : ?>

                    <a class="section-about-reviews__rating" href="<?php echo $rating['url'] ?>" target="_blank" rel="nofollow">

                        <?php if (!empty($rating['logo'])) : ?>
                            <div class="section-about-reviews__rating-image">
                                <?php insertImage($rating['logo']) ?>
                            </div>
                        <?php endif ?>

                        <?php if (!empty($rating['rating_number'])) : ?>

                            <div class="section-about-reviews__rating-inner">
                                <span class="section-about-reviews__rating-number"><?php echo $rating['rating_number'] ?></span>
                                <span class="section-about-reviews__rating-stars">
                                    <?php insertImage('rating-stars.svg') ?>
                                    <svg class="rating-stars-color" style="clip-path: inset(0 calc(100% - (100% * <?php echo $rating['rating_number'] ?>) / 5) 0 0)" width="75" height="15" viewBox="0 0 75 15" fill="none" xmlns="http://www.w3.org/2000/svg">
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

                        <?php endif ?>
                    </a>
                <?php endif ?>

                <div class="reviews-items">
                    <ul class="section-about-reviews__items">

                        <?php foreach ($list as $key => $review) : ?>
                            <li class="section-about-reviews__item anim-item anim-item-<?php echo $key ?>">
                                <div class="reviews-item-bg"></div>
                                <div class="section-about-reviews__item-content">
                                    <span class="quotation-mark">“</span>
                                    <?php insertText($review['text'], 'section-about-reviews__item-text custom-scrollbar') ?>
                                    <?php insertText($review['author'], 'section-about-reviews__item-name') ?>
                                </div>
                            </li>
                        <?php endforeach ?>

                    </ul>
                </div>

                <div class="reviews-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">

                            <?php foreach ($list as $key => $review) : ?>
                                <div class="swiper-slide">
                                    <div class="section-about-reviews__item">
                                        <div class="reviews-item-bg"></div>
                                        <div class="section-about-reviews__item-content">
                                            <span class="quotation-mark">“</span>
                                            <?php insertText($review['text'], 'section-about-reviews__item-text custom-scrollbar') ?>
                                            <?php insertText($review['author'], 'section-about-reviews__item-name') ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>

                        </div>
                    </div>
                    <div class="reviews-slider__scrollbar slider-scrollbar"></div>
                </div>
            </div>
            <div class="reviews-items-light"></div>
        </div>
    </div>
</section>

<?php endif ?>