<?php
    get_template_part('template-parts/components/home/element','featured');
    get_template_part('template-parts/components/home/element','streaming');
    get_template_part('template-parts/components/home/element','tournament');
?>
<div class="home-news">
    <?php
        get_template_part('template-parts/components/home/element','news');
        get_template_part('template-parts/components/home/element-widget-area','home');
    ?>
</div>
<div>
    <?php get_template_part('template-parts/components/home/element','esport'); ?>
</div>