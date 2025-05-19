<?php
get_header();
?>
<section class="inner-page-content">
    <div class="article-wraps">
        <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();

                    get_template_part('partials/preview', 'post');
                }

                get_template_part('partials/global/pagination');
            }
            else {
                ?>
                <p class="article-wraps__nothing"><?= pll__('Постів не знайдено'); ?></p>
                <?php
            }
        ?>
    </div>
</section>
<?php
get_footer();
