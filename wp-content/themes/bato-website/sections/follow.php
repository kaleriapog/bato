<?php 
    $current_file_name = basename(__FILE__, '.php');
    include(__DIR__.'/../core/fields-generator.php');
?>

<?php if (!empty($fields)) : ?>

<section class="section-about-follow section">
    <div class="main-size">
        <div class="section-about-follow__wrapper">

            <?php if (!empty($image)) : ?>
                <div class="section-about-follow__image">
                    <?php insertImage($image) ?>
                </div>
            <?php endif ?>

            <?php if (!empty($title) || !empty($links)) : ?>
                <div class="section-about-follow__content">
                    <?php insertTitle($title, 'title title_basic', 'h2') ?>

                    <?php if (!empty($links)) : ?>
                        <ul class="section-about-follow__links">
                            <?php foreach ($links as $key => $link) : ?>
                                <li class="section-about-follow__link"><a href="<?php echo $link['link']['url'] ?>" target="_blank" rel="nofollow"><?php echo $link['link']['title'] ?></a></li>
                            <?php endforeach  ?>
                        </ul>
                    <?php endif ?>
                </div>
            <?php endif ?>

        </div>
    </div>
</section>

<?php endif ?>