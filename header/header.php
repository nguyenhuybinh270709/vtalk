<?php
/**
 * Header template
 * @package k2_kinhdo
 */

/* ============================================================
   Desktop Walker — depth 0: top bar | depth 1: dropdown | depth 2: fly-out
   ============================================================ */
if ( ! class_exists( 'VTALK_Nav_Walker' ) ) :
class VTALK_Nav_Walker extends Walker_Nav_Menu {

    function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
        $item         = $data_object;
        $has_children = in_array( 'menu-item-has-children', $item->classes );
        $is_active    = in_array( 'current-menu-item', $item->classes ) || in_array( 'current-menu-ancestor', $item->classes );
        $target       = $item->target ? 'target="' . esc_attr( $item->target ) . '"' : '';

        if ( $depth === 0 ) {
            $base_color = $is_active ? '#fe2d2d' : '#ffffff';
            $hover_js   = "this.style.color='#fe2d2d'";
            $out_js     = "this.style.color='{$base_color}'";
            $output .= '<li class="vtalk-nav-item" style="position:relative;display:flex;align-items:center">';
            $output .= '<a href="' . esc_url( $item->url ) . '" ' . $target
                     . ' style="display:flex;align-items:center;gap:4px;color:#ffffff;font-size:16px;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;white-space:nowrap;text-decoration:none;transition:color .2s"'
                     . ' onmouseover="' . $hover_js . '"'
                     . ' onmouseout="' . $out_js . '">'
                     . '<span>' . esc_html( $item->title ) . '</span>';
            if ( $has_children ) {
                $output .= '<svg class="nav-chevron" style="width:12px;height:12px;opacity:0.5;flex-shrink:0;margin-left:2px" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>';
            }
            $output .= '</a>';

        } elseif ( $depth === 1 ) {
            $output .= '<li class="vtalk-sub-item relative group/sub">';
            $link_class = implode( ' ', [
                'text-white flex items-center justify-between gap-3 px-4 py-2.5',
                'text-[16px] font-medium rounded-lg',
                'transition-colors duration-150',
                $has_children ? 'text-white font-semibold uppercase cursor-default' : '',
                ! $has_children ? 'text-white hover:text-[#fe2d2d] hover:bg-white/[0.06]' : '',
            ] );
            if ( $has_children ) {
                // Section header — not a link
                $output .= '<div class="' . $link_class . '" style="cursor:pointer;">'
                         . '<span>' . esc_html( $item->title ) . '</span>'
                         . '<svg class="w-3 h-3 opacity-40 shrink-0 transition-transform duration-200 desktop-chevron" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>'
                         . '</div>';
            } else {
                $output .= '<a href="' . esc_url( $item->url ) . '" class="' . $link_class . '" ' . $target . '>'
                         . '<span>' . esc_html( $item->title ) . '</span>'
                         . '</a>';
            }

        } elseif ( $depth === 2 ) {
            $output .= '<li class="vtalk-sub2-item">';
            $link_class = implode( ' ', array(
                'block px-4 py-2.5 text-[16px] rounded-md',
                'transition-colors duration-150',
                $is_active ? 'text-white hover:text-[#fe2d2d] hover:bg-white/[0.06]' : ''
            ));
            $output .= '<a href="' . esc_url( $item->url ) . '" '
                . 'class="' . $link_class . '" '
                . $target . '>'
                . esc_html( $item->title )
                . '</a>';
        }
    }

    function start_lvl( &$output, $depth = 0, $args = null ) {
        if ( $depth === 0 ) {
            $output .= '<ul class="vtalk-dropdown" style="'
                     . 'position:absolute;
                        top:calc(100% + 6px);
                        left:50%;
                        min-width:260px;
                        max-height:420px;
                        overflow-y:auto;
                        overflow-x:hidden;
                        padding:10px;
                        background:#16203a;
                        border:1px solid rgba(255,255,255,.08);
                        border-radius:10px;
                        box-shadow:0 20px 40px rgba(0,0,0,.5);
                        opacity:0;
                        visibility:hidden;
                        transform:translateX(-50%) translateY(4px);
                        transition:opacity .18s,transform .18s,visibility .18s;
                        z-index:99999;'
                     . 'background:#16203a;border:1px solid rgba(255,255,255,0.08);border-radius:8px;'
                     . 'box-shadow:0 20px 40px rgba(0,0,0,0.5);'
                     . 'opacity:0;visibility:hidden;'
                     . 'transition:opacity 0.18s,transform 0.18s,visibility 0.18s;'
                     . 'z-index:99999">';
        } elseif ( $depth === 1 ) {
            $output .= '<ul class="vtalk-submenu" style="border-top:1px solid rgba(255,255,255,0.06);margin:2px 0 4px">';
        }
    }

    function end_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '</ul>';
    }

    function end_el( &$output, $data_object, $depth = 0, $args = null ) {
        $output .= '</li>';
    }
}
endif;


