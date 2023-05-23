<?php 
    if(!empty($args)) {
        foreach ($args as $field_name => $field) {
            ${"$field_name"} = $field;
        }
    }
?>

<section class="section-numbers" id="section-numbers">
    <div class="section-numbers__inner main-size">

        <?php insertTitle($numbers_title, 'title_basic', 'h2') ?>
        <?php insertText($numbers_description, 'section-numbers__description') ?>

        <?php if (!empty($numbers_cards)) : ?>
            <div class="section-numbers__cards">
                <?php foreach ($numbers_cards as $key => $item) : ?>
                    <div class="section-numbers__card numbers-card-<?php echo $key ?>">
                        <?php insertText($item["numbers_card_number"], 'section-numbers__number') ?>

                        <?php if (!empty($item["numbers_card_title"])) : ?>
                            <div class="section-numbers__text-wrapp">
                                <p class="section-numbers__text"><?php echo $item["numbers_card_title"] ?></p>
                            </div>
                        <?php endif ?>
                    </div>
                <?php endforeach ?>
            </div>
        <?php endif ?>

    </div>
</section>