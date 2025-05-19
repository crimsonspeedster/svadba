<?php
$is_preview = get_field('is_preview');

if ($is_preview) {
    ?>
    <img style="width: 100%; height: auto;" src="<?= get_field('preview_image'); ?>" alt="preview" />
    <?php
}
else {
    if (function_exists('pll_the_languages')) {
        ?>
        <div <?= get_block_wrapper_attributes(); ?> data-delay="200ms">
            <button type="button" class="dropbtn"><?= pll_current_language(); ?></button>

            <div class="dropdown-content">
                <?php
                    pll_the_languages([
                        'echo' => 1,
                    ]);
                ?>
            </div>
        </div>
        <?php
    }
}
