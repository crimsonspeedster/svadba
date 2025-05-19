<?php
$is_preview = get_field('is_preview');

$repeater = get_field('repeater');

if ($is_preview) {
    ?>
    <img style="width: 100%; height: auto;" src="<?= get_field('preview_image'); ?>" alt="preview" />
    <?php
}
else {
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
