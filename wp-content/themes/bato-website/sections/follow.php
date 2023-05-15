<?php 
    if(!empty($args)) {
        foreach ($args as $field_name => $field) {
            ${"$field_name"} = $field;
        }
    }

    $about_follow_title = $fields['title'];
    $about_follow_image = $fields['image'];
    $about_follow_links = $fields['links'];
?>

<?php if (!empty($fields)) : ?>

<section class="section-about-follow section">
    <div class="main-size">
        <div class="section-about-follow__wrapper">

            <?php if (!empty($about_follow_image)) : ?>
                <div class="section-about-follow__image">
                    <?php insertImage($about_follow_image) ?>
                </div>
            <?php endif ?>

            <?php if (!empty($about_follow_title) || !empty($about_follow_links)) : ?>
                <div class="section-about-follow__content">

                    <?php if (!empty($about_follow_title)) : ?>
                        <h2 class="title title_basic"><?php echo strip_tags($about_follow_title, '<br>, <span>, <strong>, <mark>, <i>, <em>, <b>') ?></h2>
                    <?php endif ?>

                    <?php if (!empty($about_follow_links)) : ?>
                        <ul class="section-about-follow__links">
                            <?php foreach ($about_follow_links as $key => $link) : ?>
                                <?php
                                    $name = $link['link']['title'];
                                    $url = $link['link']['url'];
                                ?>

                                <li class="section-about-follow__link"><a href="<?php echo $url ?>"><?php echo $name ?></a></li>
                            <?php endforeach  ?>
                        </ul>
                    <?php endif ?>

                </div>
            <?php endif ?>

        </div>
    </div>
</section>

<?php endif ?>