<?php

function getPosts() {

    $args = array (
        'post_type'  => 'post',
        'fields' => 'ids',
        'orderby' => 'date',
        'order' => 'ASC',
        'post_status' => 'publish',
        'suppress_filters' => true
    );

    return new WP_Query( $args );
}
