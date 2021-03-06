<?php

use function functions\get_page_layout;

$head_info = array(
	'title' => 'Политика конфиденциальности',
	'description' => 'Политика конфиденциальности qurydigital.com',
	'keywords' => '',
	'og_site_name' => '',
	'og_image' => '',
);

$blocks = array(
	'header/header',
	'privacy/privacy',
	'footer/footer',
);
require_once $_SERVER['DOCUMENT_ROOT'] . '/functions.php';
get_page_layout($blocks, $head_info, __FILE__);
