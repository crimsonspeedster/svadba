<?php
$wave__condition = get_field('wave__condition', 'option');
$wave__repeater = get_field('wave__repeater', 'option');

if ($wave__condition && !empty($wave__repeater)) {
    ?>
    <div class="wawe-gallery">
        <div class="gallery">
            <?php
                foreach ($wave__repeater as $index => $item) {
                    $delay = ($index + 1) * 100;
                    ?>
                    <div class="gallery-item">
                        <a href="<?= $item['link']['url']; ?>" <?php getLinkAttrs($item['link']); ?> class="image-wrapper scroll sanimate" data-delay="<?= $delay; ?>ms">
                            <?= wp_get_attachment_image($item['image_id'], 'full'); ?>

                            <?php
                                if ($item['link']['title']) {
                                    ?>
                                    <div class="overlay"><?= $item['link']['title']; ?></div>
                                    <?php
                                }
                            ?>
                        </a>
                    </div>
                    <?php
                }
            ?>
        </div>
    </div>
    <?php
}
