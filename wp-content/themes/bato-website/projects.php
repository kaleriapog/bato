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

    <?php 
        get_template_part('sections/about-reviews', NULL, 
            [
                'about_reviews' => $projects_reviews,
                'about_reviews_title' => $projects_reviews['title'],
                'about_reviews_text' => $projects_reviews['text'],
                'about_reviews_reviews' => $projects_reviews['items'],
                'about_reviews_rating' => $projects_reviews['rating'],
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
