<?php

add_shortcode( 'download-file', 'download_file' );

function download_file() {

    $postsArr = getPosts();

    $out = '';

    foreach ($postsArr->posts as $itemID) :

        $url = get_permalink($itemID);
        $title = get_the_title($itemID);

        $out .= '<a href="'. $url .'" title="'. $title .'">'. $title .'</a>';

    endforeach;

    return '<div style="display: flex; flex-direction: column">'. $out .'</div>';

}
