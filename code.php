<?php
add_filter( 'eab-event-post_type-supports', 'adding_excerpt_support' );
function adding_excerpt_support($supports) {
	$supports[] = 'excerpt';
	return $supports;
}
