<?php
get_header();

$header__bg_id = get_field('header__bg_id');
$header__date = get_field('header__date');

$prev_post = get_previous_post();
$next_post = get_next_post();

get_template_part('partials/global/breadcrumbs');
?>
<section class="blog-one">
    <div class="header-picture " data-delay="100ms">
        <?= wp_get_attachment_image($header__bg_id, 'full', null, ['data-delay' => '100ms', 'class' => 'blog-header scroll sanimate FadeInUp']); ?>

        <h1 class="article-name scroll sanimate FadeInUp " data-delay="100ms"><?php the_title(); ?></h1>

        <?php
            if ($header__date) {
                ?>
                <div class="round-block scroll sanimate FadeInUp " data-delay="400ms"></div>

                <div class="date scroll sanimate FadeInUp" data-delay="400ms"><?= $header__date; ?></div>
                <?php
            }
        ?>
    </div>
</section>

<article>
    <div class="content-blog">
        <div class="article-name-fixed">
            <p class="gold-text gold scroll sanimate FadeInUp" data-delay="200ms"><?php the_title(); ?></p>
        </div>

        <div><?php the_content(); ?></div>

        <?php
            if (is_a($prev_post, 'WP_Post') || is_a($next_post, 'WP_Post')) {
                ?>
                <div class="nav-block">
                    <?php
                        if (is_a($prev_post, 'WP_Post')) {
                            ?>
                            <div class="prev-block">
                                <a href="<?= get_permalink($prev_post->ID); ?>" class="prev">
                                    <svg width="33" height="26" viewBox="0 0 33 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M32 13.0223L1.36339 13M13.0349 25L0.999999 13L13.0349 1" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                    <span class="name"><?= pll__('Попередня'); ?></span>
                                </a>
                            </div>
                            <?php
                        }

                        if (is_a($next_post, 'WP_Post')) {
                            ?>
                            <div class="next-block">
                                <a href="<?= get_permalink($next_post->ID); ?>" class="next">
                                    <span class="name"><?= pll__('Наступна'); ?></span>

                                    <svg width="47" height="37" viewBox="0 0 47 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.999999 18.4675L45.4725 18.5M28.53 0.999997L46 18.5L28.53 36" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                            <?php
                        }
                    ?>
                </div>
                <?php
            }
        ?>
    </div>
</article>
<?php
get_footer();