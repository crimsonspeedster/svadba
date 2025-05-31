<?php
$is_preview = get_field('is_preview');

$block_contacts__repeater = get_field('block_contacts__repeater');
$block_contacts__lang = get_field('block_contacts__lang');

if ($is_preview) {
    ?>
    <img style="width: 100%; height: auto;" src="<?= get_field('preview_image'); ?>" alt="preview" />
    <?php
}
else {
    if (function_exists('pll_current_language') && $block_contacts__lang && $block_contacts__lang !== pll_current_language())
        return;

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
