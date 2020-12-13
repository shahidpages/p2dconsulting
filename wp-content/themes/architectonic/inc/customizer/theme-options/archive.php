<?php
/**
 * Archive options
 *
 * @package Theme Palace
 * @subpackage Architectonic
 * @since Architectonic 1.0.0
 */

// Add archive section
$wp_customize->add_section( 'architectonic_archive_section', array(
	'title'             => esc_html__( 'Blog/Archive','architectonic' ),
	'description'       => esc_html__( 'Archive section options.', 'architectonic' ),
	'panel'             => 'architectonic_theme_options_panel',
) );

// Your latest posts title setting and control.
$wp_customize->add_setting( 'architectonic_theme_options[your_latest_posts_title]', array(
	'default'           => $options['your_latest_posts_title'],
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'architectonic_theme_options[your_latest_posts_title]', array(
	'label'             => esc_html__( 'Your Latest Posts Title', 'architectonic' ),
	'description'       => esc_html__( 'This option only works if Static Front Page is set to "Your latest posts."', 'architectonic' ),
	'section'           => 'architectonic_archive_section',
	'type'				=> 'text',
	'active_callback'   => 'architectonic_is_latest_posts'
) );

// Archive date meta setting and control.
$wp_customize->add_setting( 'architectonic_theme_options[hide_date]', array(
	'default'           => $options['hide_date'],
	'sanitize_callback' => 'architectonic_sanitize_switch_control',
) );

$wp_customize->add_control( new Architectonic_Switch_Control( $wp_customize, 'architectonic_theme_options[hide_date]', array(
	'label'             => esc_html__( 'Hide Date', 'architectonic' ),
	'section'           => 'architectonic_archive_section',
	'on_off_label' 		=> architectonic_hide_options(),
) ) );

// Archive author category setting and control.
$wp_customize->add_setting( 'architectonic_theme_options[hide_category]', array(
	'default'           => $options['hide_category'],
	'sanitize_callback' => 'architectonic_sanitize_switch_control',
) );

$wp_customize->add_control( new Architectonic_Switch_Control( $wp_customize, 'architectonic_theme_options[hide_category]', array(
	'label'             => esc_html__( 'Hide Category', 'architectonic' ),
	'section'           => 'architectonic_archive_section',
	'on_off_label' 		=> architectonic_hide_options(),
) ) );
