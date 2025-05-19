<?php
get_header();

$error__description = get_field('error__description', 'option');
?>
<section class="wrap-information">
    <p class="page-404-name sanimate fadeInUp">404</p>

    <p class="sorry sanimate fadeInUp"  data-delay="200ms"><?= pll__('Нажаль, такої сторінки не знайдено.'); ?></p>

    <?php
        if ($error__description) {
            ?>
            <div class="alternate sanimate fadeInUp"  data-delay="400ms"><?= $error__description; ?></div>
            <?php
        }
    ?>

    <a href="<?= get_home_url(); ?>" class="button form-btn sanimate fadeInUp"  data-delay="600ms"><?= pll__('На головну'); ?></a>
</section>
<?php
get_footer();