<?php
    $args = [
        'post_type' => 'esports',
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => 4
    ];

    $queryEsports = new WP_Query($args);
?>

<div class="wrapper-esport-section">
    <span class="esport-section-title"><h2>Esport</h2></span>
    <div class="esport-section">
        <?php if($queryEsports -> have_posts()) : ?>
            <?php while($queryEsports -> have_posts()):
                $queryEsports -> the_post();
            ?>
                <article class="esport-section__item">
                    <figure class="esport-section__item__figure">
                        <a href="<?= esc_url(get_the_permalink($queryEsports->id)); ?>">
                            <?php the_post_thumbnail('',['class'=>'home-image']); ?>
                        </a>
                    </figure>
                    <div class="esport-section__item__info">
                        <span class="esport-section__item__info__wrapper-title"><?php the_title('<h3><a class="esport-section__item__info__title" href='.get_the_permalink().'>','</a></h3>'); ?></span>
                        <div class="esport-section__item__info__excerp"><?php the_excerpt();?></div>
                        <a class="esport-section__item__info__more" href="<?= esc_url(get_the_permalink($queryEsports->id)); ?>"> Leer Mas >> </a>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif ; ?>
    </div>
</div>