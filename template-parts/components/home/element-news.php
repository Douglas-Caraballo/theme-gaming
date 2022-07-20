<?php
    $args= [
        'post_type' => 'post',
        'post_status' => 'publish',
        'order' => 'DESC',
        'paged' => 1,
        'posts_per_page' => 4
    ];

    $queryPost = new WP_Query($args);
?>
<div class="wrapper-news">
    <div class="content-news">
        <?php if($queryPost -> have_posts()): ?>
            <?php
                while($queryPost -> have_posts()):
                    $queryPost -> the_post();
            ?>
                <article class="news-item">
                    <figure class="news-item__figure">
                        <a href="<?= esc_url(get_the_permalink($queryPost->id)); ?>">
                            <?php the_post_thumbnail('', ['class'=> 'home-image']); ?>
                        </a>
                    </figure>
                    <div class="news-item__wrapper-title">
                        <?php the_title('<h3 class="news-item__wrapper-title__title"><a href='.get_the_permalink() .'>','</a></h3>'); ?>
                    </div>
                    <div class="news-item__detalist">
                        <span>
                            <h5 class="news-item__detalist__author"><?php the_author();?></h5>
                        </span>
                        &#47;
                        <span><h5 class="news-item__detalist__date"><?php the_time('M d, Y'); ?></h5></span>
                    </div>
                    <div class="news-item__read-more">
                        <div class="news-item__read-more__excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                        <a class="news-item__read-more__more" href="<?= esc_url(get_the_permalink($queryPost->id)); ?>"> Leer Mas >> </a>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <?php get_template_part('template-parts/components/reusable/element-load','more'); ?>
</div>
