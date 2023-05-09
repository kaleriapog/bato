<section class="section-contact" id="section-contact">
    <div class="section-contact__inner main-size">
        <div class="section-contact__description">

            <?php if (!empty($contact_title)) : ?>
                <h2 class="title_basic title"><?php echo $contact_title ?></h2>
            <?php endif ?>

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