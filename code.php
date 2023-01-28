<?php
add_action('init', 'disattiva_gutenberg_per_tutto');
function disattiva_gutenberg_per_tutto() {
	add_filter('use_block_editor_for_post_type', '__return_false');
	add_filter('use_block_editor_for_post', '__return_false');
// Disables the block editor from managing widgets in the Gutenberg plugin.
	add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
	add_filter( 'use_widgets_block_editor', '__return_false' );
}
?>
