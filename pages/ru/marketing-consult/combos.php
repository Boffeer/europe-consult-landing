<?php

$root = $_SERVER['DOCUMENT_ROOT'];
$blocks = array(
	'hero/combos',
	'result/result',
	'hero/combos',
	'hero/combos',
);

function autoload($class) {
	$class = str_replace('\\', '/', $class);
	$file = __DIR__ . "/{$class}.php";
	if (file_exists($file)) {
		require_once $file;
	}
}
if (stripos(__FILE__, '\\')) {
	$fixed_path = str_replace('\\', '/', __FILE__);
}


// Defines page language
if (stripos($fixed_path, '/pages/ru/')) {
	$page_language = 'ru';
} else if (stripos($fixed_path, '/pages/fr/')) {
	$page_language = 'fr';
}


// echo '<pre>';
// var_dump($_SERVER);
// echo '</pre>';

	require "{$root}/header.php";
	foreach ($blocks as $block) {
		require "{$root}/blocks/{$page_language}/{$block}.php";
	}
	require "{$root}/footer.php";
