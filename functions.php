<?php
// Enqueue Javascript files
function hemingway_child_files() {
	wp_enqueue_style( 'hemingway_parent_style', get_template_directory_uri().'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'hemingway_child_files' );

// add support for customizer to enable the full width for single, post, taxonomy and archive pages.
// after we check to enable it. 
?>