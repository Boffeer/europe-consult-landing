<?php

use function functions\get_page_layout;

//  require_once 'header.php';
?>

<?php require_once 'functions.php'; ?>

<main class="main">
<?php
	$blocks = array(
		'hero/combos',
		'consult/consult',
		'result/result',
		'cases/cases',
		'person/person',
		'lead/tripwire',
		'footer/footer',
	);
	get_page_layout($blocks, __FILE__, 'ru');
?>
</main>

<?php //require_once 'footer.php'; ?>
