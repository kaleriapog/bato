<?php 
    if(!empty($args)) {
        foreach ($args as $field_name => $field) {
            ${"$field_name"} = $field;
        }
    }

    $about_team_title = $fields['title'];
    $about_team_team = $fields['team'];
?>

<?php if (!empty($about_team_team)) : ?>

<section class="section-team section-about-team section" id="section-team">
    <div class="main-size">
        <div class="section-team__inner">
            <div class="section-team__nav">
                <h2 class="title_basic title"><?php echo $about_team_title ?></h2>
            </div>
            <div class="swiper-about-team">

                <div class="section-team__items">

                    <?php foreach ($about_team_team as $key => $item) : ?>
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
                                                        <span class="section-team__card-team-name"><?php echo $item_name ?></span>
                                                        <span class="section-team__card-team-position"><?php echo $item_position ?></span>
                                                        <span class="section-team__card-team-text"><?php echo $item_text ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cube-item bottom-cube">
                                            <div class="photo-cube-inner">
                                                <div class="photo-cube-img-wrapp">
                                                    <?php insertImage($item_image) ?>
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