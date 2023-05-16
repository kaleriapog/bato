<?php 
    $current_file_name = basename(__FILE__, '.php');
    include(__DIR__.'/../core/fields-generator.php');
?>

<?php if (!empty($fields['projects_list'])) : ?>

<section class="section-projects section">
    <div class="main-size">
        <div class="section-projects__list">

            <?php foreach ($fields['projects_list'] as $item) : ?>
                <a class="section-projects__item" href="<?php echo $item['link']['url'] ?>" target="_blank>" rel="nofollow">

                    <?php if (!empty($item['image'])) : ?>
                        <div class="section-projects__item-image-wrap">
                            <div class="section-projects__item-image-inner">
                                <div class="section-projects__item-image"><?php insertImage($item['image']) ?></div>
                                
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