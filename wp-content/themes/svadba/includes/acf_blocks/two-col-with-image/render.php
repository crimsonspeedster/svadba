<?php
$is_preview = get_field('is_preview');

$image_position = get_field('image_position');
$image_id = get_field('image_id');
$description = get_field('description');

if ($is_preview) {
    ?>
    <img style="width: 100%; height: auto;" src="<?= get_field('preview_image'); ?>" alt="preview" />
    <?php
}
else {
    ?>
    <section <?= get_block_wrapper_attributes(); ?>>
        <div class="two-col <?= $image_position; ?>-image-type">
            <div class="image-column ">
                <div class="wrp-image-column sanimate scroll fadeInLUp"><?= wp_get_attachment_image($image_id, 'full'); ?></div>
            </div>

            <div class="text-column"><?= $description; ?></div>
        </div>
    </section>
    <?php
}
