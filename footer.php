<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Forme
 */

?>
</main>
<footer id="footer" class="footer">
			<div class="footer__container">
				<div class="footer__top">
					<div class="footer__column">
						<h2 class="footer__title title">Centrum psychoterapii Forme</h2>
						<p class="footer__desc description">
							Jeżeli doświadczasz w życiu trudności, potrzebujesz wsparcia lub porady psychologicznej — zapraszamy
							do kontaktu!
						</p>
					</div>
					<div class="footer__column">
						<h3 class="footer__col-title">
							Napisz i zarezerwuj wizytę!
						</h3>
						<div class="footer__form">
							<?php echo do_shortcode('[contact-form-7 id="111" title="Footer"]'); ?>
						</div>
					</div>

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
                    <p><a href="/polityka-oraz-procedury-ochrony-dzieci-przed-krzywdzeniem/">Polityka oraz procedury ochrony dzieci przed krzywdzeniem</a></p>
					<p><a href="/regulamin-platformy-forme/">Regulamin platformy ForMe</a></p>
				</div>
				
				<p>FORME © All rights reserved 2022</p>
			</div>

		</footer>
	</div>
	<div id="popup-instruction" aria-hidden="true" class="popup-instruction">
		<div class="popup-instruction__wrapper">
			<div class="popup-instruction__content">
				<!-- <button data-close type="button" class="popup-instruction__close">Закрыть</button> -->
				<div class="popup-instruction__title title">Jak korzystać z platformy ForMe:</div>



				<div class="popup-instruction__text">

					Wybierz dogodny termin, zarezerwuj i opłać.<br>
					Jeżeli nie znajdujesz terminu do wybranego specjalisty skontaktuj się z nami poprzez formularz kontaktowy.<br>
					Odbierz mail z linkiem do spotkania.<br>
 					<br>



					Centrum ForMe wykorzystuje Google Meet do prowadzenia spotkań.<br> <br>

					<b>Jak dołączyć do rozmowy za pomocą zaproszenia na spotkanie?</b><br>
						
