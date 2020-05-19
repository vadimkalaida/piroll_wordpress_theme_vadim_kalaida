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
  
  //ABOUT SECTION
  $wp_customize->add_section( 'about_section' , array(
    'title'      => __( 'ABOUT SECTION', 'piroll' ),
    'priority'   => 30,
  ) );
  //About Background
  $wp_customize->add_setting( 'about_bg' , array(
    'default'   => '#ffffff',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'about_bg', array(
    'label'      => __( 'Background Color', 'piroll' ),
    'section'    => 'about_section',
    'settings'   => 'about_bg',
  ) ) );
  //About Title
  $wp_customize->add_setting( 'about_title' , array(
    'default'   => 'About Us',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'about_title', array(
    'label'      => __( 'Title', 'piroll' ),
    'section'    => 'about_section',
    'settings'   => 'about_title',
  ) ) );
  //About Title Color
  $wp_customize->add_setting( 'about_title_color' , array(
    'default'   => 'About Us',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'about_title_color', array(
    'label'      => __( 'Title Color', 'piroll' ),
    'section'    => 'about_section',
    'settings'   => 'about_title_color',
  ) ) );
  //About Text
  $wp_customize->add_setting( 'about_text' , array(
    'default'   => 'Divide have don\'t man wherein air fourth. Own itself make have night won\'t make.
    A you under Seed appear which good give. Own give air without fowl moveth dry first
    heaven fruit, dominion she\'d won\'t very all.
    ',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'about_text', array(
    'label'      => __( 'Text', 'piroll' ),
    'section'    => 'about_section',
    'settings'   => 'about_text',
  ) ) );
  //About Text Color
  $wp_customize->add_setting( 'about_text_color' , array(
    'default'   => '#787878',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'about_text_color', array(
    'label'      => __( 'Text Color', 'piroll' ),
    'section'    => 'about_section',
    'settings'   => 'about_text_color',
  ) ) );
  //About Text
  $wp_customize->add_setting( 'about_sign_image' , array(
    'default'   => '',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'about_sign_image', array(
    'label'      => __( 'Signature', 'piroll' ),
    'section'    => 'about_section',
    'settings'   => 'about_sign_image',
  ) ) );



  //SKILLS SECTION
  $wp_customize->add_section( 'skills_section' , array(
    'title'      => __( 'SKILLS Section', 'piroll' ),
    'priority'   => 30,
  ) );
  //Skills Right Image
  $wp_customize->add_setting( 'skills_img' , array(
    'default'   => '',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'skills_img', array(
    'label'      => __( 'Image', 'piroll' ),
    'section'    => 'skills_section',
    'settings'   => 'skills_img',
  ) ) );
  //Skills Title
  $wp_customize->add_setting( 'skills_title' , array(
    'default'   => 'Professional Skills',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'skills_title', array(
    'label'      => __( 'Title', 'piroll' ),
    'section'    => 'skills_section',
    'settings'   => 'skills_title',
  ) ) );
  //Skills Main Title Color
  $wp_customize->add_setting( 'skills_title_color' , array(
    'default'   => '#171717',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'skills_title_color', array(
    'label'      => __( 'Main Title Color', 'piroll' ),
    'section'    => 'skills_section',
    'settings'   => 'skills_title_color',
  ) ) );
  //Skills Item Title Color
  $wp_customize->add_setting( 'skills_item_title_color' , array(
    'default'   => '#000000',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'skills_item_title_color', array(
    'label'      => __( 'Skills Item Title Color', 'piroll' ),
    'section'    => 'skills_section',
    'settings'   => 'skills_item_title_color',
  ) ) );
  //Skills Bar Color
  $wp_customize->add_setting( 'skills_bar_color' , array(
    'default'   => '#10c9c3',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'skills_bar_color', array(
    'label'      => __( 'Skills Bar Color', 'piroll' ),
    'section'    => 'skills_section',
    'settings'   => 'skills_bar_color',
  ) ) );



  //NUMBERS SECTION
  $wp_customize->add_section( 'numbers_section' , array(
    'title'      => __( 'NUMBERS Section', 'piroll' ),
    'priority'   => 30,
  ) );
  //NUMBERS Background
  $wp_customize->add_setting( 'numbers_bg' , array(
    'default'   => '#10c9c3',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'numbers_bg', array(
    'label'      => __( 'Background Color', 'piroll' ),
    'section'    => 'numbers_section',
    'settings'   => 'numbers_bg',
  ) ) );
  //NUMBERS Color
  $wp_customize->add_setting( 'numbers_color' , array(
    'default'   => '#ffffff',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'numbers_color', array(
    'label'      => __( 'Numbers color', 'piroll' ),
    'section'    => 'numbers_section',
    'settings'   => 'numbers_color',
  ) ) );
  //NUMBERS Title Color
  $wp_customize->add_setting( 'numbers_titles_color' , array(
    'default'   => '#ffffff',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'numbers_titles_color', array(
    'label'      => __( 'Numbers titles color', 'piroll' ),
    'section'    => 'numbers_section',
    'settings'   => 'numbers_titles_color',
  ) ) );



  //WORKS SECTION
  $wp_customize->add_section( 'works_section' , array(
    'title'      => __( 'WORKS Section', 'piroll' ),
    'priority'   => 30,
  ) );
  //WORKS Image Hover Button Image
  $wp_customize->add_setting( 'works_image_hover_button' , array(
    'default'   => '',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'works_image_hover_button', array(
    'label'      => __( 'Image Hover Button', 'piroll' ),
    'section'    => 'works_section',
    'settings'   => 'works_image_hover_button',
  ) ) );
  //WORKS Button Background
  $wp_customize->add_setting( 'works_button_bg' , array(
    'default'   => '#f5f5f5',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'works_button_bg', array(
    'label'      => __( 'Button Background Color', 'piroll' ),
    'section'    => 'works_section',
    'settings'   => 'works_button_bg',
  ) ) );
  //WORKS Button Text
  $wp_customize->add_setting( 'works_button_text' , array(
    'default'   => 'load more work',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'works_button_text', array(
    'label'      => __( 'Button Text', 'piroll' ),
    'section'    => 'works_section',
    'settings'   => 'works_button_text',
  ) ) );
  //WORKS Button Text Color
  $wp_customize->add_setting( 'works_button_text_color' , array(
    'default'   => '#8e8e8e',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'works_button_text_color', array(
    'label'      => __( 'Button Text Color', 'piroll' ),
    'section'    => 'works_section',
    'settings'   => 'works_button_text_color',
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
