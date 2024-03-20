<?php
function timelines_get_meta_box( $meta_boxes ) {

	/* do not show */
	$prefix = '_';

	/* get sidebars */
	$sidebars = array();
 	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) {
 		$sidebars = $GLOBALS['wp_registered_sidebars'];
 	}
 	$sidebars_choices = array();
 	foreach ( $sidebars as $sidebar ) {
 		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name'];
 	}

/*  Page options
/* ------------------------------------ */
	$meta_boxes[] = array(
		'id' => 'page-options',
		'title' => esc_html__( 'Page Options', 'timelines' ),
		'post_types' => array( 'page' ),
		'context' => 'advanced',
		'priority' => 'high',
		'autosave' => false,
		'fields' => array(
			array(
				'id' => $prefix . 'sidebar_primary',
				'name' => esc_html__( 'Primary Sidebar', 'timelines' ),
				'type' => 'select',
				'placeholder' => esc_html__( 'Select a sidebar', 'timelines' ),
				'options' => $sidebars_choices,
			),
			array(
				'id' => $prefix . 'sidebar_secondary',
				'name' => esc_html__( 'Secondary Sidebar', 'timelines' ),
				'type' => 'select',
				'placeholder' => esc_html__( 'Select a sidebar', 'timelines' ),
				'options' => $sidebars_choices,
			),
		),
	);

/*  Post options
/* ------------------------------------ */
	$meta_boxes[] = array(
		'id' => 'post-options',
		'title' => esc_html__( 'Post Options', 'timelines' ),
		'post_types' => array( 'post' ),
		'context' => 'advanced',
		'priority' => 'high',
		'autosave' => false,
		'fields' => array(
			array(
				'id' => $prefix . 'sidebar_primary',
				'name' => esc_html__( 'Primary Sidebar', 'timelines' ),
				'type' => 'select',
				'placeholder' => esc_html__( 'Select a sidebar', 'timelines' ),
				'options' => $sidebars_choices,
			),
			array(
				'id' => $prefix . 'sidebar_secondary',
				'name' => esc_html__( 'Secondary Sidebar', 'timelines' ),
				'type' => 'select',
				'placeholder' => esc_html__( 'Select a sidebar', 'timelines' ),
				'options' => $sidebars_choices,
			),
		),
	);

	return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'timelines_get_meta_box' );