/* ============================================================
   Mobile Walker — accordion, all depths
   ============================================================ */
if ( ! class_exists( 'VTALK_Mobile_Nav_Walker' ) ) :
class VTALK_Mobile_Nav_Walker extends Walker_Nav_Menu {
    function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
        $item         = $data_object;
        $has_children = in_array( 'menu-item-has-children', $item->classes );
        $target       = $item->target ? 'target="' . esc_attr( $item->target ) . '"' : '';

        $output .= '<li style="background:transparent;border-bottom:1px solid rgba(255,255,255,.06)">';

        $padding = $depth === 0
            ? 'padding-left:20px;padding-right:20px;'
            : ( $depth === 1
                ? 'padding-left:32px;padding-right:20px;'
                : 'padding-left:44px;padding-right:20px;' );

        if ( $has_children ) {

            $output .= '<button class="mobile-accordion-btn" '
                . 'style="'
                . $padding
                . 'display:flex;align-items:center;justify-content:space-between;'
                . 'width:100%;height:56px;'
                . 'background:transparent;border:none;outline:none;'
                . 'font-size:16px;font-weight:600;letter-spacing:.05em;'
                . 'text-transform:uppercase;color:#ffffff;cursor:pointer;">'
                . '<span>' . esc_html( $item->title ) . '</span>'
                . '<svg class="accordion-icon" style="width:18px;height:18px;opacity:.5;transition:transform .2s;flex-shrink:0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">'
                . '<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>'
                . '</svg>'
                . '</button>';

        } else {

            $output .= '<a href="' . esc_url( $item->url ) . '" '
                . $target
                . ' style="'
                . $padding
                . 'display:flex;align-items:center;'
                . 'height:56px;'
                . 'font-size:16px;'
                . 'font-weight:500;'
                . 'letter-spacing:.05em;'
                . 'text-transform:uppercase;'
                . 'color:#ffffff;'
                . 'text-decoration:none;'
                . 'transition:all .2s;"'
                . ' onmouseover="this.style.color=\'#fe2d2d\';this.style.background=\'rgba(255,255,255,.08)\'"'
                . ' onmouseout="this.style.color=\'#ffffff\';this.style.background=\'transparent\'">'
                . esc_html( $item->title )
                . '</a>';

        }
    }

    function start_lvl( &$output, $depth = 0, $args = null ) {
        $bg = $depth === 0 ? '#131c30' : '#0f1626';
        $output .= '<ul class="mobile-submenu hidden" style="background:' . $bg . ';margin:0;padding:0;">';
    }

    function end_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '</ul>';
    }

    function end_el( &$output, $data_object, $depth = 0, $args = null ) {
        $output .= '</li>';
    }
}
endif;

/* ============================================================
   Logo
   ============================================================ */
