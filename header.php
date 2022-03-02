<!DOCTYPE html>
<html lang="ru" prefix="og: http://ogp.me/ns#">
	<?php
		$host = $_SERVER['HTTP_HOST'];
		$host_url = "//{$_SERVER['HTTP_HOST']}";
	?>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="yandex-verification" content="" />
		<meta name="google-site-verification" content="" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />

		<meta property="og:title" content="" />
		<meta property="og:description" content="" />
		<meta property="og:site_name" content="" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="" />
		<meta property="og:image" content="" />

		<title>Title</title>
		<link rel="stylesheet" href="//<?php echo $host; ?>/css/normalize.css" />
		<link rel="stylesheet" href="//<?php echo $host; ?>/assets/poppa/poppa.min.css" />
		<link rel="stylesheet" href="//<?php echo $host; ?>/css/swiper-bundle.min.css" />
		<link rel="stylesheet" href="//<?php echo $host; ?>/css/index.min.css" />
	</head>
	<body>
		<div class="wrapper-phone">
			<div class="wrapper-phone__inner">
				<header class="header">
					<div class="container header__container">
						<a href="#" class="header-branding branding"
							><img
								src="//<?php echo $host; ?>/img/common/logo.png"
								alt="Узнайте как привлекать клиентов"
								class="hedaer-branding__logo branding__logo"
						/></a>
						<button class="header__contact button button--secondary">
							Оставить заявку
						</button>
					</div>
				</header>
