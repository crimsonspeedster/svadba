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
    <section <?= get_block_wrapper_attributes(); ?>>
        <div class="images-unique">
            <?php
                foreach ($repeater as $index => $item) {
                    $delay = ($index + 1) * 100;
                    ?>
                    <div class="image-it">
                        <?= wp_get_attachment_image($item['image_id'], 'full', null, ['data-delay' => $delay . 'ms']); ?>
                    </div>
                    <?php
                }
            ?>
        </div>
    </section>
    <?php
}
