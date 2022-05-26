<div class="header-menu">
    <div class="menu-nav">
        <?php
            $args = [
                'menu'=> 'Menu 1',
                'menu_class'=> 'nav-menu-desktop',
                'container'=> ''
            ];

            wp_nav_menu($args);
        ?>
        <ul class="nav-menu-desktop">
            <li>
                <?php get_template_part('template-parts/components/header/element-search', 'desktop'); ?>
            </li>
        </ul>
    </div>
</div>