<?php

switchLanguage();
get_header();

function get_possible_paths() {
	$paths = [];
	$base_path = get_template_directory() . '/page-content';
	$uri = ($_SERVER["REQUEST_URI"] == '') ? '/' : $_SERVER["REQUEST_URI"];

	array_push($paths, $base_path . $uri . 'index.html.php');

	$uri = preg_replace('/\/$/', '', $uri);
	$terms = explode('/', $uri);
	
	$filename = end($terms) . '.html.php';
	array_pop($terms);

	while ( !empty($terms) ) {
		$path = $base_path . implode('/', $terms) . '/' . $filename;
		array_pop($terms);
		array_push($paths, $path);
	}

	return $paths;
}

function get_path_file_exists($paths) {
		foreach ($paths as $path) {
			if ( file_exists($path) ) { return $path; }
		}
		return '';
	}

$paths = get_possible_paths();
$path = get_path_file_exists($paths);

if ( !empty($path) ) {
	require_once $path;
}

get_footer(); ?>
