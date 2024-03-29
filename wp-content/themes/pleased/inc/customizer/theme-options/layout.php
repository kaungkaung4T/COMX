<?php
/**
 * Layout options
 *
 * @package Theme Palace
 * @subpackage Pleased
 * @since Pleased 1.0.0
 */

// Add sidebar section
$wp_customize->add_section( 'pleased_layout', array(
	'title'               => esc_html__('Layout','pleased'),
	'description'         => esc_html__( 'Layout section options.', 'pleased' ),
	'panel'               => 'pleased_theme_options_panel',
) );

// Site layout setting and control.
$wp_customize->add_setting( 'pleased_theme_options[site_layout]', array(
	'sanitize_callback'   => 'pleased_sanitize_select',
	'default'             => $options['site_layout'],
) );

$wp_customize->add_control(  new Pleased_Custom_Radio_Image_Control ( $wp_customize, 'pleased_theme_options[site_layout]', array(
	'label'               => esc_html__( 'Site Layout', 'pleased' ),
	'section'             => 'pleased_layout',
	'choices'			  => pleased_site_layout(),
) ) );

// Sidebar position setting and control.
$wp_customize->add_setting( 'pleased_theme_options[sidebar_position]', array(
	'sanitize_callback'   => 'pleased_sanitize_select',
	'default'             => $options['sidebar_position'],
) );

$wp_customize->add_control(  new Pleased_Custom_Radio_Image_Control ( $wp_customize, 'pleased_theme_options[sidebar_position]', array(
	'label'               => esc_html__( 'Global Sidebar Position', 'pleased' ),
	'section'             => 'pleased_layout',
	'choices'			  => pleased_global_sidebar_position(),
) ) );

// Post sidebar position setting and control.
$wp_customize->add_setting( 'pleased_theme_options[post_sidebar_position]', array(
	'sanitize_callback'   => 'pleased_sanitize_select',
	'default'             => $options['post_sidebar_position'],
) );

$wp_customize->add_control(  new Pleased_Custom_Radio_Image_Control ( $wp_customize, 'pleased_theme_options[post_sidebar_position]', array(
	'label'               => esc_html__( 'Posts Sidebar Position', 'pleased' ),
	'section'             => 'pleased_layout',
	'choices'			  => pleased_sidebar_position(),
) ) );

// Post sidebar position setting and control.
$wp_customize->add_setting( 'pleased_theme_options[page_sidebar_position]', array(
	'sanitize_callback'   => 'pleased_sanitize_select',
	'default'             => $options['page_sidebar_position'],
) );

$wp_customize->add_control( new Pleased_Custom_Radio_Image_Control( $wp_customize, 'pleased_theme_options[page_sidebar_position]', array(
	'label'               => esc_html__( 'Pages Sidebar Position', 'pleased' ),
	'section'             => 'pleased_layout',
	'choices'			  => pleased_sidebar_position(),
) ) );