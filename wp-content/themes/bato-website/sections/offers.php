<?php 
    if(!empty($args)) {
        foreach ($args as $field_name => $field) {
            ${"$field_name"} = $field;
        }
    }
?>

<section class="section-offers" id="section-offers">
    <div class="section-offers__inner main-size">
        <?php insertTitle($offers_title, 'title_basic', 'h2') ?>

        <div class="section-offers__cards">
            <?php foreach ($offers_cards as $item) : ?>
                <div class="section-offers__card">
                    <?php insertTitle($item['offers_card_title'], 'card-title', 'h3') ?>
                    <?php insertText($item['offers_card_text']) ?>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>