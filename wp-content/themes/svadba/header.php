<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
$common__header_logo_light = get_field('common__header_logo', 'option');
$common__header_logo_dark = get_field('common__header_logo_dark', 'option');
$common__header_social = get_field('common__header_social', 'option');
$common__header_contacts = get_field('common__contacts', 'option');
?>
<?php wp_body_open(); ?>
<header class="header">
    <div class="header__container">
        <div class="header-top">
            <a href="<?= get_home_url(); ?>" class="header-logo">
                <?= wp_get_attachment_image($common__header_logo_light, 'full', null, array('class' => 'header-logo__image header-logo__image--light')); ?>

                <?= wp_get_attachment_image($common__header_logo_dark, 'full', null, array('class' => 'header-logo__image header-logo__image--dark')); ?>
            </a>

            <?php
                if (!empty($common__header_contacts) || function_exists('pll_the_languages')) {
                    ?>
                    <div class="header-top__right">
                        <?php
                            if (!empty($common__header_contacts)) {
                                ?>
                                <div class="header-contacts">
                                    <?php
                                        foreach ($common__header_contacts as $item) {
                                            ?>
                                            <a href="<?= $item['link']['url']; ?>" class="header-contacts-item" <?php getLinkAttrs($item['link']); ?>>
                                                <?= wp_get_attachment_image($item['image'], 'full'); ?>
                                            </a>
                                            <?php
                                        }
                                    ?>
                                </div>
                                <?php
                            }

                            if (function_exists('pll_the_languages')) {
                                ?>
                                <div class="dropdown sanimate fadeInLeft show1" data-delay="200ms">
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
                        ?>
                    </div>
                    <?php
                }
            ?>
        </div>

        <?php
            if (!empty($common__header_social) || has_nav_menu('header-menu')) {
                ?>
                <div class="header-bottom">
                    <?php
                        if (has_nav_menu('header-menu')) {
                            wp_nav_menu(array(
                                'theme_location' => 'header-menu',
                                'menu_class' => 'header__menu header__menu--pc',
                                'container' => '',
                                'depth' => 1,
                            ));
                        }

                        if (!empty($common__header_social)) {
                            ?>
                            <div class="header-social">
                                <?php
                                    foreach ($common__header_social as $item) {
                                        ?>
                                        <a href="<?= $item['link']['url']; ?>" class="header-social-item" <?php getLinkAttrs($item['link']); ?>>
                                            <?= wp_get_attachment_image($item['image'], 'full'); ?>
                                        </a>
                                        <?php
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
                </div>
                <?php
            }
        ?>
    </div>
</header>

<?php
if (is_active_sidebar('mobile-sidebar')) {
    ?>
    <div class="box header__mobile">
        <?php dynamic_sidebar('mobile-sidebar'); ?>
    </div>
    <?php
}
?>

<main>

<?php
if (!is_singular('post')) {
    get_template_part('partials/global/hero');
}