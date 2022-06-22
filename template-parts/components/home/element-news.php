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
                            <h5>
                                <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
                                    <?php the_author();?>
                                </a>
                            </h5>
                        </span>
                        &#47;
                        <span><?php the_date('M d, Y','<h5>','</h5>'); ?></span>
                    </div>
                    <div class="news-item__read-more">
                        <?php the_excerpt(); ?>
                        <a href="<?= esc_url(get_the_permalink($queryPost->id)); ?>"> Leer Mas >> </a>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    ver mas
</div>
