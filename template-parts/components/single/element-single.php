<?php
    $categoryList = get_the_category_list(esc_html__( ', ',  'gaming-doug' ));
    $termsList = get_the_term_list( get_the_ID(), 'cat_esports', '', ', ');
?>

<article class="single">
    <figure class="single__figure">
        <?php the_post_thumbnail( '', ['class'=>'single-thumbnail'] ); ?>
    </figure>
    <div class="single__information">
        <h5><span>
            <a href="<?= esc_url(get_author_posts_url( get_the_author_meta('ID'))); ?>">
                <?php the_author(); ?>
            </a>
        </span></h5>
        <h5><span>
            <?php the_date('M d, Y'); ?>
        </span></h5>
        <h5>
            <?php
                if($categoryList){
                    printf('<span>'. esc_html__('%1$s' , 'gaming-doug') .'</span>', $categoryList);
                }
                if($termsList){
                    printf('<span>'. esc_html__('%1$s' , 'gaming-doug') .'</span>', $termsList);
                }
            ?>
        </h5>
    </div>
    <?php the_title('<h1 class="single__title">','</h1>'); ?>
    <div class="single__content">
        <?php the_content(); ?>
    </div>

</article>