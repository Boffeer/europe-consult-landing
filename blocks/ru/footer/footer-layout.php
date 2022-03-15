<?php $host_url = "//{$_SERVER['SERVER_NAME']}"; ?>
<footer class="footer">
	<div class="container footer__container">
		<a href="#" class="footer-branding branding"><img src="<?php echo $host_url; ?>/img/common/on-logo.png" alt="Узнайте как привлекать клиентов" class="footer-branding__logo branding__logo" /></a>
		<a href="tel:+<?php echo preg_replace('/\D/i', '', $global_links['phone']); ?>" class="footer__phone"><?php echo $global_links['phone']; ?></a>
		<div class="footer__legal">
			<a href="<?php echo $global_links['privacy']; ?>" target="_blank" class="footer__legal-link">Политика конфиденциальности</a>
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
		<p class="pop-thanks__desc">Я перезвоню вам в ближайшее время</p>
	</div>
	<form class="pop-callback">
		<h3 class="section__title pop-callback__title">Заполните форму</h3>
		<p class="section__subtitle pop-callback__subtitle">И получите консультацию</p>
		<label class="input__wrap input__wrap--name">
			<input class="input input--name" name="user_name" type="text" placeholder="Имя" maxlength="50">
		</label>
		<label class="input__wrap input__wrap--tel">
			<input class="input input--phone" name="user-tel" type="tel" placeholder="Телефон" maxlength="25" minlength="10" required inputmode="numeric">
		</label>
		<button class="button button--primary pop-callback__submit">Записаться</button>
	</form>
</div>
