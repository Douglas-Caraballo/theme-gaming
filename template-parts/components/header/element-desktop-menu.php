<div>
    <div>
        <?php
            $args = [
                'menu'=> 'Menu 1',
                'menu_class'=> 'nav-menu-desktop',
                'container'=> ''
            ];

            wp_nav_menu($args);
        ?>
        <ul>
            <li>
                <?php get_template_part('template-parts/components/header/element-search', 'desktop'); ?>
            </li>
        </ul>
    </div>
</div>