Kliknij lub przekopiuj otrzymany link, wybierz "Chcę dołączyć" i poczekaj, aż specjalista zatwierdzi Twoje dołączenie.


					<br> <br>


					<b>Udział w spotkaniu nie wymaga posiadania żadnego konta, aplikacji ani logowania się.</b>

					<br><br>

					Wykorzystujemy komunikator Google Meet ze względu na jego wysoki poziom bezpieczeństwa.

					<br><br>

					<b>W celu zapewnienia komfortu i prywatności spotkania proponujemy: </b> <br><br>

					<ul>
						<li>- sprawdzenie jakości połączenia internetowego i gotowości działania urządzenia,</li>
						<li>- ustawienie widoku kamery w odległości, która pozwoli widzieć Twoją twarz,</li>
						<li>- znalezienie miejsca zapewniającego możliwość swobodnej rozmowy bez udziału innych osób.</li>
					</ul>

					<br>

					<b>Odwołanie wizyty</b> <br>
					Wizytę możesz bezpłatnie zmienić lub odwołać 24 godziny przed sesją.
				</div>
			</div>
			<img class="popup-instruction__bg" src="/wp-content/uploads/2022/10/popup-bg.svg" alt="">
			<img class="popup-instruction__bg" src="/wp-content/uploads/2022/10/popup-bg.svg" alt="">
		</div>
	</div>


	<!-- Appointment -->

	<div id="popup-appointmetn-1" class="popup-appointmetn">
		<div class="popup-appointmetn__wrapper">
			<div class="popup-appointmetn__content popup__content">
				<button data-close type="button" class="popup-appointmetn__close"><img src="/wp-content/uploads/2022/10/popup-close.svg" alt=""></button>
				<h3 class="popup-appointmetn__title title">Problemy emocjonalne u dzieci i młodzieży</h3>
				<div class="popup-appointmetn__info">

					<div class="popup-appointmetn__column popup-column">
						<h3 class="popup-column__title">
							Cele:
						</h3>
						<div class="popup-column__text">
							<ul class="popup-column__check">
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Umiejętność rozpoznawania problemów emocjonalnych w zakresie zdrowia psychicznego uczniów;

								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									poznanie form udzielania wsparcia uczniom;
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>

									wybranie i przećwiczenie form i sposobów udzielania pomocy uczniom.
								</li>
							</ul>
						</div>

					</div>
					<div class="popup-appointmetn__column popup-column">
						<h3 class="popup-column__title">
							Plan szkolenia:
						</h3>
						<div class="popup-column__text">
							<ul class="popup-column__check">
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									1. Sytuacja dzieci i młodzieży w obecnym świecie.
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									2. Rozpoznawanie problemów emocjonalnych uczniów.
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									3. Formy wsparcia psychicznego dzieci przez placówki oświatowe.
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									4. Formy i sposoby pomocy, praktyczne przykłady.
								</li>
							</ul>
						</div>

					</div>

				</div>

				<div class="popup-appointmetn__form popup-form">
					<h3 class="popup-form__title title">Jesteś zainteresowany szkoleniem?</h3>
					<p class="popup-form__description description">Wypełnij formularz, aby zarezerwować dogodny termin. Skontaktujemy się z Tobą!</p>
					<?php echo do_shortcode('[contact-form-7 id="152" title="Appointment"]'); ?>
					<div class="popup-form__bg"></div>
					
				</div>



			</div>
		</div>
	</div>

	<div id="popup-appointmetn-2" class="popup-appointmetn">
		<div class="popup-appointmetn__wrapper">
			<div class="popup-appointmetn__content popup__content">
				<button data-close type="button" class="popup-appointmetn__close"><img src="/wp-content/uploads/2022/10/popup-close.svg" alt=""></button>
				<h3 class="popup-appointmetn__title title">Depresja u dzieci i młodzieży</h3>
				<div class="popup-appointmetn__info">

					<div class="popup-appointmetn__column popup-column">
						<h3 class="popup-column__title">
							Cele:
						</h3>
						<div class="popup-column__text">
							<ul class="popup-column__check">
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Poznanie objawów depresji u dzieci
									i młodzieży.
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Zrozumienie, jak postrzega świat i relacje rówieśnicze dziecko z depresją.
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Poznanie strategii działania w sytuacji podejrzenia depresji u ucznia.
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Budowanie strategii wsparcia dziecka w placówce edukacyjnej.
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Przygotowanie się do rozmowy
									z rodzicami.

								</li>
							</ul>
						</div>

					</div>
					<div class="popup-appointmetn__column popup-column">
						<h3 class="popup-column__title">
							Plan szkolenia:
						</h3>
						<div class="popup-column__text">
							<ul class="popup-column__check">
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									1. Symptomy depresji u dzieci i młodzieży.
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									2. Przyczyny depresji.
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									3. Grupy ryzyka.
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									4. Jak postrzega świat i rówieśników dziecko z depresją?
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									5. Co zrobić, kiedy podejrzewamy u dziecka depresje?
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									6. Jak rozmawiać z dzieckiem?
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									7. Jak wspierać dziecko, które ma obniżony nastrój/depresję w placówce edukacyjnej?
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									8. Jak rozmawiać z rodzicem?
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									9. Ryzyko samobójcze.
								</li>
							</ul>
						</div>

					</div>

				</div>

				<div class="popup-appointmetn__form popup-form">
					<h3 class="popup-form__title title">Jesteś zainteresowany szkoleniem?</h3>
					<p class="popup-form__description description">Wypełnij formularz, aby zarezerwować dogodny termin. Skontaktujemy się z Tobą!</p>
					<?php echo do_shortcode('[contact-form-7 id="152" title="Appointment"]'); ?>
					<div class="popup-form__bg"></div>

				</div>



			</div>
		</div>
	</div>

	<div id="popup-appointmetn-3" class="popup-appointmetn">
		<div class="popup-appointmetn__wrapper">
			<div class="popup-appointmetn__content popup__content">
				<button data-close type="button" class="popup-appointmetn__close"><img src="/wp-content/uploads/2022/10/popup-close.svg" alt=""></button>
				<h3 class="popup-appointmetn__title title">
					Zaburzenia lękowe u dzieci i młodzieży - wsparcie dziecka, które się boi lub które jest nadmiernie nieśmiałe.
				</h3>
				<div class="popup-appointmetn__info">

					<div class="popup-appointmetn__column popup-column">
						<h3 class="popup-column__title">
							Cele:
						</h3>
						<div class="popup-column__text">
							<ul class="popup-column__check">
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									umiejętność rozróżnienia, które lęki są typowe dla wieku rozwojowego, a kiedy warto skierować dziecko do specjalisty.
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									poznanie najczęstszych rodzajów zaburzeń lękowych wieku dziecięcego.
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									zrozumienie, jak dziecko przeżywające silny lęk odbiera świat i sytuacje rówieśnicze.
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									poznanie mechanizmu działania lęku i czynników które go podtrzymują.
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									poznanie sposobów wsparcia dziecka w placówce edukacyjnej.
								</li>
							</ul>
						</div>

					</div>
					<div class="popup-appointmetn__column popup-column">
						<h3 class="popup-column__title">
							Plan szkolenia:
						</h3>
						<div class="popup-column__text">
							<ul class="popup-column__check">
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									1. Lęk jako część życia - to normalne, żeby się bać.
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									2. Nieśmiałość a lęk.
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									3. Najczęstsze zaburzenia lękowe występujące u dzieci.
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									4. Jak postrzega świat dziecko, które przeżywa nadmierny lęk?
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									5. Mechanizm działania lęku – dlaczego lęk nie mija?
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									6. Jak wspierać dziecko, które przeżywa silny lęk?
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									7. Jak rozmawiać z rodzicem?
								</li>
							</ul>
						</div>

					</div>

				</div>

				<div class="popup-appointmetn__form popup-form">
					<h3 class="popup-form__title title">Jesteś zainteresowany szkoleniem?</h3>
					<p class="popup-form__description description">Wypełnij formularz, aby zarezerwować dogodny termin. Skontaktujemy się z Tobą!</p>
					<?php echo do_shortcode('[contact-form-7 id="152" title="Appointment"]'); ?>
					<div class="popup-form__bg"></div>

				</div>



			</div>
		</div>
	</div>

	<div id="popup-appointmetn-4" class="popup-appointmetn">
		<div class="popup-appointmetn__wrapper">
			<div class="popup-appointmetn__content popup__content">
				<button data-close type="button" class="popup-appointmetn__close"><img src="/wp-content/uploads/2022/10/popup-close.svg" alt=""></button>
				<h3 class="popup-appointmetn__title title">Uczeń z Zespołem Aspergera - jak go zrozumieć? Jak z nim pracować w szkole?</h3>
				<div class="popup-appointmetn__info">

					<div class="popup-appointmetn__column popup-column">
						<h3 class="popup-column__title">
							Cele:
						</h3>
						<div class="popup-column__text">
							<ul class="popup-column__check">
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Zrozumienie, jak funkcjonuje umysł ucznia, który ma diagnozę Zespołu Aspergera.
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Poznanie skutecznych sposobów komunikowania się z uczniem.
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Konstruowanie zrozumiałych poleceń, budowanie współpracy i więzi z dzieckiem.
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Poznanie strategii działania w sytuacjach, w których uczeń ma wybuchy złości/agresji.
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Poznanie metod i narzędzi, które pomagają dziecku budować kompetencje społeczne i rozwiązywać trudne sytuacje rówieśnicze.
								</li>
							</ul>
						</div>

					</div>
					<div class="popup-appointmetn__column popup-column">
						<h3 class="popup-column__title">
							Plan szkolenia:
						</h3>
						<div class="popup-column__text">
							<ul class="popup-column__check">
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									1. Zespół Aspergera jako zaburzenie neurorozwojowe – co to znaczy w praktyce?
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									2. Trudności w funkcjonowaniu społecznym.
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									3. Trudności w komunikacji.
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									4. Zainteresowania i czynności rutynowe.
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									5. Zaburzenia integracji sensorycznej.
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									6. Teoria umysłu, centralna koherencja.
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									7. Metody pracy z dzieckiem z Zespołem Aspergera: wydawanie skutecznych poleceń, budowanie współpracy i więzi
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									8. Narzędzia pomocne przy radzeniu sobie z wybuchami złości/agresją
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									9. Metody wspierające rozwój umiejętności społecznych i budowanie relacji z rówieśnikami
								</li>
							</ul>
						</div>

					</div>

				</div>

				<div class="popup-appointmetn__form popup-form">
					<h3 class="popup-form__title title">Jesteś zainteresowany szkoleniem?</h3>
					<p class="popup-form__description description">Wypełnij formularz, aby zarezerwować dogodny termin. Skontaktujemy się z Tobą!</p>
					<?php echo do_shortcode('[contact-form-7 id="152" title="Appointment"]'); ?>
					<div class="popup-form__bg"></div>

				</div>



			</div>
		</div>
	</div>

	<div id="popup-appointmetn-5" class="popup-appointmetn">
		<div class="popup-appointmetn__wrapper">
			<div class="popup-appointmetn__content popup__content">
				<button data-close type="button" class="popup-appointmetn__close"><img src="/wp-content/uploads/2022/10/popup-close.svg" alt=""></button>
				<h3 class="popup-appointmetn__title title">Stres w dzisiejszych czasach </h3>
				<div class="popup-appointmetn__info">

					<div class="popup-appointmetn__column popup-column">
						<h3 class="popup-column__title">
							Cele:
						</h3>
						<div class="popup-column__text">
							<ul class="popup-column__check">
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Uporządkowanie powszechnej wiedzy o stresie.
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Nauka rozpoznawania stresorów w bliskim otoczeniu.
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Nabycie świadomości działania i konsekwencji stresu.
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Poznanie sposobów radzenia sobie i zarządzania stresem.
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Tworzenie własnych strategii na regenerację.
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Profilaktyka stresu w codziennym życiu.
								</li>
							</ul>
						</div>

					</div>
					<div class="popup-appointmetn__column popup-column">
						<h3 class="popup-column__title">
							Plan szkolenia:
						</h3>
						<div class="popup-column__text">
							<ul class="popup-column__check">
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									1. Co to jest stres?
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									2. Jakie stresory mamy w otoczeniu?
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									3. Jak rozpoznać symptomy stresu? 
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									4. Jakie są skutki działania stresu?
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									5. Radzenie sobie i zarządzanie stresem.
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									6. Regeneracja i profilaktyka
								</li>
							</ul>
						</div>

					</div>

				</div>

				<div class="popup-appointmetn__form popup-form">
					<h3 class="popup-form__title title">Jesteś zainteresowany szkoleniem?</h3>
					<p class="popup-form__description description">Wypełnij formularz, aby zarezerwować dogodny termin. Skontaktujemy się z Tobą!</p>
					<?php echo do_shortcode('[contact-form-7 id="152" title="Appointment"]'); ?>
					<div class="popup-form__bg"></div>

				</div>



			</div>
		</div>
	</div>

	<div id="popup-appointmetn-6" class="popup-appointmetn">
		<div class="popup-appointmetn__wrapper">
			<div class="popup-appointmetn__content popup__content">
				<button data-close type="button" class="popup-appointmetn__close"><img src="/wp-content/uploads/2022/10/popup-close.svg" alt=""></button>
				<h3 class="popup-appointmetn__title title">Uczeń z ADHD - jak go zrozumieć? Sposoby pracy na terenie szkoły.</h3>
				<div class="popup-appointmetn__info">

					<div class="popup-appointmetn__column popup-column">
						<h3 class="popup-column__title">
							Cele:
						</h3>
						<div class="popup-column__text">
							<ul class="popup-column__check">
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Zrozumienie, jak funkcjonuje umysł ucznia, który ma diagnozę nadpobudliwości psychoruchowe.
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Poznanie metod pracy skutecznych przy problemach z koncentracją uwagi w trakcie lekcji szkolnych.
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Rozróżnianie, które zachowania wynikają z trudności ucznia, a które mogą być celowym działaniem.
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Poznanie sposobów reakcji na zachowania impulsywne.
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Poznanie sposobów radzenia sobie z nasiloną ruchliwością.
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									poznanie skutecznych sposobów komunikowania się z uczniem – konstruowanie zrozumiałych poleceń, budowanie współpracy i więzi z dzieckiem.
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Poznanie strategii działania w sytuacjach, w których uczeń ma wybuchy złości/agresji.
								</li>
							</ul>
						</div>

					</div>
					<div class="popup-appointmetn__column popup-column">
						<h3 class="popup-column__title">
							Plan szkolenia:
						</h3>
						<div class="popup-column__text">
							<ul class="popup-column__check">
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									1. ADHD jako zaburzenie neurorozwojowe – co to oznacza w praktyce?
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									2. Charakterystyczne cechy ucznia z ADHD: problemy z koncentracją uwagi, nasilona ruchliwość, impulsywność.
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									3. Rozróżnianie zachowań wynikających z trudności ucznia od celowego łamania ustalonych zasad.
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									4. Metody pracy z dzieckiem, które ma problemy z koncentracja uwagi.
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									5. Metody pracy z dzieckiem impulsywnym.
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									6. Sposoby działania przy nasilonej potrzebie ruchu.
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									7. Strategie działania przy wybuchach złości, pomoc w regulacji emocji.
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									8. Reagowanie na zachowania agresywne.
								</li>
							</ul>
						</div>

					</div>

				</div>

				<div class="popup-appointmetn__form popup-form">
					<h3 class="popup-form__title title">Jesteś zainteresowany szkoleniem?</h3>
					<p class="popup-form__description description">Wypełnij formularz, aby zarezerwować dogodny termin. Skontaktujemy się z Tobą!</p>
					<?php echo do_shortcode('[contact-form-7 id="152" title="Appointment"]'); ?>
					<div class="popup-form__bg"></div>

				</div>



			</div>
		</div>
	</div>

	<div id="popup-appointmetn-7" class="popup-appointmetn">
		<div class="popup-appointmetn__wrapper">
			<div class="popup-appointmetn__content popup__content">
				<button data-close type="button" class="popup-appointmetn__close"><img src="/wp-content/uploads/2022/10/popup-close.svg" alt=""></button>
				<h3 class="popup-appointmetn__title title">Odpowiedzialność prawna nauczycieli</h3>
				<div class="popup-appointmetn__info">

					<div class="popup-appointmetn__column popup-column">
						<h3 class="popup-column__title">
							Cele:
						</h3>
						<div class="popup-column__text">
							<ul class="popup-column__check">
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Nabycie wiedzy o granicach odpowiedzialności prawnej nauczyciela.
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Poznanie zastosowania przepisów i procedur spełniających wymogi prawne.
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Nabycie wiedzy na temat przepisów prawa dotyczących pracy nauczyciela.
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Świadomość obowiązków ciążących na nauczycielach.
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Umiejętność wypełniania obowiązków wynikających z przepisów prawa.
								</li>
							</ul>
						</div>

					</div>
					<div class="popup-appointmetn__column popup-column">
						<h3 class="popup-column__title">
							Plan szkolenia:
						</h3>
						<div class="popup-column__text">
							<ul class="popup-column__check">
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									1. Nauczyciel jako funkcjonariusz publiczny – prawa i obowiązki z tego wynikające.
								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									<div>2. Rodzaje odpowiedzialności: <br>
										<ul>
											<li>cywilna;</li>
											<li>pracownicza (porządkowa i materialna);</li>
											<li>za wykroczenie;</li>
											<li>orzecznictwo raz przykłady z praktyki szkolnej.</li>
										</ul>
									</div>

								</li>
								<li class="popup-column__item">
									<!-- <div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div> -->
									<div>3. Obowiązek reagowania i powiadomienia innych organów: <br>
										<ul>
											<li>zasady odbioru dziecka;</li>
											<li>udzielanie pierwszej pomocy;</li>
											<li>wypadek;</li>
											<li>stosowanie przymusu bezpośredniego;</li>
											<li>przemoc w rodzinie;</li>
											<li>niebieska karta.</li>
										</ul>
									</div>

								</li>
							</ul>
						</div>

					</div>

				</div>

				<div class="popup-appointmetn__form popup-form">
					<h3 class="popup-form__title title">Jesteś zainteresowany szkoleniem?</h3>
					<p class="popup-form__description description">Wypełnij formularz, aby zarezerwować dogodny termin. Skontaktujemy się z Tobą!</p>
					<?php echo do_shortcode('[contact-form-7 id="152" title="Appointment"]'); ?>
					<div class="popup-form__bg"></div>

				</div>



			</div>
		</div>
	</div>

	<!-- Webinary -->

	<div id="popup-webinary-1" class="popup-appointmetn popup-webinary">
		<div class="popup-appointmetn__wrapper">
			<div class="popup-appointmetn__content popup__content">
				<button data-close type="button" class="popup-appointmetn__close"><img src="/wp-content/uploads/2022/10/popup-close.svg" alt=""></button>
				<h3 class="popup-appointmetn__title title">Depresja u dzieci i młodzieży</h3>
				<div class="popup-appointmetn__info">

					<div class="popup-appointmetn__column popup-column">

						<div class="popup-column__text">
							Warsztat skupia się na omówieniu objawów depresji i dystymii u dzieci i młodzieży. Pokazuje, co może być przyczyną depresji i jakie są możliwości działania, kiedy podejrzewamy u dziecka depresję. W trakcie warsztatu skupimy się na tym, jak postrzega świat i rówieśników dziecko z depresją i jak możemy je wspierać.
						</div>

					</div>
				</div>

				<div class="popup-appointmetn__form popup-form">
					<h3 class="popup-form__title title">Jesteś zainteresowany szkoleniem?</h3>
					<p class="popup-form__description description">Wypełnij formularz, aby zarezerwować dogodny termin. Skontaktujemy się z Tobą!</p>
					<?php echo do_shortcode('[contact-form-7 id="110" title="Webinars"]'); ?>
					
					<div class="popup-form__bg"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="popup-webinary-2" class="popup-appointmetn popup-webinary">
		<div class="popup-appointmetn__wrapper">
			<div class="popup-appointmetn__content popup__content">
				<button data-close type="button" class="popup-appointmetn__close"><img src="/wp-content/uploads/2022/10/popup-close.svg" alt=""></button>
				<h3 class="popup-appointmetn__title title">Samoocena</h3>
				<div class="popup-appointmetn__info">

					<div class="popup-appointmetn__column popup-column">

						<div class="popup-column__text">
							Obecnie wielu rodziców zauważa, że ich dziecko ma niska samoocenę. W trakcie warsztatów zastanowimy się, co wpływa na poczucie wartości dziecka. Co może być przyczyną niskiej samooceny ? Jak budować u dziecka wiarę w siebie i zdrowe przekonania na własny temat?
						</div>

					</div>
				</div>

				<div class="popup-appointmetn__form popup-form">
					<h3 class="popup-form__title title">Jesteś zainteresowany szkoleniem?</h3>
					<p class="popup-form__description description">Wypełnij formularz, aby zarezerwować dogodny termin. Skontaktujemy się z Tobą!</p>
					<?php echo do_shortcode('[contact-form-7 id="110" title="Webinars"]'); ?>
					<div class="popup-form__bg"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="popup-webinary-6" class="popup-appointmetn popup-webinary">
		<div class="popup-appointmetn__wrapper">
			<div class="popup-appointmetn__content popup__content">
				<button data-close type="button" class="popup-appointmetn__close"><img src="/wp-content/uploads/2022/10/popup-close.svg" alt=""></button>
				<h3 class="popup-appointmetn__title title">Zmiana zachowania czy nawyku nastolatka (również związanego z używaniem ekranów)</h3>
				<div class="popup-appointmetn__info">

					<div class="popup-appointmetn__column popup-column">

						<div class="popup-column__text">
						Warsztat wprowadzający metodę małych kroków jako sposób na zmianę trudnego czy niepożądanego zachowania u dziecka. Poznamy założenia metody, sposób na dopasowanie jej do danego zachowania oraz przećwiczymy zaplanowanie działań na konkretnych przykładach.
						</div>

					</div>
				</div>

				<div class="popup-appointmetn__form popup-form">
					<h3 class="popup-form__title title">Jesteś zainteresowany szkoleniem?</h3>
					<p class="popup-form__description description">Wypełnij formularz, aby zarezerwować dogodny termin. Skontaktujemy się z Tobą!</p>
					<?php echo do_shortcode('[contact-form-7 id="110" title="Webinars"]'); ?>
					<div class="popup-form__bg"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="popup-webinary-4" class="popup-appointmetn popup-webinary">
		<div class="popup-appointmetn__wrapper">
			<div class="popup-appointmetn__content popup__content">
				<button data-close type="button" class="popup-appointmetn__close"><img src="/wp-content/uploads/2022/10/popup-close.svg" alt=""></button>
				<h3 class="popup-appointmetn__title title"> Stres i trudne sytuacje dziecka</h3>
				<div class="popup-appointmetn__info">

					<div class="popup-appointmetn__column popup-column">

						<div class="popup-column__text">
							Warsztat pomagający uporządkować informacje o stresie, pozwalający przećwiczyć w sposób praktyczny wiedzę i sposoby radzenia sobie ze stresem u dzieci i nastolatków. Poszukamy sposobów wspierającego działania rodziców w życiu codziennym oraz zastanowimy się jak przetrwać trudne sytuacje w domu.
						</div>

					</div>
				</div>

				<div class="popup-appointmetn__form popup-form">
					<h3 class="popup-form__title title">Jesteś zainteresowany szkoleniem?</h3>
					<p class="popup-form__description description">Wypełnij formularz, aby zarezerwować dogodny termin. Skontaktujemy się z Tobą!</p>
					<?php echo do_shortcode('[contact-form-7 id="110" title="Webinars"]'); ?>
					<div class="popup-form__bg"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="popup-webinary-5" class="popup-appointmetn popup-webinary">
		<div class="popup-appointmetn__wrapper">
			<div class="popup-appointmetn__content popup__content">
				<button data-close type="button" class="popup-appointmetn__close"><img src="/wp-content/uploads/2022/10/popup-close.svg" alt=""></button>
				<h3 class="popup-appointmetn__title title">Jak rozmawiać z nastolatkiem?</h3>
				<div class="popup-appointmetn__info">

					<div class="popup-appointmetn__column popup-column">

						<div class="popup-column__text">
							Warsztat pomagający oswoić i przećwiczyć trudne tematy. Na wstępie krótkie wprowadzenie o komunikacji i odpowiedź na pytanie co czyni tematy trudnymi. Zastanowimy się nad rolą rodzica wobec dojrzewającego dziecka, w szczególności w kontekście zachowań ryzykownych i zagrażających.
						</div>

					</div>
				</div>

				<div class="popup-appointmetn__form popup-form">
					<h3 class="popup-form__title title">Jesteś zainteresowany szkoleniem?</h3>
					<p class="popup-form__description description">Wypełnij formularz, aby zarezerwować dogodny termin. Skontaktujemy się z Tobą!</p>
					<?php echo do_shortcode('[contact-form-7 id="110" title="Webinars"]'); ?>
					<div class="popup-form__bg"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="popup-webinary-3" class="popup-appointmetn popup-webinary">
		<div class="popup-appointmetn__wrapper">
			<div class="popup-appointmetn__content popup__content">
				<button data-close type="button" class="popup-appointmetn__close"><img src="/wp-content/uploads/2022/10/popup-close.svg" alt=""></button>
				<h3 class="popup-appointmetn__title title">Uzależnienie od komputera</h3>
				<div class="popup-appointmetn__info">

					<div class="popup-appointmetn__column popup-column">

						<div class="popup-column__text">
						Celem warsztatu jest nabycie umiejętności zmniejszenia czynników ryzyka oraz wzmacniania czynników chroniących w kontekście profilaktyki uzależnień. Odpowiemy na pytania: co to jest uzależnienie – jak działa, co powoduje, jak się leczy? Przyjrzymy się powiązaniu uzależnień z emocjami (rozpoznawanie i regulacja emocji, sposoby radzenia sobie ze stresem) oraz umiejętnościami psychospołecznymi (komunikacja, rozwiązywanie problemów).
						</div>

					</div>
				</div>

				<div class="popup-appointmetn__form popup-form">
					<h3 class="popup-form__title title">Jesteś zainteresowany szkoleniem?</h3>
					<p class="popup-form__description description">Wypełnij formularz, aby zarezerwować dogodny termin. Skontaktujemy się z Tobą!</p>
					<?php echo do_shortcode('[contact-form-7 id="110" title="Webinars"]'); ?>
					<div class="popup-form__bg"></div>
				</div>
			</div>
		</div>
	</div>


	<div id="popup-webinary-7" class="popup-appointmetn popup-webinary">
		<div class="popup-appointmetn__wrapper">
			<div class="popup-appointmetn__content popup__content">
				<button data-close type="button" class="popup-appointmetn__close"><img src="/wp-content/uploads/2022/10/popup-close.svg" alt=""></button>
				<h3 class="popup-appointmetn__title title">O co walczy nastolatek?</h3>
				<div class="popup-appointmetn__info">

					<div class="popup-appointmetn__column popup-column">

						<div class="popup-column__text">
							Okres dorastania budzi wiele obaw i pytań u rodziców. Dlaczego dziecko, które wcześniej nas słuchało i dało się z nim współpracować nagle przestaje nas słuchać i trzaska drzwiami? <br><br>

							Dlaczego nie chce słuchać naszych dobrych rad i opierać się na naszym doświadczeniu?<br><br>

							Dlaczego nie dotrzymuje umów? Co się z nim dzieje?
							A także – jak w tych sytuacjach może reagować rodzic? <br><br>

							<b>Podczas webinaru dowiesz się:</b><br>

							Dlaczego twoje dziecko zaczęło się inaczej zachowywać?<br>
							Na czym polega okres dorastania i jaki jest jego cel?<br>
							Na czym polega rola rodzica nastolatka?<br>
							Gdzie jest granica między kontrolą, a nauką odpowiedzialności?<br>
							Jak reagować, kiedy dziecko łamie umowy, nie słucha?<br>
							Jak razić sobie z własnymi emocjami?<br> <br> <br>


							<b>Dla kogo jest webinar:</b><br><br>
							<ul class="popup-column__check">
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Dla rodziców, którzy maja poczucie, że pewne strategie wychowawcze już nie działają i zastanawiają się, jak teraz reagować w trudnych sytuacjach
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Dla osób, które chcą zrozumieć nagłą zmianę zachowania u dziecka
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Dla rodziców dzieci w wieku 11-17 lat
								</li>
							</ul>
							<b>Webinar trwa 45 minut. Dostęp do filmu wygasa po 90 dniach.</b>
						</div>

					</div>
				</div>

				<div class="popup-appointmetn__form popup-form">
					<h3 class="popup-form__title title">Chcesz kupić dostęp do webinaru?</h3>
					<p class="popup-form__description description">Wypełnij formularz, a my prześlemy instrukcję zakupu na adres e-mail podany przez Ciebie</p>
						<?php echo do_shortcode('[contact-form-7 id="128" title="Webinars Main"]'); ?>
					<div class="popup-form__bg"></div>
				</div>
			</div>
		</div>
	</div>


	<div id="popup-webinary-8" class="popup-appointmetn popup-webinary">
		<div class="popup-appointmetn__wrapper">
			<div class="popup-appointmetn__content popup__content">
				<button data-close type="button" class="popup-appointmetn__close"><img src="/wp-content/uploads/2022/10/popup-close.svg" alt=""></button>
				<h3 class="popup-appointmetn__title title">Co robić, kiedy dziecko nie może się skupić?</h3>
				<div class="popup-appointmetn__info">

					<div class="popup-appointmetn__column popup-column">

						<div class="popup-column__text">
							Koncentracja uwagi to jedna z umiejętności, na której opiera się nauka w szkole, zdolność do odrabiania lekcji, do współpracy z rówieśnikami i z dorosłymi.
							Co zrobić, kiedy zauważyliśmy, że nasze dziecko nie może się skupić? Co robić w sytuacjach, kiedy odrabianie lekcji trwa godzinami, a czasami zmienia się w pole bitwy? Jak mówić do dziecka, żeby było w stanie usłyszeć i zapamiętać, co do niego mówimy?
							<br><br>
							<b>Podczas webinaru dowiesz się:</b> <br><br>

							1. Czym jest koncentracja uwagi i kiedy można powiedzieć, że dziecko ma problemy ze skupieniem się?<br>
							2. Co „działa”, a co „nie działa” ?<br>
							3. Jak pomóc dziecku w skupieniu się?<br>
							4. Co zrobić, żeby odrabianie lekcji było szybsze i łatwiejsze?<br>
							5. Jak mówić, żeby dziecko usłyszało to, co mówimy i to zapamiętało?<br>
							6. Jak poradzić sobie z emocjami, kiedy po raz kolejny umawiamy się z na coś z dzieckiem, a ono tego nie robi?<br>
							7. Jak problemy z koncentracją uwagi mogą wpływać na samoocenę dziecka?<br><br>


							<b>Dla kogo jest webinar:</b><br><br>
							<ul class="popup-column__check">
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Dla rodziców dzieci w wieku 5-10 lat
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Dla osób, które zastanawiają się nad tym,czy ich dziecko ma problemy ze skupieniem się,
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Dla rodziców, którzy często słyszą od nauczycieli, że dziecko bawi się w trakcie lekcji i nie słucha tego, co mówi dorosły
								</li>
								<li class="popup-column__item">
									<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""> </div>
									Dla rodziców, którzy zastawiają się, co zrobić, żeby dziecko było w stanie skupić się na tym,co robi (rozmowa, odrabianie lekcji).
								</li>
							</ul>
							<b>Webinar trwa 45 minut. Dostęp do filmu wygasa po 90 dniach.</b>
						</div>

					</div>
				</div>

				<div class="popup-appointmetn__form popup-form">
					<h3 class="popup-form__title title">Chcesz kupić dostęp do webinaru?</h3>
					<p class="popup-form__description description">Wypełnij formularz, a my prześlemy instrukcję zakupu na adres e-mail podany przez Ciebie</p>
					<?php echo do_shortcode('[contact-form-7 id="128" title="Webinars Main"]'); ?>
					<div class="popup-form__bg"></div>
				</div>
			</div>
		</div>
	</div>

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
