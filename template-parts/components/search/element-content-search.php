<article>
    <?php the_title('<h3><a href='.get_the_permalink().'>','</a></h3>'); ?>
    <figure>
        <?php the_post_thumbnail('', ['class'=>'search-thumbnail']); ?>
    </figure>
    <div>
        <div>
            <span><h5><?php the_date('D m, Y'); ?></h5></span>
            <span><h5><?php the_author(); ?></h5></span>
        </div>
        <div>
            <?php the_excerpt(); ?>
        </div>
        <div>
            <a href="<?= esc_url(get_permalink()); ?>">Ver</a>
        </div>
        <span><h6><?php gaming_doug_entry_footer();?></h6></span>
    </div>
</article>