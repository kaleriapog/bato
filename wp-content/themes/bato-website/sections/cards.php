<?php 
    $current_file_name = basename(__FILE__, '.php');
    include(__DIR__.'/../core/fields-generator.php');
?>

<?php if(!empty($fields)): ?>

<section class="section-cards" id="section-cards">
    <div class="section-cards__inner main-size">

        <?php insertTitle($cards_title, 'title_basic', 'h2') ?>

        <?php if (!empty($cards_services)) : ?>
            <div class="cards-services">
                <?php foreach ($cards_services as $key => $item) : ?>

                    <div id="card-services-<?php echo $key ?>" class="card-services card-services-<?php echo $key ?>">
                        <div class="card-services__inner">
                            <div class="card-services-wrapp">
                                <div class="card-services-blur">
                                    <div class="card-description">
                                        <?php insertTitle($item['card_title'], 'card-title', 'h3') ?>
                                        <?php insertText($item['card_text'], 'card-text') ?>
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

<?php endif ?>