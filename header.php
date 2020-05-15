<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package piroll
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        .header_nav-link {
            color: <?php echo get_theme_mod('header_nav_links_color'); ?>;
        }
        .header_nav-link:hover {
            color: <?php echo get_theme_mod('header_nav_links_hover_color'); ?>;
        }
        .header_nav-link:active {
            color: <?php echo get_theme_mod('header_nav_links_color'); ?>;
        }
        
    </style>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <header class="header">
        <div class="header_container">
            <div class="header_left">
                <a href="<?php echo home_url(); ?>" class="header_logoLink"><img src="<?php echo get_theme_mod('site_logo'); ?>" alt="Site Logo"></a>
            </div>
            <div class="header_right">
                <div class="header_nav">
                    <?php if(get_theme_mod('header_nav_link1_text') !== '') { ?>
                    <a href="#topBanner" class="header_nav-link"><?php echo get_theme_mod('header_nav_link1_text'); ?></a>
                    <?php } ?>
                    <?php if(get_theme_mod('header_nav_link2_text') !== '') { ?>
                    <a href="#about" class="header_nav-link"><?php echo get_theme_mod('header_nav_link2_text'); ?></a>
                    <?php } ?>
                    <?php if(get_theme_mod('header_nav_link3_text') !== '') { ?>
                    <a href="#" class="header_nav-link"><?php echo get_theme_mod('header_nav_link3_text'); ?></a>
                    <?php } ?>
                    <?php if(get_theme_mod('header_nav_link4_text') !== '') { ?>
                    <a href="#" class="header_nav-link"><?php echo get_theme_mod('header_nav_link4_text'); ?></a>
                    <?php } ?>
                    <?php if(get_theme_mod('header_nav_link5_text') !== '') { ?>
                    <a href="#" class="header_nav-link"><?php echo get_theme_mod('header_nav_link5_text'); ?></a>
                    <?php } ?>
                    <?php if(get_theme_mod('header_nav_link6_text') !== '') { ?>
                    <a href="#" class="header_nav-link"><?php echo get_theme_mod('header_nav_link6_text'); ?></a>
                    <?php } ?>
                    <?php if(get_theme_mod('header_nav_link7_text') !== '') { ?>
                    <a href="#" class="header_nav-link"><?php echo get_theme_mod('header_nav_link7_text'); ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </header>