$logo_url    = get_template_directory_uri() . '/assets/images/logo.png';
$option_logo = get_field( 'option_logo', 'option' );
if ( $option_logo ) $logo_url = $option_logo;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        important: true,
      };
    </script>

    <style>
        #masthead .vtalk-dropdown,
        #mobile-menu {
            overflow-y: auto !important;
            overflow-x: hidden !important;
            -ms-overflow-style: none !important;
            scrollbar-width: none !important;
        }

        #masthead .vtalk-dropdown::-webkit-scrollbar,
        #mobile-menu::-webkit-scrollbar {
            width: 0 !important;
            height: 0 !important;
            display: none !important;
            background: transparent !important;
        }

        #masthead .vtalk-dropdown a {
            color: #fff !important;
            transition: all .2s ease;
            border-radius: 8px;
        }

        #masthead .vtalk-dropdown a:hover {
            color: #fe2d2d !important;
            background: rgba(255,255,255,.08);
        }

        #masthead .vtalk-dropdown::-webkit-scrollbar {
            display: none;
        }
        
        #masthead {
            display: block !important;
            position: fixed !important;
            top: 0 !important; left: 0 !important; right: 0 !important;
            width: 100% !important;
            max-width: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            z-index: 99999 !important;
            background-color: #1a2540 !important;
            overflow: visible !important;
            visibility: visible !important;
            opacity: 1 !important;
        }

        #masthead button, #masthead a {
            -webkit-tap-highlight-color: transparent;
        }

        #masthead > nav { display: flex !important; }
        @media (max-width: 1023px) {
            #masthead > nav { display: none !important; }
        }

        #masthead .vtalk-mobile-bar { display: none !important; }
        @media (max-width: 1023px) {
            #masthead .vtalk-mobile-bar { display: flex !important; }
        }

        #masthead nav li { overflow: visible !important; }

        #masthead ul, #masthead li {
            list-style: none !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        #page.site { padding-top: 72px !important; }
        @media (min-width: 1024px) {
            #page.site { padding-top: 80px !important; }
        }
    </style>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">

    <header id="masthead">

        <nav class="flex items-center justify-between px-10 xl:px-16 h-20 border-b border-white/[0.08] relative">

            <div class="flex items-center gap-6 xl:gap-10">
                <?php wp_nav_menu([
                    'theme_location' => 'primary_left',
                    'container'      => '',
                    'menu_class'     => 'flex items-center gap-6 xl:gap-10',
                    'walker'         => new VTALK_Nav_Walker(),
                ]); ?>
            </div>

            <a href="<?php echo home_url( '/' ); ?>" class="relative z-50 self-start pt-4">
                <img
                    src="<?php echo esc_url( $logo_url ); ?>"
                    alt="<?php bloginfo( 'name' ); ?>"
                    style="height:120px;width:auto;object-fit:contain;display:block;max-width:none;"
                />
            </a>

            <div class="flex items-center gap-6 xl:gap-10">
                <?php wp_nav_menu([
                    'theme_location' => 'primary_right',
                    'container'      => '',
                    'menu_class'     => 'flex items-center gap-6 xl:gap-10',
                    'walker'         => new VTALK_Nav_Walker(),
                ]); ?>
            </div>

        </nav>

        <div class="vtalk-mobile-bar flex items-center justify-between px-4 h-[72px]">
            <a href="<?php echo home_url( '/' ); ?>" class="flex items-center h-full">
                <img
                    src="<?php echo esc_url( $logo_url ); ?>"
                    alt="<?php bloginfo( 'name' ); ?>"
                    class="h-10 w-auto object-contain drop-shadow-[0_0_10px_rgba(234,88,12,0.45)]"
                />
            </a>

            <button id="mobile-menu-btn" aria-label="Toggle menu"
                    class="text-white/80 hover:text-white p-2 rounded transition-colors bg-transparent focus:bg-transparent active:bg-transparent">
                <svg id="icon-open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

        </div>

        <div id="mobile-menu"
             class="hidden bg-[#16203a] border-t border-white/[0.08] max-h-[calc(100vh-72px)] overflow-y-auto">
            <?php wp_nav_menu([
                'theme_location' => 'primary_left',
                'container'      => '',
                'menu_class'     => '',
                'walker'         => new VTALK_Mobile_Nav_Walker(),
            ]); ?>
            <?php wp_nav_menu([
                'theme_location' => 'primary_right',
                'container'      => '',
                'menu_class'     => '',
                'walker'         => new VTALK_Mobile_Nav_Walker(),
            ]); ?>
        </div>

    </header>
    <div id="content" class="site-content">

