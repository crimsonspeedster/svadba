<?php
get_header();
?>
<article>
    <div class="content">
        <?php the_content(); ?>
    </div>

    <?php get_template_part('partials/block-wave-gallery'); ?>
</article>
<?php
get_footer();