#!/usr/bin/env php
<?php
require_once 'vendor/autoload.php';
global $faker;
$faker = Faker\Factory::create();

function get_post(): array {
	global $faker;

	return array(
		'post_title'   => $faker->text( 15 ),
		'post_author'  => $faker->email(),
		'post_content' => $faker->text( 250 )
	);
}

function get_posts(): array {
	$posts = array();
	for ( $i = 0; $i < 5; $i ++ ) {
		$posts[] = get_post();
	}

	return $posts;
}