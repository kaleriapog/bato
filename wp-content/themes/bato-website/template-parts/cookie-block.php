<?php if (!isset($_COOKIE['cookies-accepted'])) : ?>
    <div class="block-cookies">
        <div class="block-cookies__fake-block"></div>
        <div class="main-size">
            <div class="block-cookies__inner">
                <div class="block-cookies__icon">
                    <?php insertImage('cookie.png', '', 25, 25) ?>
                </div>
                <div class="block-cookies__text"><?php _e('This website uses cookies to ensure you get the best experience on our website.', 'theme') ?> <a class="block-cookies__link" target="_blank" href="<?php echo home_url('privacy') ?>"><?php _e('Cookies Policy', 'theme') ?></a></div>
                <div class="block-cookies__button"><?php _e('AGREE', 'theme') ?></div>
            </div>
        </div>
    </div>
<?php endif ?>