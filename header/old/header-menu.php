<?php
/**
 * Template part for displaying the primary menu of the site
 */

if ( has_nav_menu( 'primary' ) )
{
    wp_nav_menu( array(
        'theme_location' => 'primary',
        'container'  => '',
        'menu_class' => 'primary-menu',
    ) );
}
else
{
    printf(
        '<ul class="primary-menu-not-set"><li><a href="%1$s">%2$s</a></li></ul>',
        esc_url( admin_url( 'nav-menus.php' ) ),
        esc_html__( 'Primary menu is not set, please location to "primary".', 'k2_kinhdo' )
    );
}