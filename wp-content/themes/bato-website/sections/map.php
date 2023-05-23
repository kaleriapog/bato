<?php 
    $current_file_name = basename(__FILE__, '.php');
    include(__DIR__.'/../core/fields-generator.php');
?>

<?php if (!empty($fields)) : ?>
    <section class="section-map section">
        <div class="section-map__wrapper main-size">
            <?php insertTitle($text, 'section-map__title') ?>
            <?php insertImage('map-new.png', 'section-map__image') ?>
        </div>
    </section>
<?php endif ?>