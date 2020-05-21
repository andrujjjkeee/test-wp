<?php
function my_scripts_enqueue() {
    wp_deregister_script('jquery');

    wp_register_style( 'bootstrap-css', '://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css', false, false, 'all' );
    wp_register_style('ionicons', '://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css', false, false, 'all');
    wp_register_script('jquery', '://code.jquery.com/jquery-3.5.1.min.js', array(), false, false);
    wp_register_script('ionicons-js', '//unpkg.com/ionicons@5.0.0/dist/ionicons.js' );
    wp_register_script( 'bootstrap-js', '://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array('jquery'), false, true );

    wp_enqueue_style( 'bootstrap-css' );
    wp_enqueue_style('ionicons');
    wp_enqueue_script('jquery');
    wp_enqueue_script('ionicons-js');
    wp_enqueue_script( 'bootstrap-js' );
}
add_action( 'wp_enqueue_scripts', 'my_scripts_enqueue' );
