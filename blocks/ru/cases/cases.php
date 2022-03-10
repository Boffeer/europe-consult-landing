
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
				<div class="cases-popup__hint">
					<svg class="cases-popup__swipe-icon" xmlns="http://www.w3.org/2000/svg"><g fill="none"><path d="M17.506 12.59c-.452-2.69-2.19-3.17-3.018-3.245-.624-.816-1.514-1.262-2.54-1.262-.22 0-.443.02-.668.06-.607-.725-1.444-1.12-2.397-1.12-.72 0-1.355.225-1.793.482l-1.785-5.61C4.94.732 3.975 0 2.792 0 1.897 0 1.056.427.542 1.128c-.5.677-.625 1.525-.357 2.38l2.253 7.088c-.32.184-.604.43-.84.727-.46.58-.737 1.347-.82 2.28-.124 1.387.335 2.933 1.363 4.595.7 1.12 1.47 1.994 1.79 2.334l1.06 2.48c.26.606.85.988 1.51.988h7.05c.806 0 1.487-.563 1.62-1.354l.01-.05.297-2.468.048-.108c1.58-3.596 2.23-6.025 1.997-7.43zm-3.118 7.18c-.015.037-.026.075-.033.114l-.31 2.57c-.04.247-.255.417-.504.417H6.5c-.205 0-.39-.11-.472-.3L4.92 19.99c-.023-.057-.057-.106-.1-.15-.452-.475-3.158-3.432-2.918-6.13.143-1.597.92-2.114 1.45-2.28.268-.085.413-.373.33-.64l-2.42-7.61c-.38-1.21.584-2.026 1.53-2.026.6 0 1.195.33 1.436 1.097l2.07 6.5c.073.23.284.36.495.36.148 0 .297-.06.4-.2.085-.113.188-.222.31-.316.272-.21.8-.432 1.38-.432.594 0 1.24.237 1.707.96.1.15.264.24.437.24.048 0 .095-.007.143-.02.205-.06.478-.116.78-.116.58 0 1.268.21 1.773 1.01.095.15.258.24.434.24h.07c.607 0 1.822.266 2.166 2.316.32 1.903-1.766 6.43-2.004 6.992z" fill="#8a2dd6"/><path class="cases-popup__swipe-arrow" d="M9.766 3.294h5.505l-1.21 1.213c-.22.22-.22.578 0 .8.11.11.26.164.4.164.15 0 .29-.05.4-.16l2.11-2.11c.22-.22.22-.58 0-.8L14.8.24c-.22-.22-.577-.22-.797 0-.22.22-.22.578 0 .798l1.128 1.13H9.77c-.312 0-.564.252-.564.563 0 .31.252.56.564.56z" fill="#8a2dd6"/></g></svg>
				</div>
			</div>
	</div>
	<div class="cases-decor__bottom"></div>
</section>
