<?php
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
