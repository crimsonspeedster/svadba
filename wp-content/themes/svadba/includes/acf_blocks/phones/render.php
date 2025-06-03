<?php
$is_preview = get_field('is_preview');

$repeater = get_field('repeater');
$phones__lang = get_field('phones__lang');

if ($is_preview) {
    ?>
    <img style="width: 100%; height: auto;" src="<?= get_field('preview_image'); ?>" alt="preview" />
    <?php
}
else {
    if (function_exists('pll_current_language') && $phones__lang && $phones__lang !== pll_current_language())
        return;

    ?>
    <div <?= get_block_wrapper_attributes(); ?>>
        <ul class="contacts-list">
            <?php
                foreach ($repeater as $index => $item) {
                    ?>
                    <li class="contacts-list_phones only-mob">
                        <a href="<?= $item['link']['url']; ?>" class="contacts-list_item" <?php getLinkAttrs($item['link']); ?>>
                            <span class="image-span">
                                <?= wp_get_attachment_image($item['image_id'], 'full'); ?>
                            </span>

                            <span class="only-mob"><?= $item['link']['title']; ?></span>
                        </a>
                    </li>
                    <?php
                }
            ?>
        </ul>
    </div>
    <?php
}
