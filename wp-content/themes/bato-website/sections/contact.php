<?php 
    if(!empty($args)) {
        foreach ($args as $field_name => $field) {
            ${"$field_name"} = $field;
        }
    }
?>

<section class="section-contact" id="section-contact">
    <div class="section-contact__inner main-size">
        <div class="section-contact__description">

            <?php insertTitle($contact_title, 'title_basic title', 'h2') ?>

            <?php if (!empty($contact_phrase)) : ?>
                <div class="section-contact__phrase">
                    <?php echo $contact_phrase ?>
                </div>
            <?php endif ?>

        </div>
        <div class="section-contact__image">

            <?php if (!empty($contact_image)) : ?>
                <div class="section-contact__image-wrapp">
                    <?php insertImage($contact_image) ?>
                </div>
            <?php endif ?>

            <div class="section-contact__light-wrapp">
                <div class="section-contact__light" id="contact-light">
                    <?php insertImage('get-bg.svg') ?>
                </div>
            </div>

        </div>
    </div>
</section>