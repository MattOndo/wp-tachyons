<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width"/>
	<?php wp_head(); ?>
</head>
<body <?php body_class('sans-serif'); ?>>
<div id="wrapper" class="hfeed mw8">
    <header id="header" class="w-100 flex flex-column flex-row-ns items-center">
        <div id="branding" class="w-auto flex-grow-0">
            <div id="site-title">
				<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) {
					echo '<h1>';
				} ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                   title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>"
                   rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
				<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) {
					echo '</h1>';
				} ?>
            </div>
            <div id="site-description" class="f7"><?php bloginfo( 'description' ); ?></div>
        </div>
        <nav id="menu" class="w-100 flex-grow-1 flex justify-end-ns items-center">
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            <div id="search"><?php get_search_form(); ?></div>
        </nav>
    </header>
    <div id="container">