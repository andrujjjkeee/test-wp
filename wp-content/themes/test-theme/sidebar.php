<?php

    $id = get_the_ID();
    $id_category = wp_get_post_categories( $id );

    $args = array(
            'post_type'     => 'post',
            'posts_per_page'=>  3,
            'orderby'       => 'date',
            'order'         => 'DESC',
            'fields'        => 'ids',
            'category'      => $id_category,
            'post_status'   => 'publish',
            'exclude'	    => $id,
            'suppress_filters' => false
        );

        $posts = get_posts( $args );
?>

<aside style="display: flex;flex-direction: column">

    <?php if( $posts ): ?>

        <?php foreach ( $posts as $row ): ?>

            <a href="<?= get_permalink($row); ?>"><?= get_the_title($row); ?></a>

        <?php endforeach; ?>

    <?php endif; ?>
</aside>
