<!DOCTYPE html>
<html lang="ru" prefix="og: http://ogp.me/ns#">

	<?php
		$host = $_SERVER['SERVER_NAME'];
		$host_url = "//{$_SERVER['SERVER_NAME']}";

		$global_links = array(
			"calendly" => "#calendly",
			"privacy" => "#privacy",
			"offer" => "#offer",
			"phone" => "+ 33 (7) 53 11 35 45",
		);
	?>

	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="format-detection" content="telephone=no" />

		<meta name="yandex-verification" content="" />
		<meta name="google-site-verification" content="" />

		<meta name="description" content="<?php echo $head_info['description']; ?>" />
		<meta name="keywords" content="<?php echo $head_info['keywords']; ?>" />
		<meta property="og:title" content="<?php echo $head_info['title']; ?>" />
		<meta property="og:description" content="<?php echo $head_info['description']; ?>" />
		<meta property="og:site_name" content="<?php echo $head_info['og_site_name']?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo __DIR__; ?>" />
		<meta property="og:image" content="<?php $head_info['og_image']?>" />
		<title><?php echo $head_info['title']; ?></title>

		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $host_url; ?>/img/manifest/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $host_url; ?>/img/manifest/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $host_url; ?>/img/manifest/favicon-16x16.png">
		<link rel="manifest" href="<?php echo $host_url; ?>/img/manifest/site.webmanifest">
		<link rel="mask-icon" href="<?php echo $host_url; ?>/img/manifest/safari-pinned-tab.svg" color="#5bbad5">
		<link rel="shortcut icon" href="<?php echo $host_url; ?>/img/manifest/favicon.ico">
		<meta name="msapplication-TileColor" content="#ea5aba">
		<meta name="msapplication-config" content="<?php echo $host_url; ?>/img/manifest/browserconfig.xml">
		<meta name="theme-color" content="#ea5aba">

		<link rel="stylesheet" href="//<?php echo $host; ?>/css/normalize.css" />
		<link rel="stylesheet" href="//<?php echo $host; ?>/assets/poppa/poppa.min.css" />
		<link rel="stylesheet" href="//<?php echo $host; ?>/css/swiper-bundle.min.css" />
		<link rel="stylesheet" href="//<?php echo $host; ?>/css/index.min.css" />
	</head>
	<body>
		<div class="wrapper-phone">
			<div class="wrapper-phone__inner">
