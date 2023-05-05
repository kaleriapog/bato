<?php 
    if(!empty($args)) {
        foreach ($args as $field_name => $field) {
            ${"$field_name"} = $field;
        }
    }
?>

<section class="section-offers" id="section-offers">
    <div class="section-offers__inner main-size">

        <?php if (!empty($offers_title)) : ?>
            <h2 class="title_basic"><?php echo $offers_title ?></h2>
        <?php endif ?>

        <div class="section-offers__cards">
            <?php foreach ($offers_cards as $item) : ?>

                <div class="section-offers__card">

                    <?php if (!empty($item['offers_card_title'])) : ?>
                        <h3 class="card-title"><?php echo $item['offers_card_title'] ?></h3>
                    <?php endif ?>

                    <?php if (!empty($item['offers_card_text'])) : ?>
                        <?php echo $item['offers_card_text'] ?>
                    <?php endif ?>

                </div>

            <?php endforeach ?>
        </div>

    </div>
</section>