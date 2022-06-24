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

function get_news($request){
    $per_page = $request -> get_param('per_page') ? $request -> get_param('per_page'):4;
    $paged = $request -> get_param('paged') ? $request -> get_param('paged'):1;
    $args = [
        'post_type' => 'post',
        'orderby' => 'date',
        'order' => 'DESC',
        'paged' => $paged,
        'posts_per_page' => $per_page
    ];

    $loadMoreQuery = new WP_Query($args);
    $posts = [];
    $arrayPosts = [];

    if($loadMoreQuery -> have_posts()){
        foreach($loadMoreQuery -> posts as $post):
            $id = $post -> ID;
            $user_id = $post -> post_author;
            array_push($posts,[
                'title' => get_the_title($id),
                'permalink' => get_the_permalink($id),
                'thumbnail' => get_the_post_thumbnail($id, '', ['class'=> 'home-image']),
                'excerpt' => get_the_excerpt($id),
                'author' => get_the_author_meta('nickname', $user_id),
                'date' => get_the_date( 'M d, Y', $id)
            ]);
        endforeach;
    }
    $arrayPosts['posts'] = $posts;
    wp_reset_postdata();
    return $arrayPosts;
}