<?php

function getLinkAttrs (array $link) : void {
    if (!empty($link['target']) && $link['target'] === '_blank')
        echo 'rel="nofollow noopener noindex" target="_blank"';
}

/**
 *
 *
 * @param int|false|null $post_id
 */
function getPostThumbnail($post_id): void {
    $title = pll__('Немає зображення');

    if (!empty($post_id)) {
        $title = get_the_title($post_id);
    }

    if (!empty($post_id) && get_the_post_thumbnail($post_id)) {
        echo get_the_post_thumbnail($post_id, 'full');
    } else {
        ?>
        <img src="<?= esc_url(get_template_directory_uri()); ?>/dist/front/images/no_image_placeholder.jpg" alt="<?= esc_attr($title); ?>">
        <?php
    }
}

function getPhoneString (string $string) : string {
    return preg_replace('/\D/', '', $string);
}

function remove_wp_version_strings(string $src) : string {
    if (strpos( $src, 'ver='))
        $src = remove_query_arg( 'ver', $src );

    return $src;
}