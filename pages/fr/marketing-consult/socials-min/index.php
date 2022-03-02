<?php

use function functions\get_page_layout;

$blocks = array(
	'hero/google-ig',
	'consult/consult',
	'result/result',
	'cases/cases',
	'person/person',
	'lead/lead',
	'footer/footer',
);
require_once $_SERVER['DOCUMENT_ROOT'] . '/functions.php';
get_page_layout($blocks, __FILE__);
