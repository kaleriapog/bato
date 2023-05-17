<?php 
    $current_file_name = basename(__FILE__, '.php');
    include(__DIR__.'/../core/fields-generator.php');
?>

<?php if (!empty($fields['projects_list'])) : ?>

<section class="section-projects section">
    <div class="main-size">
        <div class="section-projects__list">

            <?php foreach ($fields['projects_list'] as $item) : ?>
                <a class="section-projects__item" href="<?php echo $item['link']['url'] ?>" target="_blank" rel="nofollow">

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

                        <?php insertTitle($item['title'], 'section-projects__item-title', 'h2') ?>
                        <?php insertTitle($item['subtitle'], 'section-projects__item-subtitle') ?>
                        <?php insertText($item['text'], 'section-projects__item-text') ?>
                    </div>

                    <?php if (!empty($item['technologies'])) : ?>
                        <div class="section-projects__item-technologies">
                            <?php foreach ($item['technologies'] as $el) : ?>
                                <?php insertTitle($el['title'], 'section-projects__item-technologies-el') ?>
                            <?php endforeach ?>
                        </div>
                    <?php endif ?>
                </a>
            <?php endforeach ?>
        </div>
    </div>
</section>

<?php endif ?>