<?php 
    $current_file_name = basename(__FILE__, '.php');
    include(__DIR__.'/../core/fields-generator.php');
?>

<?php if (!empty($fields)) : ?>

<section class="section-creative-space section">
    <div class="main-size">
        <div class="section-creative-space__wrapper">

            <?php insertTitle($fields['title'], 'title_basic title', 'h2') ?>

            <?php if (!empty($fields['text'])) : ?>
                <div class="section-creative-space__text"><?php echo $fields['text'] ?></div>
            <?php endif ?>

            <div class="section-creative-space__media">
                <div class="section-creative-space__ball">
                    <?php insertImage('space-ball.svg') ?>
                </div>

                <?php if(!empty($fields['logo_name'])) : ?>
                    <a class="button-default button-big-color" href="<?php echo $fields['link'] ?>" target="_blank" rel="nofollow">
                        <span class="button-default__link">
                            <div class="section-creative-space__logo_name">
                                <?php insertImage($fields['logo_name']) ?>
                            </div>
                        </span>
                    </a>
                <?php endif ?>

            </div>
        </div>
    </div>
</section>

<?php endif ?>