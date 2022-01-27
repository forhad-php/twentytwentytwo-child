<?php
/**
 * Default footer
 */
return array(
	'title'      => __( 'Default footer', 'twentytwentytwo' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">' .
					sprintf(
						/* Translators: Footer Text. */
						esc_html__( '&copy; All rights reserved %s', 'twentytwentytwo' ),
						esc_attr( gmdate( 'Y' ) )
					) . '</p>
					<!-- /wp:paragraph -->',
);
