<?php
/*
Template Name: Contacts page
post_type: page
*/

get_header();

$contacts__repeater = get_field('contacts__repeater');

$map__iframe = get_field('map__iframe');

$form__title = get_field('form__title');
$form__description = get_field('form__description');
$form__image = get_field('form__image');
$form__form_id = get_field('form__form_id');
?>
<div class="contacts-page">
    <p class="gold gold-text-second scroll sanimate" data-delay="200ms"><?= pll__('Швидше, до вашої <br> ідеальної <br> весіллі!'); ?></p>

    <div class="contactpage-top">
        <?php
            get_template_part('partials/social-block', '', [
                'repeater' => $contacts__repeater,
            ]);
        ?>
    </div>

    <div class="map-block sanimate scroll fadeInLUp" data-delay="100ms" data-duration="600ms">
        <?= $map__iframe; ?>
    </div>

    <div class="forms-block form-section">
        <div class="container-main  bottom-form-place">
            <p class="form-bottom-h2 sanimate scroll fadeInLUp"><?= $form__title; ?></p>

            <div class="two-sides">
                <div class="form-bottom">
                    <?php
                        if ($form__description) {
                            ?>
                            <p class="strange-big-text only-mobile"><?= $form__description; ?></p>
                            <?php
                        }

                        echo do_shortcode('[contact-form-7 id="' . $form__form_id . '"]');
                    ?>
                </div>

                <div class="cont-form-deco">
                    <?php
                        if ($form__description) {
                            ?>
                            <p class="strange-big-text only-desktop sanimate scroll fadeInLUp"><?= $form__description; ?></p>
                            <?php
                        }
                    ?>

                    <div class="pics-cont-wrap">
                        <div class="cont-im cont-im1 sanimate scroll fadeInLUp">
                            <?= wp_get_attachment_image($form__image, 'full'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
