
<section class="cases">
	<div class="cases-decor__top"></div>
	<div class="container cases__container">
		<h2 class="section__title cases__title">
			Вот что получилось у&nbsp;людей
			<span class="section__title--color">после внедрения</span> всех
			рекомендаций
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
									'title' => 'Ниша',
									'desc' => 'экспертиза авто',
								),
								array(
									'title' => 'Страна',
									'desc' => 'Германия (Штутгарт)',
								),
								array(
									'title' => 'Проблема',
									'desc' => 'нестабильный поток клиентов',
								),
								array(
									'title' => 'Решение',
									'desc' => 'создать продающий сайт и настроить рекламу в Google',
								),
							),
							'result' => 'за 1.5 года ежемесячные затраты на рекламный бюджет ≈3000 €, ≈30-40 клиентов, выручка ≈10 000 €, окупаемость в 3.3 раза'
						),
						array(
							'imgs' => array(
								'result.png',
								'creo-1.png',
								'creo-2.png',
							),
							'rows' => array(
								array(
									'title' => 'Ниша',
									'desc' => 'отделка домов и квартир',
								),
								array(
									'title' => 'Страна',
									'desc' => 'Франция (Ницца)',
								),
								array(
									'title' => 'Проблема',
									'desc' => 'нестабильный поток клиентов и низкая конверсия в продажу',
								),
								array(
									'title' => 'Решение',
									'desc' => 'проработать продуктовую линейку, сегментировать целевую аудиторию, создать для каждого сегмента релевантное предложение, запустить рекламу в Facebook',
								),
							),
							'result' => 'меньше чем за 3 месяца получено >20 заявок от клиентов и >45 заявок от архитекторов для сотрудничества , из них 5 клиентов на средний чек 80 000 €.'
						),
						array(
							'imgs' => array(
								'result.png',
								'creo-1.jpg',
								'creo-2.jpg',
							),
							'rows' => array(
								array(
									'title' => 'Ниша',
									'desc' => 'дополнительно образование (курсы повышения квалификации и переподготовка кадров)',
								),
								array(
									'title' => 'Страна',
									'desc' => 'Россия (Москва)',
								),
								array(
									'title' => 'Проблема',
									'desc' => 'не знали как выгодно продвигать множество курсов',
								),
								array(
									'title' => 'Решение',
									'desc' => 'создать корпоративный сайт и мини-лендинги на каждый курс, запустить рекламу в Facebook',
								),
							),
							'result' => 'за 6 месяцев получено ≈2000 заявок на обучение, потрачено 820 000 ₽ (≈10 000 €), заработано ≈50 000 € и это не считая заявок, которые пришли на сайт органически'
						),
						array(
							'imgs' => array(
								'result.png',
								'creo-1.jpg',
								'creo-2.jpg',
							),
							'rows' => array(
								array(
									'title' => 'Ниша',
									'desc' => 'приложение для бьюти мастеров и клиентов',
								),
								array(
									'title' => 'Страна',
									'desc' => 'Франция',
								),
								array(
									'title' => 'Проблема',
									'desc' => 'низкая конверсия регистраций в приложение через сайт и через установки напрямую',
								),
								array(
									'title' => 'Решение',
									'desc' => 'изменить текст на сайте и дизайн, доработать мобильное приложение',
								),
							),
							'result' => 'конверсия сайта и установок поднялась на 25%. За год сотрудничества было привлечено более  >2000 пользователей с бюджетом 10-15 евро в день.'
						),
						array(
							'imgs' => array(
								'result.png',
								'creo-1.jpg',
								'creo-2.jpg',
							),
							'rows' => array(
								array(
									'title' => 'Ниша',
									'desc' => 'перманентный макияж',
								),
								array(
									'title' => 'Страна',
									'desc' => 'Франция',
								),
								array(
									'title' => 'Проблема',
									'desc' => 'Пропала работа в пандемию, желание увеличить узнаваемость на рынке',
								),
								array(
									'title' => 'Решение',
									'desc' => 'Запустить рекламу FB/INSTA на готовый Taplink, а также в мессенджеры Facebook/WhatsApp',
								),
							),
							'result' => 'от 3 до 7 клиентов в месяц стабильно в пандемию с бюджетом 5-7 евро в день'
						),
					);
				?>
				<?php foreach($cases as $key => $case) : ?>
					<?php
						$current_case = ++$key;
						$case_img_path = "{$host_url}/img/cases/{$current_case}/"
					?>
					<article class="swiper-slide cases-slider-slide cases-case">
						<picutre data-case="<?php echo "case-{$key}"; ?>" class="pincher cases-case__pic"
							><img
								data-case="<?php echo "case-{$key}"; ?>"
								src="<?php echo "{$case_img_path}{$case['imgs'][0]}"; ?>"
								alt=""
								class="cases-case__img"
						/></picutre>
						<?php foreach ($case['rows'] as $row) : ?>
							<p class="cases-case__row">
								<span class="cases-case__title"><?php echo $row['title']; ?>:</span
								><span class="cases-case__decs"><?php echo $row['desc']; ?></span>
							</p>
						<?php endforeach; ?>
						<p class="cases-case__row">
							<span class="cases-case__title">Решение:</span
							><span class="cases-case__decs cases-case__decs--result">
							<?php echo $case['result'];?>
							</span>
						</p>
					</article>
				<?php endforeach; ?>
			</div>
			<div class="swiper-pagination cases-slider__pagination"></div>
			<div class="swiper-scrollbar cases-slider__scrollbar"></div>
		</div>

		<div class="cases-popup">
		<?php foreach($cases as $key => $case) : ?>
			<?php
				$current_case = ++$key;
				$case_img_path = "{$host_url}/img/cases/{$current_case}/"
			?>
				<div data-case="<?php echo "case-{$key}"; ?>" class="swiper cases-popup-slider">
					<div class="swiper-wrapper">
						<?php foreach($case['imgs'] as $img) : ?>
							<div class="swiper-slide cases-popup-slider-slide">
								<div class="cases-popup-slider-slide__inner">
									<img class="cases-popup__pic" src="<?php echo "{$case_img_path}{$img}";?>" alt="">
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
			</div>

	</div>
	<div class="cases-decor__bottom"></div>
</section>
