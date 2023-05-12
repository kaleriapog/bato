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
        <div class="slider slider-home">
            <div class="slider-inner">
                <ul class="slider-items">

                    <?php foreach ($slider_items as $item) : ?>

                        <li class="slider-item">
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