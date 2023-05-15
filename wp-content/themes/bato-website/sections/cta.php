<?php 
    $current_file_name = basename(__FILE__, '.php');
    include(__DIR__.'/../core/fields-generator.php');
?>

<?php if (!empty($fields)) : ?>

<section class="section-about-ready section">
    <div class="main-size">
        <div class="section-about-ready__wrapper">

            <?php if (!empty($title)) : ?>
                <div class="title title_basic">
                    <?php echo $title ?>
                </div>
            <?php endif ?>

            <?php if (!empty($link)) : ?>
                <a class="button-default button-big-color" target="<?php echo $link['target'] ? $link['target'] : '_self' ?>" href="<?php echo $link['url'] ?>">
                    <span class="button-default__link"><?php echo $link['title'] ?></span>
                </a>
            <?php endif ?>

        </div>
    </div>
</section>

<?php endif ?>