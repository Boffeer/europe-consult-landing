<?php

use function functions\render_blocks;

 require_once 'header.php'; ?>

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
		);
		render_blocks($blocks);
		// block_by_GET('hero', 'combos');

		// require_once 'blocks/consult/consult.php';

		// block_by_GET('result');

		// require_once 'blocks/cases/cases.php';

		// require_once 'blocks/person/person.php';

		// block_by_GET('lead', 'tripwire');

	?>
</main>

<?php require_once 'footer.php'; ?>
