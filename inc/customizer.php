<?php
/**
 * piroll Theme Customizer
 *
 * @package piroll
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function piroll_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';



	//Website information
  $wp_customize->add_section( 'website_information_section' , array(
    'title'      => __( 'WEBSITE INFORMATION Section', 'piroll' ),
    'priority'   => 30,
  ) );
	//Website name
  $wp_customize->add_setting( 'site_name' , array(
    'default'   => 'Piroll',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'site_name', array(
    'label'      => __( 'Site Name', 'piroll' ),
    'section'    => 'website_information_section',
    'settings'   => 'site_name',
  ) ) );
  //Website logo
  $wp_customize->add_setting( 'site_logo' , array(
    'default'   => '',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'site_logo', array(
    'label'      => __( 'Site Logo', 'piroll' ),
    'section'    => 'website_information_section',
    'settings'   => 'site_logo',
  ) ) );


  //HEADER SECTION
  $wp_customize->add_section( 'header_section' , array(
    'title'      => __( 'HEADER Section', 'piroll' ),
    'priority'   => 30,
  ) );
  //Header Nav Links color
  $wp_customize->add_setting( 'header_nav_links_color' , array(
    'default'   => '#191919',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_nav_links_color', array(
    'label'      => __( 'Navigation links color', 'piroll' ),
    'section'    => 'header_section',
    'settings'   => 'header_nav_links_color',
  ) ) );
  //Header Nav Links hover color
  $wp_customize->add_setting( 'header_nav_links_hover_color' , array(
    'default'   => '#10c9c3',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_nav_links_hover_color', array(
    'label'      => __( 'Navigation links hover color', 'piroll' ),
    'section'    => 'header_section',
    'settings'   => 'header_nav_links_hover_color',
  ) ) );
  //Header Nav Link 1 text
  $wp_customize->add_setting( 'header_nav_link1_text' , array(
    'default'   => 'Home',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_nav_link1_text', array(
    'label'      => __( 'Navigation link 1 text', 'piroll' ),
    'section'    => 'header_section',
    'settings'   => 'header_nav_link1_text',
  ) ) );
  //Header Nav Link 2 text
  $wp_customize->add_setting( 'header_nav_link2_text' , array(
    'default'   => 'About',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_nav_link2_text', array(
    'label'      => __( 'Navigation link 2 text', 'piroll' ),
    'section'    => 'header_section',
    'settings'   => 'header_nav_link2_text',
  ) ) );
  //Header Nav Link 3 text
  $wp_customize->add_setting( 'header_nav_link3_text' , array(
    'default'   => 'Work',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_nav_link3_text', array(
    'label'      => __( 'Navigation link 3 text', 'piroll' ),
    'section'    => 'header_section',
    'settings'   => 'header_nav_link3_text',
  ) ) );
  //Header Nav Link 4 text
  $wp_customize->add_setting( 'header_nav_link4_text' , array(
    'default'   => 'Process',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_nav_link4_text', array(
    'label'      => __( 'Navigation link 4 text', 'piroll' ),
    'section'    => 'header_section',
    'settings'   => 'header_nav_link4_text',
  ) ) );
  //Header Nav Link 5 text
  $wp_customize->add_setting( 'header_nav_link5_text' , array(
    'default'   => 'Services',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_nav_link5_text', array(
    'label'      => __( 'Navigation link 5 text', 'piroll' ),
    'section'    => 'header_section',
    'settings'   => 'header_nav_link5_text',
  ) ) );
  //Header Nav Link 6 text
  $wp_customize->add_setting( 'header_nav_link6_text' , array(
    'default'   => 'Testimonials',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_nav_link6_text', array(
    'label'      => __( 'Navigation link 6 text', 'piroll' ),
    'section'    => 'header_section',
    'settings'   => 'header_nav_link6_text',
  ) ) );
  //Header Nav Link 7 text
  $wp_customize->add_setting( 'header_nav_link7_text' , array(
    'default'   => 'Contact',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_nav_link7_text', array(
    'label'      => __( 'Navigation link 7 text', 'piroll' ),
    'section'    => 'header_section',
    'settings'   => 'header_nav_link7_text',
  ) ) );



  //TOP BANNER SECTION
  $wp_customize->add_section( 'top_banner_section' , array(
    'title'      => __( 'TOP BANNER Section', 'piroll' ),
    'priority'   => 30,
  ) );
  //Banner Background
  $wp_customize->add_setting( 'top_banner_bg' , array(
    'default'   => '',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'top_banner_bg', array(
    'label'      => __( 'Background Image', 'piroll' ),
    'section'    => 'top_banner_section',
    'settings'   => 'top_banner_bg',
  ) ) );
  //Banner Title
  $wp_customize->add_setting( 'top_banner_title' , array(
    'default'   => 'We Design and Develop',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_banner_title', array(
    'label'      => __( 'Title', 'piroll' ),
    'section'    => 'top_banner_section',
    'settings'   => 'top_banner_title',
  ) ) );
  //Banner Text
  $wp_customize->add_setting( 'top_banner_text' , array(
    'default'   => 'We are a new design studio based in USA. We have over
    20 years of combined experience, and know a thing or two
    about designing websites and mobile apps.',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_banner_text', array(
    'label'      => __( 'Text', 'piroll' ),
    'section'    => 'top_banner_section',
    'settings'   => 'top_banner_text',
  ) ) );
  //Banner Button Text
  $wp_customize->add_setting( 'top_banner_btn_text' , array(
    'default'   => 'Contact Us',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_banner_btn_text', array(
    'label'      => __( 'Button Text', 'piroll' ),
    'section'    => 'top_banner_section',
    'settings'   => 'top_banner_btn_text',
  ) ) );
  //Banner Button Text Color
  $wp_customize->add_setting( 'top_banner_btn_text_color' , array(
    'default'   => '#ffffff',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_banner_btn_text_color', array(
    'label'      => __( 'Button Text Color', 'piroll' ),
    'section'    => 'top_banner_section',
    'settings'   => 'top_banner_btn_text_color',
  ) ) );
  //Banner Button Background
  $wp_customize->add_setting( 'top_banner_btn_bg' , array(
    'default'   => '#10c9c3',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_banner_btn_bg', array(
    'label'      => __( 'Button Background', 'piroll' ),
    'section'    => 'top_banner_section',
    'settings'   => 'top_banner_btn_bg',
  ) ) );



}
add_action( 'customize_register', 'piroll_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function piroll_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function piroll_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function piroll_customize_preview_js() {
	wp_enqueue_script( 'piroll-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'piroll_customize_preview_js' );
