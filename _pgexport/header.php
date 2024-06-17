<!DOCTYPE html> 
<!--  Converted from HTML to WordPress with Pinegrow Web Editor. https://pinegrow.com  -->
<html <?php language_attributes(); ?>> 
    <head> 
        <meta charset="<?php bloginfo( 'charset' ); ?>"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">                   
        <!-- js -->
        <!-- owl-carousel -->
        <!-- fontawesome -->                  
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <meta content="Pinegrow Web Editor" name="generator">
        <?php wp_head(); ?>
    </head>     
    <body class="<?php echo implode(' ', get_body_class()); ?>">
        <?php if( function_exists( 'wp_body_open' ) ) wp_body_open(); ?>
        <header>
            <nav class="w-full lg:container z-20 top-0 left-0  max-w-[90vw] flex flex-wrap justify-between items-center relative mx-auto py-8">
                <a class="logo" href="<?php echo esc_url( home_url() ); ?>"> <?php if( get_theme_mod( 'custom_logo' ) ) : ?><img src="<?php echo PG_Image::getUrl( get_theme_mod( 'custom_logo', esc_url( get_template_directory_uri() . '/assets/images/logo.png' ) ), 'full' ) ?>" class="h-14 w-full object-cover"><?php endif; ?> </a>
                <ul class="navigation">
                    <input type="checkbox" id="check"/><span class="menu lg:container"> <div class="w-full z-20 top-0 left-0  max-w-[90vw] flex  justify-between items-center relative mx-auto py-8"><a class="logo" href="<?php echo esc_url( home_url() ); ?>"> <?php if( get_theme_mod( 'custom_logo' ) ) : ?><img src="<?php echo PG_Image::getUrl( get_theme_mod( 'custom_logo', esc_url( get_template_directory_uri() . '/assets/images/logo.png' ) ), 'full' ) ?>" class="h-14 w-full object-cover"><?php endif; ?> </a> 
                            <label for="check" class="close-menu"> 
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close-icon.svg"/>
                            </label>                             
                        </div> <?php if ( has_nav_menu( 'primary' ) ) : ?><?php
                                PG_Smart_Walker_Nav_Menu::init();
                                PG_Smart_Walker_Nav_Menu::$options['template'] = '<li class="header-menu-item {CLASSES}" id="{ID}">
                                                            <a {ATTRS}>{TITLE}</a>
                                                        </li>';
                                wp_nav_menu( array(
                                    'container' => '',
                                    'theme_location' => 'primary',
                                    'items_wrap' => '%3$s',
                                    'walker' => new PG_Smart_Walker_Nav_Menu()
                            ) ); ?><?php endif; ?> </span>
                </ul>
                <label for="check" class="open-menu">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/view-list.svg"/>
                </label>
            </nav>
        </header>
        <main class="main">