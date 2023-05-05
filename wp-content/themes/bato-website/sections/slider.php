<?php 
    if(!empty($args)) {
        foreach ($args as $field_name => $field) {
            ${"$field_name"} = $field;
        }
    }
?>

<?php if (!empty($slider_items)) : ?>

<section class="section-slider" id="section-slider">
    <div class="section-slider__inner">
        <div class="splide slider slider-home">
            <div class="splide__track slider-inner">
                <ul class="splide__list slider-items">

                    <?php foreach ($slider_items as $item) : ?>

                        <li class="splide__slide slider-item">
                            <div class="slider-item-name">

                                <?php echo $item["slide"] ?>

                                <p class="slider-item-name-hover">

                                    <?php echo $item["slide"] ?>
                                </p>
                            </div>
                        </li>

                    <?php endforeach ?>

                </ul>
            </div>
        </div>
    </div>
</section>

<?php endif ?>