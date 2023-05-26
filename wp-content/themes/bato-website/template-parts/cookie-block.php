<?php if (!isset($_COOKIE['cookies-accepted'])) : ?>
    <div class="block-cookies">
        <div class="block-cookies__fake-block"></div>
        <div class="main-size">
            <div class="block-cookies__inner">
                <div class="block-cookies__icon">
                    <?php insertImage('cookie.png') ?>
                </div>
                <div class="block-cookies__text"><?php _e('This website uses cookies to ensure you get the best experience on our website.', 'theme') ?> <a class="block-cookies__link" target="_blank" href="<?php echo home_url('privacy') ?>"><?php _e('Cookies Policy', 'theme') ?></a></div>
                <div class="block-cookies__button"><?php _e('AGREE', 'theme') ?></div>
            </div>
        </div>
    </div>
    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let el = document.querySelector('.block-cookies');
            let button = el.querySelector('.block-cookies__button')

            button.addEventListener('click', () => {
                const expirationDate = new Date(Date.now() + 86400000).toUTCString();
                const cookiePath = "/";
                document.cookie = "cookies-accepted=true; expires=" + expirationDate + "; path=" + cookiePath;

                el.style.transform = 'translateY(100%)'

                setTimeout(() => {
                    el.style.display = 'none'
                }, 600)
            });
        });
    </script>

    <style>
        .block-cookies {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 50;
            display: flex;
            transition: transform 0.6s;
        }

        .block-cookies .main-size {
            margin: 0;
            padding: 0;
        }

        .block-cookies__fake-block {
            background: rgba(5, 5, 6, 0.9);
            backdrop-filter: blur(12px);
            width: calc((100vw - 1440px) / 2);
        }

        .block-cookies__inner {
            display: flex;
            align-items: center;
            justify-content: left;
            flex-wrap: wrap;
            gap: 15px;
            width: fit-content;
            padding: 40px 50px 40px 20px;
            background: rgba(5, 5, 6, 0.9);
            backdrop-filter: blur(12px);
            filter: drop-shadow(0px 0px 40px rgba(0, 158, 212, 0.1));
        }

        .block-cookies__icon {
            width: 25px;
            height: 25px;

            svg {
            width: 100%;
            height: 100%;
            }
        }

        .block-cookies__text {
            padding-right: 25px;
            font-family: "Poppins", sans-serif;
            font-size: 14px;
            font-weight: 400;
            color: $color-text;
        }

        .block-cookies__link {
            color: #fff;
            text-decoration: underline;
            transition: color 0.3s;
        }

        .block-cookies__link:hover {
            color: #00ffff;
        }

        .block-cookies__button {
            color: #00ffff;
            border: 1px solid #00ffff;
            padding: 12px 35px;
            transition: background-color 0.3s, color 0.3s, border-color 0.3s;
            cursor: pointer;
        }

        .block-cookies__button:hover {
            background-color: #00ffff;
            color: #020102;
        }
    </style>
<?php endif ?>