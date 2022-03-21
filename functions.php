<?php

namespace functions;

function block_by_GET($_GET_name, $default_block_name = null)
{
	if ($default_block_name == null) {
		$default_block_name = $_GET_name;
	}

	if (in_array($_GET[$_GET_name] . '.php', scandir("blocks/{$_GET_name}"))) {
		$lead_block = $_GET[$_GET_name];
	} else {
		$lead_block = $default_block_name;
	}
	require "blocks/{$_GET_name}/{$lead_block}.php";
}

/**
 * @date 2022-03-02
 * @param array $blocks
 * @param {any} $file
 * @param {any} $language=null
 * @returns {any}
 */
function get_page_layout($blocks, $head_info, $file, $language = null)
{
	$root = $_SERVER['DOCUMENT_ROOT'];
	$head_info;
	// Defines page language
	if (stripos($file, '\\')) {
		$fixed_path = str_replace('\\', '/', $file);
	} else {
		$fixed_path = $file;
	}
	if (stripos($fixed_path, '/pages/ru/')) {
		$page_language = 'ru';
	} else if (stripos($fixed_path, '/pages/fr/')) {
		$page_language = 'fr';
	} else if ($language != null) {
		$page_language = $language;
	}


	include "{$root}/header.php";
	foreach ($blocks as $key => $block) {
		$block_path = "{$root}/blocks/{$page_language}/{$block}.php";
		$block_path = str_replace('\/\/', '/', $block_path);
		include $block_path;

		$blocks_count = count($blocks);
		$block_key = $key + 1;
		// Если блок последний, то
		if ($blocks_count == $block_key) {
			// require "{$root}/blocks/{$page_language}/{$block}.php";
		}
	}
}
