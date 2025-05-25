<?php
global $wp_query;

$total   = $wp_query->max_num_pages;
$current = max(1, get_query_var('paged'));

if ($total > 1) {
    ?>
    <div class="pagination">
        <?php
            echo paginate_links(array(
                'total' => $total,
                'current' => $current,
                'type'      => 'list',
                'end_size'  => 3,
                'mid_size'  => 3,
                'format' => 'page/%#%/',
                'prev_text' => '
                    <svg width="33" height="26" viewBox="0 0 33 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M32 13.0223L1.36339 13M13.0349 25L0.999999 13L13.0349 1" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                ',
                'next_text' => '
                    <svg width="47" height="37" viewBox="0 0 47 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.999999 18.4675L45.4725 18.5M28.53 0.999997L46 18.5L28.53 36" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                ',
            ));
        ?>
    </div>
    <?php
}