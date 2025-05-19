<?php
$is_preview = get_field('is_preview');

$title = get_field('title');
$pretitle = get_field('pretitle');
$description = get_field('description');
$repeater = get_field('repeater');

if ($is_preview) {
    ?>
    <img style="width: 100%; height: auto;" src="<?= get_field('preview_image'); ?>" alt="preview" />
    <?php
}
else {
    ?>
    <section <?= get_block_wrapper_attributes(); ?>>
        <div class="slider-section">
            <h2 class="sections-name left"><?= $title; ?></h2>

            <?php
                if ($pretitle) {
                    ?>
                    <p class="reason-name"><?= $pretitle; ?></p>
                    <?php
                }

                if ($description) {
                    ?>
                    <div><?= $description; ?></div>
                    <?php
                }
            ?>

            <div class="slider-wrapper">
                <div class="owl-section-1 owl-carousel owl-sect owl-theme">
                    <?php
                        foreach ($repeater as $index => $item) {
                            $delay = ($index + 1) * 100;
                            ?>
                            <div class="item">
                                <?= wp_get_attachment_image($item['image_id'], 'full', null, ['data-delay' => $delay . 'ms']); ?>
                            </div>
                            <?php
                        }
                    ?>
                </div>

                <div class="btn-wrap">
                    <button class="prev-btn">
                        <svg width="33" height="26" viewBox="0 0 33 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32 13.0223L1.36339 13M13.0349 25L0.999999 13L13.0349 1" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>

                    <button class="next-btn">
                        <svg width="69" height="54" viewBox="0 0 69 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.999997 26.9517L67.2146 27M41.9891 0.999996L68 27L41.9891 53" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <?php
}
