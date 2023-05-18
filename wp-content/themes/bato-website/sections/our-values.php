<?php 
    $current_file_name = basename(__FILE__, '.php');
    include(__DIR__.'/../core/fields-generator.php');
?>

<?php if (!empty($fields)) : ?>

<section class="section-our-values section">

    <?php if (!empty($title)) : ?>

        <div class="section-our-values__sticky">
            <div class="main-size">
                <div class="section-our-values__content">
                    <div class="title_basic title our-values-fake-mask-parent"><?php echo $title ?>
                        <div class="our-values-fake-mask"></div>
                    </div>
                </div>
            </div>
            <div class="section-our-values__items-mask"></div>
        </div>

    <?php endif ?>


    <div class="section-our-values__wrapper">
        <div class="main-size">
            <div class="section-our-values__content">

                <?php if (!empty($items)) : ?>
                    <div class="section-our-values__items">
                        <ul class="section-our-values__items-list">

                            <?php foreach ($items as $key => $our_values_item) : ?>

                                <?php
                                    $title = $our_values_item['title'];
                                    $text = $our_values_item['text']
                                ?>

                                <li class="section-our-values__item section-our-values__item-<?php echo ++$key ?>">
                                    <div class="section-our-values__item-number section-our-values__item-number-<?php echo $key ?>">
                                        <span class="item-number" style="-webkit-background-clip: text;"><?php echo  sprintf("%02d", $key) ?></span>
                                    </div>
                                    <div class="section-our-values__item-content">
                                        <?php if (!empty($items)) : ?>
                                            <h3 class="section-our-values__item-title"><?php echo strip_tags($title, '<br>, <span>, <strong>, <mark>, <i>, <em>, <b>') ?></h3>
                                        <?php endif ?>

                                        <?php if (!empty($items)) : ?>
                                            <div class="section-our-values__item-text"><?php echo $text ?></div>
                                        <?php endif ?>
                                    </div>

                                </li>

                            <?php endforeach ?>

                        </ul>
                    </div>
                <?php endif ?>

            </div>
        </div>
    </div>

</section>

<?php endif ?>