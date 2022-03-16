<section class="cases">
	<div class="cases-decor__top"></div>
	<div class="container cases__container">
		<h2 class="section__title cases__title">
			Voici ce que les clients ont obtenu après avoir mis en œuvre toutes les recommandations
		</h2>
		<div class="swiper cases-slider">
			<div class="swiper-wrapper">
				<?php
				$cases = array(
					array(
						'imgs' => array(
							'result.png',
							'creo.png',
						),
						'rows' => array(
							array(
								'title' => 'Domaine ',
								'desc' => 'expertise automobile',
							),
							array(
								'title' => 'Pays ',
								'desc' => 'Allemagne (Stuttgart)',
							),
							array(
								'title' => 'Problème ',
								'desc' => 'flux client instable',
							),
							array(
								'title' => 'Recommandations ',
								'desc' => 'créer un site de vente et mettre en place des annonces sur Google',
							),
						),
						'result' => 'pendant 1,5 an, le budget publicitaire mensuel est ≈3 000 €, ≈30-40 clients, revenus ≈10 000 €, retour sur investissement 3,3 fois'
					),
					array(
						'imgs' => array(
							'result.png',
							'creo-1.png',
							'creo-2.png',
						),
						'rows' => array(
							array(
								'title' => 'Domaine ',
								'desc' => "Renovation de maisons et d'appartements",
							),
							array(
								'title' => 'Pays ',
								'desc' => 'France (Nice)',
							),
							array(
								'title' => 'Problème ',
								'desc' => 'flux de clients instable et faible taux de conversion des ventes',
							),
							array(
								'title' => 'Recommandations ',
								'desc' => 'développer une ligne de produits, segmenter le public cible, créer une offre pertinente pour chaque segment, lancer des publicités Facebook',
							),
						),
						'result' => "en moins de 3 mois, >20 demandes de rénovations et >45 demandes d'architectes de coopération ont été reçues, dont 5 clients pour une facture moyenne de 80.000 €."
					),
					array(
						'imgs' => array(
							'result.png',
							'creo-1.jpg',
							'creo-2.jpg',
						),
						'rows' => array(
							array(
								'title' => 'Domaine ',
								'desc' => 'Formation complémentaire (stages de formation et reconversion du personnel)',
							),
							array(
								'title' => 'Pays ',
								'desc' => 'Russie (Moscou)',
							),
							array(
								'title' => 'Problème ',
								'desc' => 'Pas de connaissance comment promouvoir de manière rentable plusieurs cours',
							),
							array(
								'title' => 'Recommandations ',
								'desc' => "créer un site Web d'entreprise et des mini-landings pour chaque cours, diffuser des publicités sur Facebook",
							),
						),
						'result' => "en 6 mois, ≈2000 demandes de formation ont été reçues, 820 000 ₽ (≈10 000 €) ont été dépensés, ≈50 000 € ont été gagnés, et c'est sans compter les candidatures venues sur le site indépendamment des publicités."
					),
					array(
						'imgs' => array(
							'result.png',
							'creo-1.jpg',
							'creo-2.jpg',
						),
						'rows' => array(
							array(
								'title' => 'Domaine ',
								'desc' => 'Application pour les professionnels de la beauté et les clients',
							),
							array(
								'title' => 'Pays ',
								'desc' => 'France',
							),
							array(
								'title' => 'Problème ',
								'desc' => "faible conversion des inscriptions à l'application via le site et via les installations direct",
							),
							array(
								'title' => 'Recommandations ',
								'desc' => "modifier le texte sur le site et le design, finaliser l'application mobile",
							),
						),
						'result' => "la conversion des sites et des installations a augmenté de 25 %. Au cours de l'année de coopération, plus de 2000 utilisateurs ont été attirés avec un budget de 10 à 15 euros par jour."
					),
					array(
						'imgs' => array(
							'result.png',
							'creo-1.jpg',
							'creo-2.jpg',
						),
						'rows' => array(
							array(
								'title' => 'Domaine ',
								'desc' => 'maquillage permanent',
							),
							array(
								'title' => 'Pays ',
								'desc' => 'France',
							),
							array(
								'title' => 'Problème ',
								'desc' => "Travail perdu pendant la pandémie, le désir d'accroître la sensibilisation sur le marché",
							),
							array(
								'title' => 'Recommandations ',
								'desc' => "diffuser des publicités FB/INSTA sur Taplink prêt à l'emploi, ainsi que dans les messageries Facebook/WhatsApp",
							),
						),
						'result' => '3 à 7 clients par mois stables pendant la pandémie avec un budget de 5-7 euros par jour.'
					),
				);
				?>
				<?php foreach ($cases as $key => $case) : ?>
					<?php
					$current_case = ++$key;
					$case_img_path = "{$host_url}/img/cases/{$current_case}/"
					?>
					<article class="swiper-slide cases-slider-slide cases-case">
						<picutre data-case="<?php echo "case-{$key}"; ?>" class="pincher cases-case__pic"><img data-case="<?php echo "case-{$key}"; ?>" data-src="<?php echo "{$case_img_path}{$case['imgs'][0]}"; ?>" alt="qurydigital" class="cases-case__img lazy" /></picutre>
						<?php foreach ($case['rows'] as $row) : ?>
							<p class="cases-case__row">
								<span class="cases-case__title"><?php echo $row['title']; ?>:</span><span class="cases-case__decs"><?php echo $row['desc']; ?></span>
							</p>
						<?php endforeach; ?>
						<p class="cases-case__row">
							<span class="cases-case__title">Résultat :</span><span class="cases-case__decs cases-case__decs--result">
								<?php echo $case['result']; ?>
							</span>
						</p>
					</article>
				<?php endforeach; ?>
			</div>
			<div class="swiper-pagination cases-slider__pagination"></div>
			<div class="swiper-scrollbar cases-slider__scrollbar"></div>
		</div>

		<div class="cases-popup">
			<?php foreach ($cases as $key => $case) : ?>
				<?php
				$current_case = ++$key;
				$case_img_path = "{$host_url}/img/cases/{$current_case}/"
				?>
				<div data-case="<?php echo "case-{$key}"; ?>" class="swiper cases-popup-slider">
					<div class="swiper-wrapper">
						<?php foreach ($case['imgs'] as $img) : ?>
							<div class="swiper-slide cases-popup-slider-slide">
								<div class="cases-popup-slider-slide__inner">
									<img class="cases-popup__pic lazy" data-src="<?php echo "{$case_img_path}{$img}"; ?>" alt="qurydigital">
								</div>
							</div>
						<?php endforeach; ?>
					</div>
					<div class="swiper-pagination cases-popup-slider__pagination"></div>
					<div class="swiper-button-prev cases-popup-slider__button-prev"></div>
					<div class="swiper-button-next cases-popup-slider__button-next"></div>
					<div class="swiper-scrollbar cases-popup-slider__scrollbar"></div>
				</div>
			<?php endforeach; ?>
			<div class="cases-popup__hint">
				<svg class="cases-popup__swipe-icon" xmlns="http://www.w3.org/2000/svg">
					<g fill="none">
						<path d="M17.506 12.59c-.452-2.69-2.19-3.17-3.018-3.245-.624-.816-1.514-1.262-2.54-1.262-.22 0-.443.02-.668.06-.607-.725-1.444-1.12-2.397-1.12-.72 0-1.355.225-1.793.482l-1.785-5.61C4.94.732 3.975 0 2.792 0 1.897 0 1.056.427.542 1.128c-.5.677-.625 1.525-.357 2.38l2.253 7.088c-.32.184-.604.43-.84.727-.46.58-.737 1.347-.82 2.28-.124 1.387.335 2.933 1.363 4.595.7 1.12 1.47 1.994 1.79 2.334l1.06 2.48c.26.606.85.988 1.51.988h7.05c.806 0 1.487-.563 1.62-1.354l.01-.05.297-2.468.048-.108c1.58-3.596 2.23-6.025 1.997-7.43zm-3.118 7.18c-.015.037-.026.075-.033.114l-.31 2.57c-.04.247-.255.417-.504.417H6.5c-.205 0-.39-.11-.472-.3L4.92 19.99c-.023-.057-.057-.106-.1-.15-.452-.475-3.158-3.432-2.918-6.13.143-1.597.92-2.114 1.45-2.28.268-.085.413-.373.33-.64l-2.42-7.61c-.38-1.21.584-2.026 1.53-2.026.6 0 1.195.33 1.436 1.097l2.07 6.5c.073.23.284.36.495.36.148 0 .297-.06.4-.2.085-.113.188-.222.31-.316.272-.21.8-.432 1.38-.432.594 0 1.24.237 1.707.96.1.15.264.24.437.24.048 0 .095-.007.143-.02.205-.06.478-.116.78-.116.58 0 1.268.21 1.773 1.01.095.15.258.24.434.24h.07c.607 0 1.822.266 2.166 2.316.32 1.903-1.766 6.43-2.004 6.992z" fill="#8a2dd6" />
						<path class="cases-popup__swipe-arrow" d="M9.766 3.294h5.505l-1.21 1.213c-.22.22-.22.578 0 .8.11.11.26.164.4.164.15 0 .29-.05.4-.16l2.11-2.11c.22-.22.22-.58 0-.8L14.8.24c-.22-.22-.577-.22-.797 0-.22.22-.22.578 0 .798l1.128 1.13H9.77c-.312 0-.564.252-.564.563 0 .31.252.56.564.56z" fill="#8a2dd6" />
					</g>
				</svg>
			</div>
		</div>
	</div>
	<div class="cases-decor__bottom"></div>
</section>
