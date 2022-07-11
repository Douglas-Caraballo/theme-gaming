<?php if ( have_posts() ) : ?>

<header class="page-header">
    <?php
    the_archive_title( '<h1 class="page-title">', '</h1>' );
    the_archive_description( '<div class="archive-description">', '</div>' );
    ?>
</header><!-- .page-header -->
<div class="wrapper-archive">
    <?php
        /* Start the Loop */
        while ( have_posts() ) :
            the_post();

            /*
            * Include the Post-Type-specific template for the content.
            * If you want to override this in a child theme, then include a file
            * called content-___.php (where ___ is the Post Type name) and that will be used instead.
            */
            get_template_part('template-parts/components/archive/element', 'archive');

        endwhile;

        gaming_doug_numeric_pagination();

        else :

        get_template_part( 'template-parts/content', 'none' );

        endif;
    ?>
</div>