<?php
/**
 * irabako Theme Customizer
 *
 * @package irabako
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function irabako_theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'irabako_theme_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'irabako_theme_customize_partial_blogdescription',
		) );
	}

	// フロントページ設定セクション
	$wp_customize->add_section('irabako_theme_frontpage', array(
		'title' => 'フロントページ設定',
		'priority'   => 195
	));
	// 開催実績
	$wp_customize->add_setting('irabako_theme_options[past_event]', array(
		'default'   => '',
		'type'      => 'theme_mod',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control('irabako_theme_options_past_event', array(
		'settings'  => 'irabako_theme_options[past_event]',
		'label'     => '開催実績',
		'section'   => 'irabako_theme_frontpage',
		'type'      => 'textarea',
	));
}
add_action( 'customize_register', 'irabako_theme_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function irabako_theme_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function irabako_theme_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function irabako_theme_customize_preview_js() {
	wp_enqueue_script( 'irabako-theme-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'irabako_theme_customize_preview_js' );
