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
        <?php
            get_template_part('partials/block-wave-gallery', '', [
                'repeater' => $repeater,
            ]);
        ?>
    </section>
    <?php
}
