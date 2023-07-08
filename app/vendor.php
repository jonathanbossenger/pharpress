<?php
function get_post( $i ) {

	return array(
		'post_title'   => 'Post ' . $i,
		'post_author'  => 'email' . $i . '@example.com',
		'post_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ' . $i,
	);
}

function get_posts() {
	$posts = array();
	for ( $i = 0; $i < 5; $i ++ ) {
		$posts[] = get_post( $i );
	}

	return $posts;
}