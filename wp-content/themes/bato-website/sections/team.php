<?php 
    $current_file_name = basename(__FILE__, '.php');
    include(__DIR__.'/../core/fields-generator.php');
?>

<?php if (!empty($fields)) : ?>

<section class="section-team section-about-team section" id="section-team">
    <div class="main-size">
        <div class="section-team__inner">
            <div class="section-team__nav">
                <h2 class="title_basic title"><?php echo $team_title ?></h2>
            </div>
            <div class="swiper-about-team">

                <div class="section-team__items">

                    <?php foreach ($team_items as $key => $item) : ?>
                        <?php
                            foreach ($item as $item_key => $item_value) {
                                ${"item_$item_key"} = $item_value;
                            }
                        ?>

                        <div class="section-team__items-wrapp item-photo item-photo-<?php echo $key ?>">
                            <div class="container">
                                <div class="viewport">
                                    <div class="cube">
                                        <div class="cube-item front-cube">
                                            <div class="front-cube-inner">
                                                <div class="front-cube-content">
                                                    <div class="section-team__card-team-description">
                                                        <?php insertTitle($item_team_name, 'section-team__card-team-name', 'span') ?>
                                                        <?php insertTitle($item_team_position, 'section-team__card-team-position', 'span') ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cube-item bottom-cube">
                                            <div class="photo-cube-inner">
                                                <div class="photo-cube-img-wrapp">
                                                    <?php insertImage($item_team_image) ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>

                </div>
            </div>
        </div>
    </div>
</section>

<?php endif ?>