<div id="my-search" class="overlay">
    <span class="overlay__close-search">&times</span>
    <div class="overlay__content">
        <?php get_template_part('template-parts/components/reusable/element', 'search'); ?>
    </div>
</div>

<button class="open-search">
    <img src="<?= get_template_directory_uri().'/dist/assets/img/search.png' ?>" alt="buscar">
</button>