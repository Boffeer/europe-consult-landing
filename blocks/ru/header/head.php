<!DOCTYPE html>
<html lang="ru" prefix="og: http://ogp.me/ns#">

<?php
$host = $_SERVER['SERVER_NAME'];
$host_url = "//{$_SERVER['SERVER_NAME']}";

$global_links = array(
	"calendly" => "https://2meetup.in/ellaqury/marketing-consultation",
	"privacy" => "{$host_url}/pages/ru/privacy",
	"phone" => "+ 33 (7) 53 11 35 45",
);
?>

<head>
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">

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
	<meta property="og:site_name" content="<?php echo $head_info['og_site_name'] ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo __DIR__; ?>" />
	<meta property="og:image" content="<?php $head_info['og_image'] ?>" />
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

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-223057040-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-223057040-1');
	</script>


	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-KVZW4BK');
	</script>
	<!-- End Google Tag Manager -->

	<meta name="facebook-domain-verification" content="fx2eqcj038qn91hkapjgq350qsttcd" />
	<!-- Meta Pixel Code -->
	<script>
		! function(f, b, e, v, n, t, s) {
			if (f.fbq) return;
			n = f.fbq = function() {
				n.callMethod ?
					n.callMethod.apply(n, arguments) : n.queue.push(arguments)
			};
			if (!f._fbq) f._fbq = n;
			n.push = n;
			n.loaded = !0;
			n.version = '2.0';
			n.queue = [];
			t = b.createElement(e);
			t.async = !0;
			t.src = v;
			s = b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t, s)
		}(window, document, 'script',
			'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '1031095557843816');
		fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1031095557843816&ev=PageView&noscript=1" /></noscript>
	<!-- End Meta Pixel Code -->
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KVZW4BK" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div class="wrapper-phone">
		<div class="wrapper-phone__inner">
