<?php

function gaming_doug_navigation_post_thumb($post_id){?>
    <figure class="navigation-thumbnail">
        <?php $pageThumb = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), ''); ?>
        <?php if(! empty($pageThumb[0])) : ?>
            <a href="<?php echo get_the_permalink($post_id); ?>">
                <img class="navigation-thumbnail__image" src="<?php echo $pageThumb[0]; ?>" alt="">
            </a>
        <?php endif; ?>
    </figure>
<?php
}