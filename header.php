<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width"/>
	<?php wp_head(); ?>
</head>
<body <?php body_class('sans-serif'); ?>>
<div id="wrapper" class="hfeed">
    <header id="header" class="w-100 flex flex-column flex-row-ns items-center pa3">
        <div id="branding" class="w-20 flex-grow-0">
            <div id="site-title">
                <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                if ( has_custom_logo() ) {
	                ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                         title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>"
                         rel="home" class="w3 dib v-mid"><img src="<?=esc_url( $logo[0] )?>" alt="<?=get_bloginfo( 'name' )?>"></a>
                        <div id="site-description" class="f7 dib"><?php bloginfo( 'description' ); ?></div>
                    <?php
                } else {
	               ?><h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                            title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>"
                            rel="home"><?=get_bloginfo( 'name' )?></a></h1><?php
                }
                ?>
            </div>
        </div>
        <nav id="menu" class="w-100 flex-grow-1 flex justify-end-ns items-center">
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            <div id="search"><?php get_search_form(); ?></div>
        </nav>
    </header>
    <div id="container">