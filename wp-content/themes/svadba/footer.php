<?php
$common__footer_bg = get_field('common__footer_bg', 'option');

if (is_singular('post')) {
    $common__footer_bg = get_field('common__footer_bg_single', 'option');
}
?>
</main>

<footer class="footer">
    <div class="footer__bg">
        <?= wp_get_attachment_image($common__footer_bg, 'full'); ?>
    </div>

    <div class="footer-content">
        <?php
            if (is_active_sidebar('footer-column-1') || is_active_sidebar('footer-column-2') || is_active_sidebar('footer-column-3')) {
                ?>
                <div class="footer-content-top">
                    <?php
                        if (is_active_sidebar('footer-column-1')) {
                            ?>
                            <div class="footer-column footer-column--1">
                                <?php dynamic_sidebar('footer-column-1'); ?>
                            </div>
                            <?php
                        }

                        if (is_active_sidebar('footer-column-2')) {
                            ?>
                            <div class="footer-column footer-column--2">
                                <?php dynamic_sidebar('footer-column-2'); ?>
                            </div>
                            <?php
                        }

                        if (is_active_sidebar('footer-column-3')) {
                            ?>
                            <div class="footer-column footer-column--3">
                                <?php dynamic_sidebar('footer-column-3'); ?>
                            </div>
                            <?php
                        }
                    ?>
                </div>
                <?php
            }
        ?>

        <div class="footer-text">
            <p>
                <?=
                    sprintf(
                        pll__('© %s Усі права захищені'),
                        date('Y'),
                    );
                ?>
            </p>

            <p class="middle-text"><?= pll__('Усі фото та відео використані у нас на сайті зроблені на реальних весіллях організованих весільним агентством «Скоро Весілля»'); ?></p>

            <p class="studio">
                <?=
                    sprintf(
                        pll__('<a href="%s" target="_blank" rel="nofollow noindex noopener">Створення сайту</a> — студія Март'),
                        'https://mart.com.ua/'
                    );
                ?>
            </p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>