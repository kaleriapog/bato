<?php 
    if(!empty($args)) {
        foreach ($args as $field_name => $field) {
            ${"$field_name"} = $field;
        }
    }
?>

<section class="section-cards" id="section-cards">
    <div class="section-cards__inner main-size">

        <?php if (!empty($cards_title)) : ?>
            <h1 class="title_basic"><?php echo $cards_title ?></h1>
        <?php endif ?>

        <?php if (!empty($cards_services)) : ?>
            <div class="cards-services">
                <?php foreach ($cards_services["сards_services"] as $key => $item) : ?>

                    <div id="card-services-<?php echo $key ?>" class="card-services card-services-<?php echo $key ?>">
                        <div class="card-services__inner">
                            <div class="card-services-wrapp">
                                <div class="card-services-blur">
                                    <div class="card-description">

                                        <?php if (!empty($item['card_title'])) : ?>
                                            <h3 class="card-title"><?php echo $item['card_title'] ?></h3>
                                        <?php endif ?>

                                        <?php if (!empty($item['card_text'])) : ?>
                                            <div class="card-text"><?php echo $item['card_text'] ?></div>
                                        <?php endif ?>

                                    </div>
                                    <div class="card-icon"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach ?>
            </div>
        <?php endif ?>

    </div>
</section>