<?php 
    $current_file_name = basename(__FILE__, '.php');
    include(__DIR__.'/../core/fields-generator.php');

    $sizes = array(2, 3, 2, 2, 3, 2);
    $chunks = array();
    $start = 0;
    foreach ($sizes as $size) {
        $chunks[] = array_slice($images, $start, $size);
        $start += $size;
    }
?>

<?php if (!empty($images) || !empty($title)) : ?>

<section class="section-about-family section">
    <div class="main-size">
        <div class="section-about-family__wrapper">
            <div class="section-about-family__content">

                <?php if (!empty($title)) : ?>
                    <div class="section-about-family__title title title_basic"><?php echo $title ?></div>
                <?php endif ?>

                <?php if (!empty($images)) : ?>
                    <ul class="section-about-family__images family-images-desktop">
                        <?php foreach ($chunks as $item) : ?>
                            <li class="section-about-family__images-column">
                                <ul class="section-about-family__images-column-inner">
                                    <?php foreach ($item as $key => $image) : ?>
                                        <li class="section-about-family__image image-<?php echo $key ?>">
                                            <?php insertImage($image['image']) ?>
                                            <div class="section-about-family__image-bg"></div>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            </li>
                        <?php endforeach ?>
                    </ul>

                    <ul class="section-about-family__images family-images-mobile">
                        <?php foreach ($images as $key => $image) : ?>
                            <li class="section-about-family__image image-<?php echo $key ?>">
                                <?php insertImage($image['image']) ?>
                                <div class="section-about-family__image-bg"></div>
                            </li>
                        <?php endforeach ?>
                    </ul>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>

<?php endif ?>