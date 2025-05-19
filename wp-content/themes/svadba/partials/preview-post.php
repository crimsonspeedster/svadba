<article class="article scroll sanimate fadeInUp">
    <h2>
        <a href="<?php the_permalink(); ?>" class="h2"><?php the_title(); ?></a>
    </h2>

    <div class="date"><?= get_the_date('d.m.Y'); ?></div>

    <a href="<?php the_permalink(); ?>">
        <?php getPostThumbnail(get_the_ID()); ?>
    </a>
</article>