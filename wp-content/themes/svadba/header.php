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

$page_id = get_the_ID();

if (is_home() && !is_front_page()) {
    $page_id = get_option('page_for_posts');
}

$main_classes = '';
$main_data_bg = '';

$header__is_dark = get_field('header__is_dark', $page_id);

if (is_page_template('page_templates/home.php')) {
    $main_classes = 'main-screen dark';
}
elseif (is_singular('post')) {
    $main_classes = 'white secondary-screen blog-article-page';
}
else {
    $main_classes = 'secondary-screen';

    if ($header__is_dark) {
        $main_classes .= ' dark';
    }
    else {
        $main_classes .= ' white';
    }

    $main_data_bg = 'data-bg="'.wp_get_attachment_image_url(get_field('header__bg_id', $page_id), 'full').'"';
}
?>
<?php wp_body_open(); ?>

<div class="<?= $main_classes; ?>" <?= $main_data_bg; ?>>
    <header  class="header">
        <div class="top-nav">
            <a href="<?= get_home_url(); ?>" class="logo-place sanimate fadeInLeft" data-delay="100ms" data-duration="300ms" data-timing="ease-in-out">
                <?php
                    if (is_page_template('page_templates/home.php') || $header__is_dark) {
                        echo wp_get_attachment_image($common__header_logo_dark, 'full');
                    }
                    else {
                        echo wp_get_attachment_image($common__header_logo_light, 'full');
                    }
                ?>
            </a>

            <?php
                if (!empty($common__header_contacts)) {
                    ?>
                    <div class="icons-set icons-set-top">
                        <?php
                            foreach ($common__header_contacts as $item) {
                                ?>
                                <a href="<?= $item['link']['url']; ?>" class="icon sanimate fadeInLeft" data-delay="200ms" <?php getLinkAttrs($item['link']); ?>>
                                    <?= wp_get_attachment_image($item['image'], 'full'); ?>
                                </a>
                                <?php
                            }
                        ?>
                    </div>
                    <?php
                }
            ?>

            <div class="burger-trigger sanimate fadeInLeft" data-delay="300ms">
                <span class="burger-line burger-line-1"></span>
                <span class="burger-line burger-line-2"></span>
                <span class="burger-line burger-line-3"></span>
            </div>
        </div>
    </header>

    <div class="box">
        <?php
            if (has_nav_menu('header-menu')) {
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'menu_class' => 'header__menu',
                    'container' => '',
                    'add_li_class' => 'menu_item',
                    'add_a_class' => 'menu_item-link',
                    'depth' => 1,
                ));
            }
        ?>

        <div class="contacts-box">
            <?php
                if (!empty($common__header_contacts)) {
                    ?>
                    <ul class="contacts-list">
                        <?php
                            foreach ($common__header_contacts as $item) {
                                ?>
                                <li class="contacts-list_phones only-mob">
                                    <a href="<?= $item['link']['url']; ?>" class="contacts-list_item" <?php getLinkAttrs($item['link']); ?>>
                                        <span class="image-span">
                                           <?= wp_get_attachment_image($item['image'], 'full'); ?>
                                        </span>

                                        <span class="only-mob"><?= $item['link']['title']; ?></span>
                                    </a>
                                </li>
                                <?php
                            }
                        ?>
                    </ul>
                    <?php
                }

                if (!empty($common__header_social)) {
                    ?>
                    <ul class="meet-us">
                        <?php
                            foreach ($common__header_social as $item) {
                                ?>
                                <li class="meet-us-item sanimate fadeInLeft " data-delay="200ms">
                                    <a href="<?= $item['link']['url']; ?>" <?php getLinkAttrs($item['link']); ?>>
                                        <?= wp_get_attachment_image($item['image'], 'full'); ?>
                                    </a>
                                </li>
                                <?php
                            }
                        ?>
                    </ul>
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
    </div>

    <?php
        if (is_page_template('page_templates/home.php')) {
            ?>
            <div class="wrap-main-pic scroll sanimate" data-delay="100ms">
                <?= wp_get_attachment_image(get_field('common__image_main', $page_id), 'full'); ?>
            </div>
            <div class="main-logo">
                <?= wp_get_attachment_image(get_field('common__image_logo', $page_id), 'full'); ?>
            </div>
            <?php
        }
        else {
            ?>
            <h1 class="h1 sanimate fadeInUp  "><?= get_field('header__title', $page_id); ?></h1>
            <?php
        }
    ?>
</div>

<main>