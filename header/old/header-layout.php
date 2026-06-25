<?php
/**
 * Template part for displaying default header layout
 */
?>
<header id="masthead">
    <div class="header-middle">
    <div class="container">
        <div class="site-header" style="margin: 0 !important;">
            <div class="menu-left sha-navs">
                <?php 
                    wp_nav_menu( array(
                        'theme_location' => 'primary_left',
                        'container'  => '',
                        'menu_class' => 'primary-menu',
                    ) );
                ?>
            </div>
            <div class="logo">
                <?php 
                    $logo_url = get_template_directory_uri() .'/assets/images/logo.png';
                    $option_logo = get_field('option_logo','option');
                    if( $option_logo ) {
                        $logo_url = $option_logo;
                    }
                ?>
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo $logo_url; ?>" alt="">
                </a>
            </div>
            
            <div class="menu-right sha-navs">
                <?php 
                    wp_nav_menu( array(
                        'theme_location' => 'primary_right',
                        'container'  => '',
                        'menu_class' => 'primary-menu',
                    ) );
                ?>
            </div>    

            <div class="menu-mobile">
                <?php 
                    wp_nav_menu( array(
                        'theme_location' => 'primary_left',
                        'container'  => '',
                        'menu_class' => 'primary-menu',
                    ) );
                    wp_nav_menu( array(
                        'theme_location' => 'primary_right',
                        'container'  => '',
                        'menu_class' => 'primary-menu',
                    ) );
                ?>
            </div>  

            <div class="header_menu hidden-md hidden-lg">
                <span class="btn-nav-mobile">
                    <span></span>
                </span>
            </div>   
        </div>
    </div>
    </div>
</header>