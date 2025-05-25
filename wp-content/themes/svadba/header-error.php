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

$main_data_bg = 'data-bg="'.wp_get_attachment_image_url(get_field('error__header_bg', 'option'), 'full').'"';
?>

<?php wp_body_open(); ?>
<main class="for-404">
    <div class="secondary-screen s-404" <?= $main_data_bg; ?>>
        <header id="header" class="header">
            <div class="top-nav">
                <a href="<?= get_home_url(); ?>" class="logo-place sanimate fadeInLeft" data-delay="100ms" data-duration="300ms" data-timing="ease-in-out">
                    <?php
                        echo wp_get_attachment_image($common__header_logo_light, 'full');
                    ?>
                </a>
            </div>
        </header>
