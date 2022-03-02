<?php

	namespace functions;

	function block_by_GET($_GET_name, $default_block_name = null) {
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

	function render_blocks($blocks) {
		$root = $_SERVER['DOCUMENT_ROOT'];
		if (stripos(__FILE__, '\\')) {
			$fixed_path = str_replace('\\', '/', __FILE__);
		}

		// Defines page language
		if (stripos($fixed_path, '/pages/ru/')) {
			$page_language = 'ru';
		} else if (stripos($fixed_path, '/pages/fr/')) {
			$page_language = 'fr';
		} else {
			$page_language = 'ru';
		}

		require_once "{$root}/header.php";
		foreach ($blocks as $block) {
			require "{$root}/blocks/{$page_language}/{$block}.php";
		}
		require_once "{$root}/footer.php";
	}
