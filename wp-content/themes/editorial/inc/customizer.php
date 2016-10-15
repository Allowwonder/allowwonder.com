<?php
/**
 * Editorial Theme Customizer.
 *
 * @package Editorial
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function editorial_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'editorial_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function editorial_customize_preview_js() {
	wp_enqueue_script( 'editorial_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'editorial_customize_preview_js' );

/**
 * Customizer Callback functions
 */
function editorial_related_articles_option_callback( $control ) {
    if ( $control->manager->get_setting( 'editorial_related_articles_option' )->value() != 'disable' ) {
        return true;
    } else {
        return false;
    }
}