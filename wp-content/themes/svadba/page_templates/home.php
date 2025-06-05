<?php
/*
Template Name: Home page
post_type: page
*/

get_header();

$common__link = get_field('common__link');

$ideal__condition = get_field('ideal__condition');
$ideal__text_left = get_field('ideal__text_left');
$ideal__text_right = get_field('ideal__text_right');

$organization__condition = get_field('organization__condition');
$organization__description = get_field('organization__description');
$organization__link = get_field('organization__link');
$organization__images = get_field('organization__images');

$trust__condition = get_field('trust__condition');
$trust__title = get_field('trust__title');
$trust__images = get_field('trust__images');
$trust__image_right = get_field('trust__image_right');
$trust__reasons = get_field('trust__reasons');
$trust__link = get_field('trust__link');

$result__condition = get_field('result__condition');
$result__title = get_field('result__title');
$result__images = get_field('result__images');

$questions__condition = get_field('questions__condition');
$questions__title = get_field('questions__title');
$questions__description = get_field('questions__description');
$questions__repeater = get_field('questions__repeater');

$wave__condition = get_field('wave__condition');
$wave__repeater = get_field('wave__repeater');

$contact__condition = get_field('contact__condition');
$contact__title = get_field('contact__title');
$contact__description = get_field('contact__description');
$contact__form_id = get_field('contact__form_id');
?>
<div class="page-content">
    <?php
        if (!empty($common__link)) {
            ?>
            <p class="gold-text scroll sanimate" data-delay="200ms">
                <?=
                    sprintf(
                        pll__('<a class="scroll-to-form" href="%s">Хочу</a> подробиць'),
                        $common__link['url']
                    );
                ?>
            </p>
            <?php
        }

        if ($ideal__condition) {
            ?>
            <div class="two-text ">
                <p class="bold-text  scroll sanimate "><?= $ideal__text_left; ?></p>

                <p class="light-text  scroll sanimate "><?= $ideal__text_right; ?></p>
            </div>
            <?php
        }

        if ($organization__condition) {
            ?>
            <div class="container-main">
                <div class="wrap-two">
                    <?php
                        if (!empty($organization__images)) {
                            ?>
                            <div class="pics-block">
                                <?php
                                    foreach ($organization__images as $item) {
                                        ?>
                                        <div class="wrap-images wrap-<?= $item['image_position']; ?> scroll sanimate">
                                            <?= wp_get_attachment_image($item['image_id'], 'full'); ?>
                                        </div>
                                        <?php
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>

                    <div class="texts-part">
                        <div class="simple-text scroll sanimate"><?= $organization__description; ?></div>

                        <?php
                            if (!empty($organization__link)) {
                                ?>
                                <a href="<?= $organization__link['url']; ?>" class="button scroll sanimate" <?php getLinkAttrs($organization__link); ?>>
                                    <span><?= $organization__link['title']; ?></span>
                                </a>
                                <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
            <?php
        }

        if ($trust__condition) {
            ?>
            <div class="about-section">
                <div class="container-main">
                    <h2 class="h2 type-1 scroll sanimate"><?= $trust__title; ?></h2>

                    <?php
                        if (!empty($trust__images)) {
                            ?>
                            <div class="pics-wrap  ">
                                <?php
                                    foreach ($trust__images as $index => $item) {
                                        ?>
                                        <div class="wrap-images <?= $index === 0 ? 'wrap-big-pic' : 'wrap-pic-small '; ?> scroll sanimate">
                                            <?= wp_get_attachment_image($item['image_id'], 'full'); ?>
                                        </div>
                                        <?php
                                    }
                                ?>
                            </div>
                            <?php
                        }

                        if (!empty($trust__reasons)) {
                            ?>
                            <div class="about-flex ">
                                <?php
                                    foreach ($trust__reasons as $index => $item) {
                                        $number = $index + 1;

                                        if ($index === 0) {
                                            $number = '';
                                        }
                                        ?>
                                        <div class="about-flex-item positioned<?= $number; ?> scroll sanimate ">
                                            <p class="about-flex-head"><?= $item['title']; ?></p>

                                            <div class="normal-text  "><?= $item['description']; ?></div>
                                        </div>
                                        <?php
                                    }
                                ?>
                            </div>
                            <?php
                        }

                        if (!empty($trust__link)) {
                            ?>
                            <a href="<?= $trust__link['url']; ?>" class="button side-button scroll scroll-to-form only-desctop" <?php getLinkAttrs($trust__link); ?>>
                                <span><?= $trust__link['title']; ?></span>
                            </a>
                            <?php
                        }
                    ?>

                    <div class="wrap-images wrap-big-pic side-photo only-desctop scroll sanimate">
                        <?= wp_get_attachment_image($trust__image_right, 'full'); ?>
                    </div>
                </div>
            </div>
            <?php
        }

        if ($result__condition) {
            ?>
            <div class="slider-block scroll sanimate ">
                <h2 class="h2 type-1 scroll  sanimate "><?= $result__title; ?></h2>

                <?php
                    if (!empty($result__images)) {
                        ?>
                        <div class="wrap-carousel">
                            <div class="owl-carousel owl-theme">
                                <?php
                                    foreach ($result__images as $item) {
                                        ?>
                                        <div class="item">
                                            <div class="owl-images">
                                                <?= wp_get_attachment_image($item['image_id'], 'full'); ?>

                                                <p class="slideName" <?= !empty($item['link']) ? 'data-link="'.esc_url($item['link']['url']).'"' : ''; ?>><?= $item['title']; ?></p>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                ?>
                            </div>

                            <div class="btn-wrap">
                                <button class="prev-btn">
                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 5.99071L1.14067 6M5.65867 1L1 6L5.65867 11" stroke="black"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>

                                <button class="next-btn">
                                    <svg width="47" height="37" viewBox="0 0 47 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.999999 18.4675L45.4725 18.5M28.53 0.999997L46 18.5L28.53 36" stroke="black"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <a class="small-gold"></a>
                        <?php
                    }
                ?>
            </div>
            <?php
        }

        if ($questions__condition) {
            ?>
            <div class="tabs-block">
                <div class="container-main">
                    <div class="two-sides">
                        <div class="texts-side scroll sanimate">
                            <h2 class="h2 type-1"><?= $questions__title; ?></h2>

                            <?php
                                if ($questions__description) {
                                    ?>
                                    <div class="strange-big-text"><?= $questions__description; ?></div>
                                    <?php
                                }
                            ?>
                        </div>

                        <?php
                            if (!empty($questions__repeater)) {
                                ?>
                                <div class="tabs-side">
                                    <div class="accordeon-block ">
                                        <?php
                                            foreach ($questions__repeater as $index => $item) {
                                                $delay = ($index + 1) * 100;
                                                ?>
                                                <div class="line scroll sanimate" data-delay="<?= $delay; ?>ms">
                                                    <div class="accordion"><?= $item['title'] ?></div>

                                                    <div class="panel"><?= $item['description']; ?></div>
                                                </div>
                                                <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                                <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
            <?php
        }

        if ($wave__condition) {
            get_template_part('partials/block-wave-gallery', '', [
                'repeater' => $wave__repeater,
            ]);
        }

        if ($contact__condition) {
            ?>
            <div class="forms-block form-section">
                <div class="container-main">
                    <div class="two-sides">
                        <div class="texts-side scroll sanimate">
                            <h2 class="h2 type-1"><?= $contact__title; ?></h2>

                            <?php
                                if ($contact__description) {
                                    ?>
                                    <div class="strange-big-text"><?= $contact__description; ?></div>
                                    <?php
                                }
                            ?>
                        </div>

                        <div class="tabs-side">
                            <?= do_shortcode('[contact-form-7 id="' . $contact__form_id . '"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    ?>
</div>
<?php
get_footer();
