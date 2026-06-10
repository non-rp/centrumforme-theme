<?php

?>
</main>
<footer id="footer" class="footer --f-terapevt">
			<div class="footer__container">
				<div class="footer__top">
					<div class="footer__column">
						<h2 class="footer__title title">Zgłoś się do nas!</h2>
						<p class="footer__desc description">
						Jeżeli szukasz pracy w zespole specjalistów nastawionych na współpracę, wymianę
doświadczeń i rozwój zawodowy.
						</p>
						<br>
						<br>
						<div class="footer__column">
							<h3 class="footer__col-title">
								Dane kontaktowe:
							</h3>
							<div class="footer__contacts footer-contact">
								<div class="footer-contact__row">
									<div class="footer-contact__icon"><img src="/wp-content/uploads/2022/10/location.svg" alt=""> </div>
									<span> Warszawa</span>
								</div>
								<div class="footer-contact__row">
									<div class="footer-contact__icon"><img src="/wp-content/uploads/2022/10/phone-call.svg" alt=""> </div>
									<span class="contact-item"><a href="tel:+48500505101">500 505 101</a><br>
									</span>
								</div>
								<div class="footer-contact__row">
									<div class="footer-contact__icon"><img src="/wp-content/uploads/2022/10/email.svg" alt=""> </div>
									<span class="contact-item"><a href="mailto:kontakt@centrumforme.pl">kontakt@centrumforme.pl</a></span>
								</div>
								
								<div class="footer-contact__row">
									<div class="footer-contact__icon"><a href="https://www.facebook.com/profile.php?id=100089830291607"><img src="/wp-content/uploads/2023/09/fb-2.png" alt=""></a></div>
									<div class="footer-contact__icon"><a href="https://www.instagram.com/centrum_psychoterapii_forme/"><img src="/wp-content/uploads/2023/09/insta.png" alt=""></a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="footer__column">
						<h3 class="footer__col-title">
							Wypełnij formularz zgłoszeniowy
						</h3>
						<div class="footer__form">
							<?php echo do_shortcode('[contact-form-7 id="125" title="Terapevts"]'); ?>
						</div>
					</div>

				</div>
			</div>

			<div class="footer__bottom">
				<section class="header">
					<div class="header__container">
						<a href="" class="header__logo"><img src="/wp-content/uploads/2022/10/heade-logo.svg" alt=""></a>

						<div class="header__menu menu">
							<nav class="menu__body">
								<ul class="menu__list">
									<li class="menu__item"><a href="/psychoterapia" class="menu__link">Terapia</a></li>
									<li class="menu__item"><a href="/dla-rodzicow" class="menu__link">Dla rodziców</a></li>
									<li class="menu__item"><a href="/dla-nauczycieli" class="menu__link">Dla nauczycieli</a></li>
									<li class="menu__item"><a href="/dla-terapeutow" class="menu__link">Dla terapeutów</a></li>
									<li class="menu__item"><a href="/kategoria/aktualnosci" class="menu__link">Blog</a></li>
									<li class="menu__item"><a href="#footer" class="menu__link">Kontakt</a></li>
									<li class="menu__item header__button"><a href="/znajdz-terapeute" class="menu__link">Znajdź
											terapeutę</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</section>
			</div>

			<div class="footer__copyright">
				<div class="rools">
					<p><a href="/polityka-prywatnosci/">Polityka prywatności</a></p>
					<p><a href="/regulamin-platformy-forme/">Regulamin platformy ForMe</a></p>
				</div>
				<p>FORME © All rights reserved 2022</p>
			</div>

		</footer>


	<div id="popup-send" class="popup-appointmetn popup-webinary">
		<div class="popup-appointmetn__wrapper">
			<div class="popup-appointmetn__content popup__content">
				<button data-close type="button" class="popup-appointmetn__close"><img src="/wp-content/uploads/2022/10/popup-close.svg" alt=""></button>
				<h3 class="popup-appointmetn__title title">Informacje</h3>
				<div class="popup-appointmetn__info">

					<div class="popup-appointmetn__column popup-column">

						<div class="popup-column__text">
						Twoja wiadomość została wysłana. Dziękujemy!
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="overlay" style="display: none;"></div>	

<?php wp_footer(); ?>

</body>
</html>