<?php 
    if(!empty($args)) {
        foreach ($args as $field_name => $field) {
            ${"$field_name"} = $field;
        }
    }
?>

<section class="section-team" id="section-team">
    <div class="section-team__inner main-size">

        <?php if (!empty($team_title)) : ?>
            <h2 class="title_basic"><?php echo $team_title ?></h2>
        <?php endif ?>

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

                                                <?php if (!empty($item["team_name"])) : ?>
                                                    <span class="section-team__card-team-name"><?php echo $item["team_name"] ?></span>
                                                <?php endif ?>

                                                <?php if (!empty($item["team_name"])) : ?>
                                                    <span class="section-team__card-team-position"><?php echo $item["team_position"] ?></span>
                                                <?php endif ?>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="cube-item bottom-cube">
                                        <div class="photo-cube-inner">
                                            <div class="photo-cube-img-wrapp">

                                                <?php if (!empty($item['team_image'])) : ?>
                                                    <?php insertImage($item['team_image']) ?>
                                                <?php endif ?>

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