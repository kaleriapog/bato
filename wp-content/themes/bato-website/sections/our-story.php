<?php 
    if(!empty($args)) {
        foreach ($args as $field_name => $field) {
            ${"$field_name"} = $field;
        }
    }

    $our_story_title = $fields['title'];
    $our_story_text = $fields['text'];
?>

<?php if (!empty($fields)) : ?>

<section class="section-about-our-story section">
    <div class="main-size">
        <div class="section-about-our-story__wrapper">
            <div class="section-about-our-story__bg">
                <?php insertImage('effect-story.png') ?>
            </div>

            <div class="section-about-our-story__content">
                <?php if (!empty($our_story_title)) : ?>
                    <div class="title title_basic"><?php echo $our_story_title ?></div>
                <?php endif ?>

                <?php if (!empty($our_story_text)) : ?>
                    <div class="section-about-our-story__text"><?php echo $our_story_text ?></div>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>

<?php endif ?>