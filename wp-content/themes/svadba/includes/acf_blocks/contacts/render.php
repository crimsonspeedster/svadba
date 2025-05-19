<?php
$is_preview = get_field('is_preview');

$block_contacts__repeater = get_field('block_contacts__repeater');

if ($is_preview) {
    ?>
    <img style="width: 100%; height: auto;" src="<?= get_field('preview_image'); ?>" alt="preview" />
    <?php
}
else {
    ?>
    <div <?= get_block_wrapper_attributes(); ?>>
        <?php
          get_template_part('partials/social-block', '', [
                'repeater' => $block_contacts__repeater,
            ]);
        ?>
    </div>
    <?php
}
