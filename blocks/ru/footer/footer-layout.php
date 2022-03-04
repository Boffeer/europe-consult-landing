<?php $host_url = "//{$_SERVER['SERVER_NAME']}"; ?>
				<footer class="footer">
					<div class="container footer__container">
						<a href="#" class="footer-branding branding"
							><img
								src="<?php echo $host_url; ?>/img/common/on-logo.png"
								alt="Узнайте как привлекать клиентов"
								class="footer-branding__logo branding__logo"
						/></a>
						<a href="tel:+<?php echo preg_replace('/\D/i', '', $global_links['phone']); ?>" class="footer__phone"><?php echo $global_links['phone'];?></a>
						<div class="footer__legal">
							<a href="<?php echo $global_links['privacy']; ?>" class="footer__legal-link"
								>Политика конфиденциальности</a
							>
							<a href="<?php echo $global_links['offer']; ?>" class="footer__legal-link">Договор оферты</a>
						</div>
						<div class="footer__entry">
							<p class="footer__entry-item">СИРЕТ 910 223 593 00013</p>
							<p class="footer__entry-item">QURY MARKETING</p>
							<p class="footer__entry-item">Адрес: 4 avenue Jean de la Fontaine 06100 Nice</p>
						</div>
						<p class="footer__rights">Все права защищены</p>
					</div>
				</footer>
			</div>
		</div>

		<div class="popups">
			<div class="pop-thanks">
				<p class="pop-thanks__title">Спасибо, ваша заявка отправлена</p>
				<p class="pop-thanks__desc">Мы перезвоним вам в ближайшее время</p>
			</div>
			<div class="pop-pinch">
				<picutre class="cases-case__pic"
					><img src="<?php echo $host_url; ?>/img/pinch.jpg" alt="" class="cases-case__img"
				/></picutre>
			</div>
		</div>
