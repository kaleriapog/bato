<?php if (!isset($_COOKIE['cookies-accepted'])) { ?>
    <div class="block-cookies">
        <div class="block-cookies__fake-block"></div>
        <div class="main-size">
            <div class="block-cookies__inner">
                <div class="block-cookies__icon">
                    <?php insertImage('cookie.png') ?>
                </div>
                <div class="block-cookies__text">This website uses cookies to ensure you get the best experience on our website. <a class="block-cookies__link" target="_blank" href="./privacy">Cookies Policy</a></div>
                <div class="block-cookies__button">AGREE</div>
            </div>
        </div>
    </div>
<?php } ?>