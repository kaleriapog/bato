<?php 
    $current_file_name = basename(__FILE__, '.php');
    include(__DIR__.'/../core/fields-generator.php');
?>

<?php if (!empty($fields)) : ?>

<section class="section-our-values section">
    <div class="main-size">
        <div class="section-our-values__wrapper">
            <div class="section-our-values__content">
                <div class="section-our-values-scene-trigger-start"></div>

                <?php if (!empty($title)) : ?>
                    <div class="title_basic title our-values-fake-mask-parent">
                        <?php echo $title ?>
                        <div class="our-values-fake-mask"></div>
                    </div>
                <?php endif ?>

                <?php if (!empty($items)) : ?>
                    <div class="section-our-values__items">
                        <div class="section-our-values__items-mask"></div>
                        <ul class="section-our-values__items-list">

                            <?php foreach ($items as $key => $our_values_item) : ?>
                                <li class="section-our-values__item section-our-values__item-<?php echo ++$key ?>">
                                    <div class="section-our-values__item-number section-our-values__item-number-<?php echo $key ?>">
                                        <span class="item-number" style="-webkit-background-clip: text;"><?php echo  sprintf("%02d", $key) ?></span>
                                    </div>
                                    <div class="section-our-values__item-content">
                                        <?php insertTitle($our_values_item['title'], 'section-our-values__item-title', 'h3') ?>
                                        <?php insertText($our_values_item['text'], 'section-our-values__item-text') ?>
                                    </div>
                                </li>
                            <?php endforeach ?>

                        </ul>
                    </div>
                    <div class="section-our-values-scene-trigger-end"></div>
                <?php endif ?>

            </div>
        </div>
    </div>
</section>

<?php endif ?>