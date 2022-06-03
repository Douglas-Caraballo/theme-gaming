<?php
    $args = [
        'post_type' => 'post',
        'post_status' => 'publish',
        'post_per_page' => '4',
        'tax_query' => [
            array(
                'taxonomy' => 'section',
                'field' => 'slug',
                'terms' => 'destacado'
            ),
        ]
    ];

    $query_featured = new WP_Query($args);
?>

<div class="slider-container">
    <button class="slider-button button-left" id="button-left">
        &#60;
    </button>
    <div class="wrapper-featured" id="slider">
        <?php if($query_featured -> have_posts()): ?>
            <?php
                while($query_featured -> have_posts()):
                    $query_featured -> the_post();
            ?>
            <article class="featured-item">
                <figure class="featured-item__figure">
                    <?php the_post_thumbnail('',['class'=>'featured-ing']);?>
                </figure>
                <div class="featured-item__details">
                    <?php the_title('<h3 class="featured-item__details__title"><a href='.get_the_permalink().'>','</a></h3>') ?>
                    <span class="featured-item__details__redirect"><h6><a href="<?= esc_url(get_permalink($query_featured->id));?>">Ver post</a></h6></span>
                </div>
            </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <button class="slider-button button-right" id="button-right">
        &#62;
    </button>
</div>