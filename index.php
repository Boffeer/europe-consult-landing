<?php

use function functions\get_page_layout;

//  require_once 'header.php';
?>

<?php require_once 'functions.php'; ?>


$head_info = array(
	'title' => 'Узнайте как получать от 3-10 клиентов в день из instagram и google по минимальной цене',
	'description' => 'Запишись на консультацию к русскоговорящему маркетологу с информацией о всех особенностях работы в Европе.',
	'keywords' => '',
	'og_site_name' => '',
	'og_image' => '',
);

<?php
	$blocks = array(
		'header/header',
		'hero/combos',
		'consult/consult',
		'result/result',
		'cases/cases',
		'person/person',
		'lead/tripwire',
		'footer/footer',
	);
	get_page_layout($blocks, $head_info, __FILE__, 'ru');
?>

<?php //require_once 'footer.php'; ?>
