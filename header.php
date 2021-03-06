<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Belmont
 */

?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <?php wp_head(); 

        
?>
    </head>




    <body <?php body_class(); ?>>



        <div id="page" class="site">
            <a class="skip-link screen-reader-text" href="#main">
                <?php esc_html_e( 'Skip to content', 'belmont' ); ?>
            </a>


            <?php if ( get_header_image() ) { ?>

                <header id="masthead" class="site-header" style="background-image: url(<?php header_image(); ?>); width: <?php echo get_custom_header()->width; ?>; height:<?php echo get_custom_header()->height; ?>" role="banner">

                    <?php } else { ?>
                        <header id="masthead" class="site-header" role="banner">

                            <?php } ?>

                                <div class="site_container">

                                    <div class="site-branding">
                                        <?php
			if ( is_front_page() && is_home() ) : ?>
                                            <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                                            <?php else : ?>
                                                <p class="site-title">
                                                   
                                                        <?php bloginfo( 'name' ); ?>
                                                
                                                </p>
                                                <?php
			endif;

			 ?>
                                    </div>
                                    <!-- .site-branding -->

                                  

                                </div>

                        </header>



                        <div class="brown_paper"></div>
                        <!-- #masthead -->

                     