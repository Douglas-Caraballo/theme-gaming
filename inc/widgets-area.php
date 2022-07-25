<?php
function gaming_doug_widgets_areas(){
    register_sidebar(array(
        'name' => __('Gaming Doug Footer','gaming-doug'),
        'id' => 'footer',
        'description' => __('Widget area to define widgest into footer', 'gaming-doug'),
        'before_widget'=>'<div class="%2$s">',
        'after_widget'=>'</div>'
    ));

    register_sidebar( array(
        'name' => __('Gaming Doug Home','gaming-doug'),
        'id' => 'home',
        'description' => __('Widget area to define widgest into home', 'gaming-doug'),
        'before_widget'=>'<div class="%2$s">',
        'after_widget'=>'</div>'
    ));

    register_sidebar( array(
        'name' => __('Gaming Doug Single','gaming-doug'),
        'id' => 'single-page',
        'description' => __('Widget area to define widgest into the single page', 'gaming-doug'),
        'before_widget'=>'<div class="%2$s">',
        'after_widget'=>'</div>'
    ));
}

add_action('widgets_init', 'gaming_doug_widgets_areas');