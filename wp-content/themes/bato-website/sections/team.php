<?php 
    $current_file_name = basename(__FILE__, '.php');
    include(__DIR__.'/../core/fields-generator.php');
?>

<section class="section-team section" id="section-team">
    <div class="section-team__inner main-size">

        <?php insertTitle($team_title, 'title_basic', 'h2') ?>

        <?php if (!empty($team_items)) : ?>
            <div class="section-team__items">

                <?php foreach ($team_items as $key => $item) : ?>

                    <div class="section-team__items-wrapp item-photo item-photo-<?php echo $key ?>">
                        <div class="container">
                            <div class="viewport">
                                <div class="cube">

                                    <div class="cube-item front-cube">
                                        <div class="front-cube-inner">
                                            <div class="front-cube-content">
                                                <?php insertTitle($item["team_name"], 'section-team__card-team-name', 'span') ?>
                                                <?php insertTitle($item["team_position"], 'section-team__card-team-position', 'span') ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cube-item bottom-cube">
                                        <div class="photo-cube-inner">
                                            <div class="photo-cube-img-wrapp">
                                                <?php insertImage($item['team_image']) ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach ?>
            </div>
        <?php endif ?>

    </div>
</section>