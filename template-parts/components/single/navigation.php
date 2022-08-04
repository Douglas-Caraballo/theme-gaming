<?php

    //Getting Next Adjacent Post
    $nextPost = get_adjacent_post(false, '', false,);
    //Getting Previous Adjacent Post
    $previousPost = get_adjacent_post();
?>

<div class="wrapper-navigation-single">
    <?php if(! empty($nextPost)): ?>
        <div class="navigation-post navigation-next">
            <h5 class="navigation-post__others"><?php _e( 'Next Article', 'gaming-doug' ) ?></h5>
            <?php gaming_doug_navigation_post_thumb($nextPost->ID); ?>
        </div>
    <?php endif; ?>
    <?php if(!empty($previousPost)): ?>
        <div class="navigation-post navigation-previous">
            <h5 class="navigation-post__others"><?php _e( 'Previous Article', 'gaming-doug' ) ?></h5>
            <?php gaming_doug_navigation_post_thumb($previousPost->ID);?>
        </div>
    <?php endif; ?>
</div>

