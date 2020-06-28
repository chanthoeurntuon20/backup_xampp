<?php
//Function to Trim Excerpt Length & more..
function satrah_excerpt_length( $length ) {
    return 23;
}
add_filter( 'excerpt_length', 'satrah_excerpt_length', 999 );

function satrah_excerpt_more( $more ) {
	if (!is_admin())
    	return '...';
}
add_filter( 'excerpt_more', 'satrah_excerpt_more' );