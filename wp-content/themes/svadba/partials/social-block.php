<?php
if (empty($args))
    return;

$repeater = $args['repeater'];

if (!empty($repeater)) {
    ?>
    <ul class="footer-info">
        <?php
            foreach ($repeater as $index => $item) {
                ?>
                <li class="sanimate scroll fadeInLUp" data-delay="100ms" data-duration="300ms">
                    <?php
                        if ($item['is_link']) {
                            ?>
                                <a href="<?= $item['link']['url']; ?>" <?php getLinkAttrs($item['link']); ?>>
                            <?php
                            }
                            else {
                                echo '<p>';
                            }
                        ?>

                        <span class="icon">
                            <?php echo wp_get_attachment_image($item['icon'], 'full'); ?>
                        </span>

                        <?php
                            if ($item['is_link']) {
                                echo $item['link']['title'];
                                echo '</a>';
                            }
                            else {
                                echo $item['title'];
                                echo '</p>';
                            }
                        ?>
                </li>
                <?php
            }
        ?>
    </ul>
    <?php
}