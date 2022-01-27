<?php

/**
 * Enqueue Styles.
 *
 * @return void
 */
function frhd_enqueue_child_styles() {

	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'frhd_enqueue_child_styles' );

/**
 * Register Block Patterns.
 *
 * @return void
 */
function frhd_register_patterns() {

	register_block_pattern_category(
		'forhad',
		array( 'label' => esc_html__( 'Forhad', 'twentytwentytwo' ) )
	);

	register_block_pattern(
		'forhad/frhd-pattern-para',
		array(
			'title'       => esc_html__( 'Green Para', 'twentytwentytwo' ),
			'categories'  => array( 'forhad', 'twentytwentytwo' ),
			'description' => esc_html_x( 'Green color paragraph.', 'Block pattern description', 'twentytwentytwo' ),
			'content'     => '<!-- wp:paragraph {"color":"#006d45"} -->
                                <p class="frhd--pattern-para has-text-color" style="color:#006d45">Green Text</p>
                            <!-- /wp:paragraph -->',
		)
	);
}
add_action( 'init', 'frhd_register_patterns' );
