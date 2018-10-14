<?php
/**
 * simple_lp Theme Customizer
 *
 * @package simple_lp
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function simple_lp_theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'simple_lp_theme_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'simple_lp_theme_customize_partial_blogdescription',
		) );
	}

	// フロントページ設定セクション
	$wp_customize->add_section('simple_lp_theme_frontpage', array(
		'title' => 'フロントページ設定',
		'priority'   => 195
	));
	// 現在人数
	$wp_customize->add_setting('simple_lp_theme_options[seat_remain]', array(
		'default'   => '',
		'type'      => 'theme_mod'
	));
	$wp_customize->add_control('simple_lp_theme_options_seat_remain', array(
		'settings'  => 'simple_lp_theme_options[seat_remain]',
		'label'     => '現在人数',
		'section'   => 'simple_lp_theme_frontpage',
		'type'      => 'number',
	));
	// 定員人数
	$wp_customize->add_setting('simple_lp_theme_options[seat_limit]', array(
		'default'   => '',
		'type'      => 'theme_mod'
	));
	$wp_customize->add_control('simple_lp_theme_options_seat_limit', array(
		'settings'  => 'simple_lp_theme_options[seat_limit]',
		'label'     => '定員人数',
		'section'   => 'simple_lp_theme_frontpage',
		'type'      => 'number',
	));
	// 開催開始日時
	$wp_customize->add_setting('simple_lp_theme_options[start_date]', array(
		'default'   => '',
		'type'      => 'theme_mod'
	));
	$wp_customize->add_control('simple_lp_theme_options_start_date', array(
		'settings'  => 'simple_lp_theme_options[start_date]',
		'label'     => '開催開始日時',
		'section'   => 'simple_lp_theme_frontpage',
		'type'      => 'date_time',
	));
	// 開催時間(m)
	$wp_customize->add_setting('simple_lp_theme_options[duration_minutes]', array(
		'default'   => '',
		'type'      => 'theme_mod'
	));
	$wp_customize->add_control('simple_lp_theme_options_duration_minutes', array(
		'settings'  => 'simple_lp_theme_options[duration_minutes]',
		'label'     => '開催時間(minutes)',
		'section'   => 'simple_lp_theme_frontpage',
		'type'      => 'number',
	));
	// 開催名
	$wp_customize->add_setting('simple_lp_theme_options[past_count]', array(
		'default'   => '',
		'type'      => 'theme_mod'
	));
	$wp_customize->add_control('simple_lp_theme_options_past_count', array(
		'settings'  => 'simple_lp_theme_options[past_count]',
		'label'     => '開催名',
		'section'   => 'simple_lp_theme_frontpage',
		'type'      => 'text',
	));
	// 問い合わせフォーム
	$wp_customize->add_setting('simple_lp_theme_options[contact_url]', array(
		'default'   => '',
		'type'      => 'theme_mod'
	));
	$wp_customize->add_control('simple_lp_theme_options_contact_url', array(
		'settings'  => 'simple_lp_theme_options[contact_url]',
		'label'     => '問い合わせフォーム',
		'section'   => 'simple_lp_theme_frontpage',
		'type'      => 'url',
	));
	// 開催実績
	$wp_customize->add_setting('simple_lp_theme_options[past_event]', array(
		'default'   => '',
		'type'      => 'theme_mod'
	));
	$wp_customize->add_control('simple_lp_theme_options_past_event', array(
		'settings'  => 'simple_lp_theme_options[past_event]',
		'label'     => '開催実績',
		'section'   => 'simple_lp_theme_frontpage',
		'type'      => 'textarea',
	));
	// タイムテーブル
	$wp_customize->add_setting('simple_lp_theme_options[time_table]', array(
		'default'   => '',
		'type'      => 'theme_mod'
	));
	$wp_customize->add_control('simple_lp_theme_options_time_table', array(
		'settings'  => 'simple_lp_theme_options[time_table]',
		'label'     => 'タイムテーブル',
		'section'   => 'simple_lp_theme_frontpage',
		'type'      => 'textarea',
	));
}
add_action( 'customize_register', 'simple_lp_theme_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function simple_lp_theme_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function simple_lp_theme_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function simple_lp_theme_customize_preview_js() {
	wp_enqueue_script( 'simple_lp-theme-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'simple_lp_theme_customize_preview_js' );
