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
    <ul <?= get_block_wrapper_attributes(['class' => 'meet-us']); ?>>
        <?php
            foreach ($repeater as $index => $item) {
                $delay = ($index + 1) * 100;
                ?>
                <li class="meet-us-item sanimate fadeInLeft " data-delay="<?= $delay; ?>ms">
                    <a href="<?= $item['link']['url']; ?>" <?php getLinkAttrs($item['link']); ?>>
                        <?= wp_get_attachment_image($item['image_id'], 'full'); ?>
                    </a>
                </li>
                <?php
            }
        ?>
    </ul>
    <?php
}
