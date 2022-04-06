<?php

use function functions\get_page_layout;

//  require_once 'header.php';
?>

<?php require_once 'functions.php'; ?>



<?php
$head_info = array(
	'title' => 'Découvrez comment attirer de 3 à 10 clients par jour via Internet en utilisant des méthodes éprouvées :',
	'description' => 'Inscrivez-vous pour une consultation avec un spécialiste du marketing qui parle 3 langues avec des informations sur toutes les caractéristiques du travail en Europe.',
	'keywords' => '',
	'og_site_name' => '',
	'og_image' => '',
);


$blocks = array(
	'header/header',
	'hero/proven-methods',
	'consult/consult-psycho',
	'result/notre-tache-2',
	'cases/cases',
	'person/person',
	'reviews/reviews-wotre',
	'lead/si-vous',
	'footer/footer',
);

get_page_layout($blocks, $head_info, __FILE__, 'fr');
?>


<?php //require_once 'footer.php';
?>
