<?php

use function functions\get_page_layout;


$head_info = array(
	'title' => "NE MANQUEZ PAS LA CHANCE DE VOUS INSCRIRE À UNE CONSULTATION ET D'APPRENDRE COMMENT OBTENIR DE 3 À 10 CLIENTS PAR JOUR À PARTIR D'INSTAGRAM ET DE GOOGLE AU PRIX LE PLUS BAS",
	'description' => "Inscrivez-vous pour une consultation avec un spécialiste du marketing qui parle 3 langues avec des informations sur toutes les caractéristiques du travail en Europe.",
	'keywords' => '',
	'og_site_name' => '',
	'og_image' => '',
);

$blocks = array(
	'header/header',
	'hero/google-ig',
	'consult/consult',
	'result/result',
	'cases/cases',
	'person/person',
	'reviews/reviews',
	'lead/lead',
	'footer/footer',
);
require_once $_SERVER['DOCUMENT_ROOT'] . '/functions.php';
get_page_layout($blocks, $head_info, __FILE__);
