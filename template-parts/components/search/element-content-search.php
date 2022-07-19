<article class="search-item">
    <?php the_title('<h3 class="search-item__title"><a href='.get_the_permalink().'>','</a></h3>'); ?>
    <figure class="search-item__figure">
        <?php the_post_thumbnail('', ['class'=>'search-thumbnail']); ?>
    </figure>
    <div class="search-item__content">
        <div class="search-item__content__date">
            <span><h5><?php the_date('D m, Y'); ?></h5></span>
            <span><h5><?php the_author(); ?></h5></span>
        </div>
        <div class="search-item__content__excerpt">
            <?php the_excerpt(); ?>
        </div>
        <div class="search-item__content__redirect">
            <a href="<?= esc_url(get_permalink()); ?>">Ver</a>
        </div>
        <span class="search-item__content__footer"><h6><?php gaming_doug_entry_footer();?></h6></span>
    </div>
</article>