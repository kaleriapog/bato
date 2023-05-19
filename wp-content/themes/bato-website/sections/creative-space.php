<?php 
    $current_file_name = basename(__FILE__, '.php');
    include(__DIR__.'/../core/fields-generator.php');
?>

<?php if (!empty($fields)) : ?>

<section class="section-creative-space section">
    <div class="main-size">
        <div class="section-creative-space__wrapper">

            <?php insertTitle($fields['title'], 'title_basic title', 'h2') ?>
            <?php insertText($fields['text'], 'section-creative-space__text') ?>

            <div class="section-creative-space__media">
                <div class="section-creative-space__ball-wrap">
                    <div class="section-creative-space__ball">
                        <?php insertImage('space-ball.png') ?>
                    </div>
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