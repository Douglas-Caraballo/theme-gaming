<aside class="aside-menu aside-desactivate" id="menu-mobile">
    <div class="aside-menu__wrapper">
        <span class="aside-menu__wrapper__close" id="close-menu">&times</span>
        <div class="aside-menu__wrapper__mobile-menu">
            <?php
                $args=[
                    'menu'=>'Menu 1',
                    'menu_class'=> 'aside-menu__wrapper__mobile-menu__list',
                    'container' => ''
                ];
                wp_nav_menu($args);
            ?>
            <div class='aside-menu__wrapper__mobile-menu__list'>
                <?php get_template_part('template-parts/components/reusable/element', 'search'); ?>
            </div>
        </div>
    </div>
</aside>