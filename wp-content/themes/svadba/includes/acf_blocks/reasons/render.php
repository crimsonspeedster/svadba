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
        <div class="reasons">
            <?php
                foreach ($repeater as $index => $item) {
                    $delay = ($index + 1) * 100;
                    ?>
                    <div class="reason-item sanimate scroll fadeInLUp" data-delay="<?= $delay; ?>ms" >
                        <p class="reason-name"><?= $item['title']; ?></p>

                        <p><?= $item['description']; ?></p>
                    </div>
                    <?php
                }
            ?>
        </div>
    </section>
    <?php
}
