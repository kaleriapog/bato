<?php
if(!empty($args)) {
    foreach ($args as $field_name => $field) {
        ${"$field_name"} = $field;
    }
}
?>

<section class="section-technologies" id="section-technologies">
    <div class="main-size">
        <div class="section-technologies__wrapper">

            <?php if (!empty($title)) : ?>
                <h2 class="title_basic title"><?php echo $title ?></h2>
            <?php endif ?>

            <ul class="section-technologies__images">

                <?php foreach ($images as $item) : ?>

                    <li class="section-technologies__item">
                        <div class="section-technologies__image">
                            <div class="section-technologies__image-wrapper">
                                <img src="<?php echo $item['link'] ?>" alt="<?php echo $item['title'] ?>">
                            </div>
                        </div>
                    </li>

                <?php endforeach ?>
            </ul>

        </div>

    </div>
</section>