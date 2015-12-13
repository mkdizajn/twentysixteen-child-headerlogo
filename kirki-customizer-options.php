<?php 


if ( class_exists( 'Kirki' ) ) {

	/**
	 * Add config
	 */
	Kirki::add_config( 'my_theme', array(
	    'capability'    => 'edit_theme_options',
	    'option_type'   => 'theme_mod',
	    // 'option_name'   => 'my_theme',
	) );
	/*
	 * Add panel	
	 */
	Kirki::add_panel( 'design', array(
		'priority' => 10,
		'title'    => esc_attr__( 'Custom logo', 'twentysixteen-child-headerlogo' ),
	) );
	/**
	 * Add section
	 */
	Kirki::add_section( 'logo', array(
		'title'          => esc_attr__( 'Replace site identity', 'twentysixteen-child-headerlogo' ),
		'priority'       => 1,
		'panel'			 => 'design',
		'capability'     => 'edit_theme_options',
	) );
	/**
	 * Add logo field
	 */

	Kirki::add_field( 'my_theme', array(
	    'settings' => 'my_logo',
	    'label'    => __( 'Choose your brand image', 'twentysixteen-child-headerlogo' ),
		'description'=> __('Replace Twenty Sixteen site title and tagline with your custom logo', 'twentysixteen-child-headerlogo' ),
	    'section'  => 'logo',
	    'type'     => 'upload',
	    'mime_type'=> 'image',
	    'priority' => 10,
	    'default'  => '',
	) );

	/* Add SEO 'alt' tag on img element in DOM */
	Kirki::add_field( '', array(
	    'type'        => 'switch',
	    'settings'    => 'logo_alt',
	    'label'       => __( 'ALT tag?', 'twentysixteen-child-headerlogo' ),
	    'description' => __( 'Add site tagline to logo ALT tag?', 'twentysixteen-child-headerlogo' ),
	    'section'     => 'logo',
	    'default'     => '1',
	    'priority'    => 20,
	) );
}