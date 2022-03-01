<?php require_once 'header.php'; ?>

<?php require_once 'functions.php'; ?>

<main class="main">
	<?php

		block_by_GET('hero', 'combos');

		require_once 'blocks/consult/consult.php';

		block_by_GET('result');

		require_once 'blocks/cases/cases.php';

		require_once 'blocks/person/person.php';

		block_by_GET('lead', 'tripwire');

	?>
</main>

<?php require_once 'footer.php'; ?>
