<?php

use function functions\get_page_layout;


$head_info = array(
	'title' => 'Découvrez comment attirer de 3 à 10 clients par jour grâce aux offres groupées :',
	'description' => 'Inscrivez-vous pour une consultation avec un spécialiste du marketing qui parle 3 langues avec des informations sur toutes les caractéristiques du travail en Europe.',
	'keywords' => '',
	'og_site_name' => '',
	'og_image' => '',
);

$blocks = array(
	'header/header',
	'hero/combos',
	'consult/consult',
	'result/result',
	'cases/cases',
	'person/person',
	'reviews/reviews',
	'lead/lead-combos-timer',
	'footer/footer',
);
require_once $_SERVER['DOCUMENT_ROOT'] . '/functions.php';
get_page_layout($blocks, $head_info, __FILE__);
