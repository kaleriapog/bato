<?php 
    $current_file_name = basename(__FILE__, '.php');
    include(__DIR__.'/../core/fields-generator.php');
?>

<section class="section-technologies" id="section-technologies">
    <div class="main-size">
        <div class="section-technologies__wrapper">

            <?php insertTitle($title, 'title_basic title', 'h2') ?>

            <ul class="section-technologies__images">
                <?php foreach ($images as $key => $item) : ?>

                    <li class="section-technologies__item section-technologies__item-<?php echo $key ?>">
                        <div class="section-technologies__image">
                            <div class="section-technologies__image-wrapper">
                                <?php insertImage($item) ?>
                            </div>
                        </div>
                    </li>

                <?php endforeach ?>
            </ul>
            
        </div>
    </div>
</section>