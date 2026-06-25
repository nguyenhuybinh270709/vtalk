<?php
/**
 * The header for our theme.
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package k2_kinhdo
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    
    <style>
    	.sha-header .site-header .menu-left {
    		padding-left: 0 !important;
            margin: 0 !important;
            @media ( max-width: 991px ) {
            	margin: 0 !important;
        	}
		}
        .container {
  			max-width: none !important;
		}
        .site {
       		padding-top: 0 !important;
		}
        <style>
@media (max-width: 1199px) {
    /* 1. Triệt tiêu hoàn toàn sự tồn tại của menu desktop ngầm và các item con */
    .menu-left, .sha-navs, .primary-menu, #menu-menu-left, .menu-left * { 
        display: none !important; 
        width: 0 !important;
        max-width: 0 !important;
    }

    /* 2. Ép header-middle và container bọc ngoài phải fit đúng 100% viewport */
    .header-middle, .site-header, #masthead {
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;
        right: 0 !important;
        width: 100% !important;
        max-width: 100% !important;
        min-width: 0 !important;
        margin: 0 !important;
        overflow: hidden !important;
        box-sizing: border-box !important;
    }

    /* 3. BẮT BUỘC: Bóp nghẹt thằng container - Kẻ trực tiếp đẩy bung kích thước dòng */
    .header-middle .container,
    .site-header .container {
        display: flex !important;
        justify-content: space-between !important;
        align-items: center !important;
        width: 100% !important;
        max-width: 100% !important;
        min-width: 0 !important;
        margin: 0 !important;
        padding: 0 15px !important;
        box-sizing: border-box !important;
    }
}
</style>
    </style>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">

	<div class="sha-header" style="position: relative !important; z-index: 99999 !important; margin: 0 !important;">
		<?php
	    
	    get_template_part('template-parts/header-layout');
	   ?>
	</div>  
	    
	<div id="content" class="site-content">