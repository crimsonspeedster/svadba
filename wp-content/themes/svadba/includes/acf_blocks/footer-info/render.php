<?php
$is_preview = get_field('is_preview');

$footer_info__logo = get_field('footer_info__logo');
$footer_info__social = get_field('footer_info__social');
$footer_info__lang = get_field('footer_info__lang');

if ($is_preview) {
    ?>
    <img style="width: 100%; height: auto;" src="<?= get_field('preview_image'); ?>" alt="preview" />
    <?php
}
else {
    if (function_exists('pll_current_language') && $footer_info__lang && $footer_info__lang !== pll_current_language())
        return;

    ?>
    <div <?= get_block_wrapper_attributes(['class' => 'footer-info']); ?>>
        <a href="<?= get_home_url(); ?>" class="footer-logo scroll sanimate">
            <?= wp_get_attachment_image($footer_info__logo, 'full'); ?>
        </a>

        <?php
            if (!empty($footer_info__social)) {
                ?>
                <div class="footer-capitali scroll sanimate">
                    <?php
                        foreach ($footer_info__social as $item) {
                            ?>
                            <a href="<?= $item['link']['url']; ?>" class="social-icon" <?php getLinkAttrs($item['link']); ?>>
                                <?= wp_get_attachment_image($item['image'], 'full'); ?>
                            </a>
                            <?php
                        }
                    ?>
                </div>
                <?php
            }
        ?>
    </div>
    <?php
}