<script>
document.addEventListener('DOMContentLoaded', function () {

    const btn       = document.getElementById('mobile-menu-btn');
    const drawer    = document.getElementById('mobile-menu');
    const iconOpen  = document.getElementById('icon-open');
    const iconClose = document.getElementById('icon-close');

    if (btn) {
        btn.addEventListener('click', function () {
            const isOpen = !drawer.classList.contains('hidden');
            drawer.classList.toggle('hidden', isOpen);
            iconOpen.classList.toggle('hidden', !isOpen);
            iconClose.classList.toggle('hidden', isOpen);
        });
    }

    document.querySelectorAll('.vtalk-nav-item').forEach(function (li) {
        const dropdown = li.querySelector('.vtalk-dropdown');
        if (!dropdown) return;
        li.addEventListener('mouseenter', function () {
            dropdown.style.opacity    = '1';
            dropdown.style.visibility = 'visible';
            dropdown.style.transform  = 'translateX(-50%) translateY(0)';
        });
        li.addEventListener('mouseleave', function () {
            dropdown.style.opacity    = '0';
            dropdown.style.visibility = 'hidden';
            dropdown.style.transform  = 'translateX(-50%) translateY(4px)';
        });
    });

    function initSubmenuStyles() {
        document.querySelectorAll('.vtalk-sub-item .vtalk-submenu').forEach(function (submenu) {
            if (window.innerWidth >= 1024) {
                submenu.style.position = 'relative';
                submenu.style.width = '100%';
                submenu.style.background = 'rgba(255,255,255,0.04)';
                submenu.style.border = 'none';
                submenu.style.borderRadius = '6px';
                submenu.style.padding = '4px 0';
                submenu.style.marginTop = '4px';
                submenu.style.display = 'none';
                submenu.style.opacity = '';
                submenu.style.visibility = '';
                submenu.style.transition = '';
            } else {
                submenu.style.position = '';
                submenu.style.width = '';
                submenu.style.background = '';
                submenu.style.border = '';
                submenu.style.borderRadius = '';
                submenu.style.padding = '';
                submenu.style.marginTop = '';
                submenu.style.display = 'none';
                submenu.style.opacity = '';
                submenu.style.visibility = '';
                submenu.style.transition = '';
            }
        });
    }
    initSubmenuStyles();
    window.addEventListener('resize', initSubmenuStyles);

    document.querySelectorAll('.vtalk-sub-item').forEach(function (li) {
        const submenu = li.querySelector('.vtalk-submenu');
        const chevron = li.querySelector('.desktop-chevron');
        if (!submenu) return;

        li.addEventListener('mouseenter', function () {
            if (window.innerWidth >= 1024) {
                submenu.style.display = 'block';
                if (chevron) chevron.style.transform = 'rotate(180deg)';
            }
        });

        li.addEventListener('mouseleave', function () {
            if (window.innerWidth >= 1024) {
                submenu.style.display = 'none';
                if (chevron) chevron.style.transform = '';
            }
        });

        const trigger = li.querySelector('.text-white.flex.items-center');
        if (trigger) {
            trigger.addEventListener('click', function (e) {
                if (window.innerWidth < 1024) {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    const isOpen = submenu.style.display === 'block';
                    const parentUl = this.closest('ul');
                    
                    if (parentUl) {
                        parentUl.querySelectorAll('.vtalk-submenu').forEach(sub => {
                            sub.style.display = 'none';
                        });
                        parentUl.querySelectorAll('.desktop-chevron').forEach(chv => {
                            chv.style.transform = '';
                        });
                    }

                    if (!isOpen) {
                        submenu.style.display = 'block';
                        if (chevron) chevron.style.transform = 'rotate(180deg)';
                    }
                }
            });
        }
    });

    document.querySelectorAll('.mobile-accordion-btn').forEach(function (trigger) {
        trigger.addEventListener('click', function () {
            const sub  = this.closest('li').querySelector(':scope > .mobile-submenu');
            const icon = this.querySelector('.accordion-icon');
            if (!sub) return;
            const isOpen = !sub.classList.contains('hidden');

            const parent = this.closest('li');
            const siblings = parent.parentElement.querySelectorAll(':scope > li > .mobile-submenu');
            const sibIcons = parent.parentElement.querySelectorAll(':scope > li > .mobile-accordion-btn .accordion-icon');
            siblings.forEach(el => el.classList.add('hidden'));
            sibIcons.forEach(el => el.classList.remove('rotate-180'));

            if (!isOpen) {
                sub.classList.remove('hidden');
                icon.classList.add('rotate-180');
            }
        });
    });

});
</script>