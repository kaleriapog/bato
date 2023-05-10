<?php
// Template Name: Privacy page
// Template Post Type: post, page

$fields = get_fields();
$title = $fields['title'];
$subtitle = $fields['subtitle'];
$text = $fields['text'];

get_header();
?>

    <div class="preloader-menu-mob">
    </div>
    <main id="primary" class="site-main">

        <section class="section-privacy">
            <div class="main-size">
                <div class="section-privacy__wrapper">

                    <?php if(!empty($title)) { ?>

                        <div class="section-privacy__title title_basic">
                            <?php echo $title ?>
                        </div>

                    <?php } ?>
                    <?php if(!empty($subtitle)) { ?>

                        <div class="section-privacy__subtitle">
                            <?php echo $subtitle ?>
                        </div>

                    <?php } ?>
                    <?php if(!empty($text)) { ?>

                        <div class="section-privacy__text">
                            <?php echo $text ?>
                        </div>

                    <?php } ?>

                </div>
            </div>
        </section>

    </main>

<?php
get_footer();
?>