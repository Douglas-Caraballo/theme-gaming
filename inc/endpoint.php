<?php

/**
 * /wp-json/post/posts
 */

function new_endpoint(){
    register_rest_route('post/', 'posts', array(
        'methods' => WP_REST_Server::READABLE,
        'callback' => 'get_news'
    ));
}
add_action('rest_api_init', 'new_endpoint');