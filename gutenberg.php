<?php
// register custom category
function my_mario_block_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'mario-blocks',
				'title' => __( 'Mario Blocks', 'mario-blocks' ),
			),
		)
	);
}
add_filter( 'block_categories', 'my_mario_block_category', 10, 2);

// register blocks
function alecaddd_gutenberg_blocks()
{
    wp_register_script( 'custom-cta-js', get_template_directory_uri() . '/js/gutenberg-block.js', array( 'wp-blocks', 'wp-editor', 'wp-components' ));

    register_block_type( 'alecaddd/custom-cta', array(
        'editor_script' => 'custom-cta-js'
    ) );
}
add_action( 'init', 'alecaddd_gutenberg_blocks' );
