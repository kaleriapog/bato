<?php 
    if(!empty($args)) {
        foreach ($args as $field_name => $field) {
            ${"$field_name"} = $field;
        }
    }
?>

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
                <a class="button-default" target="<?php echo $about_link['target'] ? $about_link['target'] : '_self' ?>" href="<?php echo $about_link['url'] ?>" <?php if($about_link['target'] == '_blank'): ?>rel="nofollow" <?php endif ?> >
                    <span class="button-default__link"><?php echo $about_link['title'] ?></span>
                </a>
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
