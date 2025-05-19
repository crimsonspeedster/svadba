<?php
$page_id = get_the_ID();

if (is_home() && !is_front_page()) {
    $page_id = get_option('page_for_posts');
}

$header__bg_id = get_field('header__bg_id', $page_id);
$header__title = get_field('header__title', $page_id);

if (is_404()) {
    $header__bg_id = get_field('error__header_bg', 'option');
}
?>
<section class="hero">
    <div class="hero__background">
        <?= wp_get_attachment_image($header__bg_id, 'full'); ?>
    </div>

    <div
        class="hero__container"
        <?= !$header__title ? 'style="display: none;"' : ''; ?>
    >
        <h1 class="hero__title"><?= $header__title ?: get_the_title(); ?></h1>
    </div>
</section>