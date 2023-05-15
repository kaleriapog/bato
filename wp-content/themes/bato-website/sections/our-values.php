<?php 
    if(!empty($args)) {
        foreach ($args as $field_name => $field) {
            ${"$field_name"} = $field;
        }
    }

    $our_values_title = $fields['title'];
    $our_values_items = $fields['items'];
?>

<?php if (!empty($our_values)) : ?>

<section class="section-our-values section">
    <div class="main-size">
        <div class="section-our-values__wrapper">
            <div class="section-our-values__content">
                <div class="section-our-values-scene-trigger-start"></div>

                <?php if (!empty($our_values_title)) : ?>
                    <div class="title_basic title our-values-fake-mask-parent"><?php echo $our_values_title ?>
                        <div class="our-values-fake-mask"></div>
                    </div>
                <?php endif ?>

                <?php if (!empty($our_values_items)) : ?>
                    <div class="section-our-values__items">
                        <div class="section-our-values__items-mask"></div>
                        <ul class="section-our-values__items-list">

                            <?php foreach ($our_values_items as $key => $our_values_item) : ?>

                                <?php
                                    $title = $our_values_item['title'];
                                    $text = $our_values_item['text']
                                ?>

                                <li class="section-our-values__item section-our-values__item-<?php echo ++$key ?>">
                                    <div class="section-our-values__item-number section-our-values__item-number-<?php echo $key ?>">
                                        <span class="item-number" style="-webkit-background-clip: text;"><?php echo  sprintf("%02d", $key) ?></span>
                                    </div>
                                    <div class="section-our-values__item-content">
                                        <?php if (!empty($our_values_items)) : ?>
                                            <h3 class="section-our-values__item-title"><?php echo strip_tags($title, '<br>, <span>, <strong>, <mark>, <i>, <em>, <b>') ?></h3>
                                        <?php endif ?>

                                        <?php if (!empty($our_values_items)) : ?>
                                            <div class="section-our-values__item-text"><?php echo $text ?></div>
                                        <?php endif ?>
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