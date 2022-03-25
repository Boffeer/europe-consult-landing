<header class="header">
	<div class="container header__container">
		<a href="#" class="header-branding branding"><img src="//<?php echo $host; ?>/img/common/logo.png" alt="Узнайте как привлекать клиентов" class="hedaer-branding__logo branding__logo" /></a>
		<button class="header__contact button button--secondary">
			Prendre le rendez-vous
		</button>
		<?php
		$urls = array();
		$urls['current'] = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

		if (stripos($urls['current'], '/pages/fr/')) {
			$language = 'ru';
			$urls[$language] = str_replace('pages/fr', 'pages/ru', $urls['current']);
			$urls['fr'] = $urls['current'];
		} else if (stripos($urls['current'], '/pages/ru/')) {
			$language = 'fr';
			$urls[$language] = str_replace('pages/ru', 'pages/fr', $urls['current']);
			$urls['ru'] = $urls['current'];
		} else if ($language != null) {
			$language = $language;
		}
		unset($urls['current']);
		?>
		<?php if (!empty($ulrs)) : ?>
			<div class="header-language">
				<?php foreach ($urls as $name => $url) : ?>
					<?php if ($url === $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) : ?>
						<p class="header-language__switcher header-language__switcher--current"><?php echo $name; ?></p>
					<?php else : ?>
						<a href="<?php echo '//' . $url; ?>" class="header-language__switcher"><?php echo $name; ?></a>
					<?php endif; ?>

				<?php endforeach; ?>
			</div>
		<?php else : ?>
			<div class="header-language">
				<?php $index_page = 'marketing-consult/combos-tripwire'; ?>
				<a href="<?php echo '//' . $_SERVER['HTTP_HOST'] . '/pages/ru/' . $index_page; ?>" class="header-language__switcher">ru</a>
				<p class="header-language__switcher  header-language__switcher--current">fr</p>
			</div>
		<?php endif; ?>
	</div>
</header>
