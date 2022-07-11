<article class="archive-item">
    <figure class="archive-item__figure">
        <a href="<?= esc_url(get_permalink()) ?>">
            <?php the_post_thumbnail('', ['class'=> 'archive-thumbnail']); ?>
        </a>
    </figure>
    <div>
        <span><?php the_title('<h3><a href='.get_the_permalink().'>','</a></h3>'); ?></span>
        <div>
            <span><h5><a href="<?= esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php the_author();?></a></h5></span>
            <span><h5><?php echo get_the_date('M d, Y'); ?></h5></span>
        </div>
        <div>
            <?php the_excerpt(); ?>
            <a href="<?= esc_url(get_permalink()); ?>">Ver</a>
        </div>
    </div>
</article>