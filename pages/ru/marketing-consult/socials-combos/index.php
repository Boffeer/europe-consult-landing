<?php

use function functions\get_page_layout;


$head_info = array(
	'title' => "Узнайте как получать от 3-10 клиентов в день из Instagram и Google по минимальной цене",
	'description' => "Запишись на консультацию к русскоговорящему маркетологу с информацией о всех особенностях работы в Европе.",
	'keywords' => "",
	'og_site_name' => "",
	'og_image' => "",
);

$blocks = array(
	'header/header',
	'hero/google-ig',
	'consult/consult',
	'result/result',
	'cases/cases',
	'person/person',
	'lead/lead-combos',
	'footer/footer',
);
require_once $_SERVER['DOCUMENT_ROOT'] . '/functions.php';
get_page_layout($blocks, $head_info, __FILE__);
