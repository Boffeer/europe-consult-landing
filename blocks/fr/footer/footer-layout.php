<?php //$host_url = "//{$_SERVER['SERVER_NAME']}";
?>
<?php //$host_url = "//{$_SERVER['HTTP_HOST']}";
?>
<?php $host_url = "//{$_SERVER['SERVER_NAME']}"; ?>


<footer class="footer">
	<div class="container footer__container">
		<a href="#" class="footer-branding branding"><img src="/img/common/on-logo.png" alt="Узнайте как привлекать клиентов" class="footer-branding__logo branding__logo" /></a>
		<a href="tel:+<?php echo preg_replace('/\D/i', '', $global_links['phone']); ?>" class="footer__phone">
			<?php echo $global_links['phone']; ?>
		</a>
		<div class="footer__legal">
			<a href="<?php echo $global_links['privacy']; ?>" target="_blank" class="footer__legal-link">Politique de confidentialité</a>
		</div>
		<div class="footer__entry">
			<p class="footer__entry-item">SIRET 910 223 593 00013</p>
			<p class="footer__entry-item">QURY MARKETING</p>
			<p class="footer__entry-item">Adresse: 4 avenue Jean de la Fontaine 06100 Nice</p>
		</div>
		<p class="footer__rights">Tous les droits sont réservés</p>
	</div>
</footer>
</div>
</div>

<div class="popups">
	<div class="pop-thanks">
		<p class="pop-thanks__title">Grâce</p>
		<p class="pop-thanks__desc">Je vous rappellerai bientôt</p>
	</div>
	<div class="pop-pinch">
		<picutre class="cases-case__pic"><img src="<?php echo $host_url; ?>/img/pinch.jpg" alt="" class="cases-case__img" /></picutre>
	</div>
	<form class="pop-callback">
		<?php $current_url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
		<input name="form_page" hidden type="text" value="<?php echo $current_url; ?>">
		<input name="form_name" hidden type="text" value="Форма в шапке">
		<h3 class="section__title pop-callback__title">Remplissez le formulaire</h3>
		<p class="section__subtitle pop-callback__subtitle">Et obtenez une consultation</p>
		<label class="input__wrap input__wrap--name">
			<input class="input input--name" name="user_name" type="text" placeholder="Nom - Prenom" maxlength="50">
		</label>
		<label class="input__wrap input__wrap--tel">
			<input class="input input--phone" name="user-tel" type="tel" placeholder="Numero de téléphone" maxlength="25" minlength="10" required inputmode="numeric">
		</label>
		<button class="button button--primary pop-callback__submit">Réserver le rendez-vous en ligne</button>
	</form>
</div>
