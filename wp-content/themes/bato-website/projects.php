<?php
// Template Name: Projects page

$projects_hero = get_field('section_projects_hero', $post->ID);
$projects_list = get_field('section_projects_list', $post->ID);
$projects_reviews = get_field('projects_reviews', $post->ID);
$projects_ready = get_field('section_projects_ready', $post->ID);
$projects_creative_space = get_field('section_creative_space', $post->ID);

$about_reviews = $projects_reviews;
$about_reviews_title = $about_reviews['title'];
$about_reviews_text = $about_reviews['text'];
$about_reviews_reviews = $about_reviews['reviews'];
$about_reviews_rating = $about_reviews['rating'];

get_header();

?>

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

    <?php if (!empty($projects_creative_space)) : ?>

        <section class="section-creative-space section">
            <div class="main-size">
                <div class="section-creative-space__wrapper">

                    <?php if(!empty($projects_creative_space['title'])) { ?>

                        <h2 class="title_basic title"><?php echo $projects_creative_space['title'] ?></h2>

                    <?php } ?>

                    <?php if (!empty($projects_creative_space['text'])) { ?>

                        <div class="section-creative-space__text"><?php echo $projects_creative_space['text'] ?></div>

                    <?php } ?>

                    <div class="section-creative-space__media">
                        <div class="section-creative-space__ball">
                                <svg width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M106.88 59.9995C106.881 53.0115 105.317 46.112 102.303 39.8075C99.2889 33.5029 94.9014 27.9532 89.4625 23.5657C89.4181 23.5215 89.3792 23.4737 89.3297 23.4331C89.273 23.3908 89.2138 23.3517 89.1526 23.3162C82.2543 17.8219 73.9439 14.3887 65.1791 13.4123C56.4144 12.4358 47.5522 13.9559 39.6139 17.7974C39.505 17.8394 39.4003 17.8915 39.3012 17.953C32.8635 21.1351 27.2399 25.7489 22.8613 31.4408C18.4828 37.1327 15.4656 43.7515 14.0411 50.79C14.039 50.7996 14.0347 50.8081 14.0329 50.8177C14.031 50.8271 14.0322 50.8362 14.0303 50.8456C12.3025 59.5341 13.0729 68.5343 16.2522 76.8027C19.4314 85.0711 24.8893 92.2689 31.993 97.5616C32.0941 97.6617 32.2063 97.7499 32.3274 97.8245C32.356 97.8419 32.3862 97.8541 32.4153 97.8699C38.5527 102.351 45.6891 105.271 53.2078 106.377C60.7264 107.482 68.4012 106.74 75.5689 104.215C75.6686 104.189 75.766 104.155 75.86 104.112C84.9367 100.838 92.7841 94.8465 98.3346 86.9534C103.885 79.0603 106.869 69.6488 106.88 59.9995ZM77.6964 99.3267C78.6867 94.3556 79.1863 89.2992 79.188 84.2304C79.1853 77.7046 78.3539 71.2055 76.7138 64.8892C83.4646 62.8912 90.4679 61.8756 97.5081 61.8736C99.3628 61.8736 101.23 61.9448 103.079 62.0838C102.686 70.0263 100.108 77.7062 95.6292 84.2775C91.1505 90.8488 84.9451 96.0564 77.6964 99.3267ZM103.095 58.326C101.239 58.1928 99.3676 58.1236 97.5081 58.1236C90.1208 58.1259 82.7721 59.1898 75.6875 61.2829C73.9716 55.7722 71.6365 50.4739 68.7267 45.4894C68.4996 45.101 68.2612 44.7203 68.0275 44.3363C75.7225 39.949 82.6026 34.2665 88.3648 27.5391C92.7893 31.3953 96.3785 36.1158 98.9116 41.4102C101.445 46.7046 102.868 52.4611 103.095 58.326ZM85.4371 25.1946C79.9293 31.6017 73.3542 37.0071 66.0028 41.1715C60.2519 32.6932 52.875 25.4411 44.2997 19.8358C51.0532 17.193 58.3648 16.2986 65.5562 17.2354C72.7476 18.1722 79.5861 20.9099 85.4371 25.1946ZM40.214 21.6921C49.1196 27.107 56.7737 34.3517 62.6693 42.9467C52.526 48.007 41.3436 50.6354 30.0081 50.6236C26.0313 50.6232 22.0609 50.3018 18.1358 49.6626C19.6208 43.7008 22.3576 38.1234 26.1642 33.3009C29.9708 28.4783 34.7601 24.5211 40.214 21.6921ZM16.8804 59.9995C16.8801 57.7705 17.052 55.5448 17.3945 53.3423C21.564 54.0286 25.7825 54.3735 30.0081 54.3736C42.0675 54.3874 53.9605 51.5589 64.7224 46.1174C64.9799 46.5376 65.2404 46.956 65.4894 47.3817C68.2623 52.132 70.4865 57.1819 72.1192 62.4344C67.6326 63.9968 63.3019 65.975 59.1835 68.3432C48.5244 74.497 39.487 83.1046 32.8218 93.4515C27.8419 89.4141 23.8264 84.3155 21.0685 78.5281C18.3105 72.7407 16.8797 66.4105 16.8804 59.9995ZM35.838 95.6992C42.1909 85.7592 50.8396 77.4916 61.0555 71.5927C64.9055 69.3791 68.9507 67.5241 73.1403 66.051C74.6631 71.9909 75.4351 78.0983 75.438 84.2304C75.4376 89.8616 74.7899 95.474 73.5078 100.957C67.2453 103.023 60.5922 103.623 54.0612 102.711C47.5302 101.799 41.2956 99.4004 35.838 95.6992Z" fill="url(#paint0_linear_3399_961)" stroke="url(#paint1_linear_3399_961)" stroke-width="0.6"/>
                                    <defs>
                                        <linearGradient id="paint0_linear_3399_961" x1="29.3829" y1="24.5299" x2="88.0209" y2="99.0547" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#00FFFF"/>
                                            <stop offset="1" stop-color="#01C4E5"/>
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_3399_961" x1="29.3829" y1="24.5299" x2="88.0209" y2="99.0547" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#00FFFF"/>
                                            <stop offset="1" stop-color="#01C4E5"/>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>

                        <?php if(!empty($projects_creative_space['logo_name'])) { ?>

                            <a rel="nofollow" class="button-default button-big-color" target="_blank" href="<?php echo $projects_creative_space['link'] ?>">
                                <span class="button-default__link">
                                    <div class="section-creative-space__logo_name">
                                        <img src="<?php echo $projects_creative_space['logo_name']['url'] ?>" alt="<?php echo $projects_creative_space['logo_name']['title'] ?>">
                                    </div>
                                </span>
                            </a>

                        <?php } ?>

                    </div>
                </div>
            </div>
        </section>

    <?php endif ?>

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
