<?php
/**
 * The theme header.
 * 
 * @package bootstrap-basic4
 */

$container_class = apply_filters('bootstrap_basic4_container_class', 'container');
if (!is_scalar($container_class) || empty($container_class)) {
    $container_class = 'container';
}
?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>
    <head>

    <!-- import police -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allison&family=Karla&family=Montserrat&family=Roboto+Mono&family=Space+Grotesk&family=Montserrat:wght@700&display=swap" rel="stylesheet">

        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-D102W2EJ6V"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-D102W2EJ6V');
    </script>  
  
  <!-- axeptio cookies -->
  <script>
    void 0 === window._axcb && (window._axcb = []);
    window._axcb.push(function(axeptio) {
     axeptio.on("cookies:complete", function(choices) {
    
     })
    })
</script>  
        <!--WordPress head-->
        <?php wp_head(); ?> 
        <!--end WordPress head-->
    </head>
    <body <?php body_class(); ?>>
        <?php
        if (function_exists('wp_body_open')) {
            wp_body_open();
        }
        ?> 
        <header class="page-header page-header-sitebrand-topbar">
            <!-- <div class="main-navigation"> -->
                <div class="container page-container">
                    <div class="row">   
                        <div class="col-12 col-md-6">
                            <h2 class="site-title-heading">
                                <a href="<?php echo get_home_url(); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"> <?php bloginfo('name'); ?></a><span>.</span>fr
                            </h2>
                            <div id="slogan">
                                <?php bloginfo('description'); ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 d-flex justify-content-sm-start justify-content-lg-end align-items-end sidebar-header">
                            <?php dynamic_sidebar('header-sidebar'); ?>
                        </div>  
                    </div>
                    
                    <div class="main-navigation">
                        <div class="mymenu row ">
                            <div class="col-3 col-sm-6 col-xl-9  main-menu-header">
                                <nav id="site-navigation" class="main-navigation navbar navbar-expand-xl">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="true" aria-label="Toggle navigation">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30" focusable="false">
                                        <title>Menu</title>
                                            <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"></path>
                                        </svg>
                                    </button>
                                    <?php
                                    wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu',
                                    'menu_class' => 'nav','container_class' => 'collapse navbar-collapse',
                                    'container_id' => 'navbarContent', 'walker' =>  new \BootstrapBasic4\BootstrapBasic4WalkerNavMenu));
                                    ?>
                                </nav>
                            </div>
                            <div class="col-9 col-sm-6 col-xl-3 d-flex justify-content-end">
                                <a target="_blank" href="https://calendly.com/sortie-de-crise/prendre-rendez-vous?text_color=28275a&primary_color=30b556">
                                    <div class="button_prendre_rdv">
                                        Je prends rendez-vous 
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- menu sticky ! duplication code avec au dessus notament le menu et le bouton de prise rdv-->
                    <div class="main-navigation sticky-nav h-sticky">
                        <div class="mymenu row ">
                            
                            <div class="col-12 col-sm-5 col-xl-3">
                                <h2 class="site-title-heading-sticky">
                                    <a href="<?php echo get_home_url(); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" ><?php bloginfo('name'); ?></a><span>.</span>fr
                                </h2>
                            </div>
                            <div class="col-6 col-sm-3 col-xl-6  main-menu-header">
                                <nav id="site-navigation" class="main-navigation navbar navbar-expand-xl">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="true" aria-label="Toggle navigation">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30" focusable="false">
                                        <title>Menu</title>
                                            <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"></path>
                                        </svg>
                                    </button>
                                    <?php
                                    wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu',
                                    'menu_class' => 'nav','container_class' => 'collapse navbar-collapse',
                                    'container_id' => 'navbarContent', 'walker' =>  new \BootstrapBasic4\BootstrapBasic4WalkerNavMenu));
                                    ?>
                                </nav>
                            </div>
                            <div class="col-6 col-sm-4 col-xl-3 d-flex justify-content-end sticky-menu-margin-right">
                                    <a target="_blank" href="https://calendly.com/sortie-de-crise/prendre-rendez-vous?text_color=28275a&primary_color=30b556">
                                        <div class="button_prendre_rdv">
                                            Je prends rendez-vous 
                                        </div>
                                    </a>
                                    <div class="search-sticky">
                                        <form id='searchform' method='get' action=<?php esc_url( home_url( '/' ) )?>>
                                            <input type='text' class='search-field' name='s' placeholder='Rechercher' value=<?php get_search_query()?>>
                                            <input class='submit' value='' type='submit'>
                                        </form>
                                    </div>
                            </div>
                            
                        </div>
                    </div>

                </div>    
            <!-- </div> --><!-- main-navigation -->
        </header><!--.page-header-->
        
        

            <div id="content" class="site-content container">
        