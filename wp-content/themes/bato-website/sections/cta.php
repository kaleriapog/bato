<?php 
    $current_file_name = basename(__FILE__, '.php');
    include(__DIR__.'/../core/fields-generator.php');
?>

<?php if (!empty($fields)) : ?>

<section class="section-about-ready section">
    <div class="main-size">
        <div class="section-about-ready__wrapper">
            <?php insertTitle($title, 'title title_basic') ?>
            <?php if (!empty($link)): ?>
                <a class="section-about-ready__link magnetic" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a>
            <?php endif ?>
        </div>
    </div>
</section>

<?php endif ?>