<?php require_once 'header.php'; ?>
<?php
	function block_by_GET($_GET_name, $default_block_name) {
		if (in_array($_GET[$_GET_name] . '.php', scandir("blocks/{$_GET_name}"))) {
			$lead_block = $_GET[$_GET_name];
		} else {
			$lead_block = $default_block_name;
		}
		require_once "blocks/{$_GET_name}/{$lead_block}.php";
	}
?>

<main class="main">

<?php block_by_GET('hero', 'combos'); ?>

<?php require_once 'blocks/consult/consult.php' ?>

<?php require_once 'blocks/result/result.php' ?>

<?php require_once 'blocks/cases/cases.php' ?>

<?php require_once 'blocks/person/person.php' ?>

<?php block_by_GET('lead', 'tripwire'); ?>

</main>

<?php require_once 'footer.php'; ?>
