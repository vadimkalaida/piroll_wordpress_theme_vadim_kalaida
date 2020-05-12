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
