<?php
/**
 * Front page (home).
 *
 * Every section reads from the "Strona główna" ACF group and falls back to the
 * original design copy, so the page renders correctly before the fields are
 * filled and becomes fully editable once they are.
 *
 * @package Forme
 */

defined( 'ABSPATH' ) || exit;

get_header();

$forme_uploads = '/wp-content/uploads/2022/10/';

/* Hero ------------------------------------------------------------------ */
$forme_hero = forme_field( 'hero', false, array() );
$forme_hero_title = ! empty( $forme_hero['title'] ) ? $forme_hero['title'] : 'Sesje <span>online</span> <br>z psychoterapeutą';
$forme_hero_desc  = ! empty( $forme_hero['description'] ) ? $forme_hero['description'] : 'Pomożemy Ci zadbać o zdrowie psychiczne i poprawić komfort życia, dzięki sprawdzonym metodom psychoterapii.';
$forme_hero_label = ! empty( $forme_hero['button_label'] ) ? $forme_hero['button_label'] : 'Znajdź terapeutę';
$forme_hero_url   = ! empty( $forme_hero['button_url'] ) ? $forme_hero['button_url'] : '/znajdz-terapeute';
$forme_hero_img   = ! empty( $forme_hero['image']['url'] ) ? $forme_hero['image']['url'] : '/wp-content/uploads/2022/11/hero-img.png';

/* Benefits -------------------------------------------------------------- */
$forme_benefits = forme_field( 'benefits', false, array() );
if ( empty( $forme_benefits ) ) {
	$forme_benefits = array(
		array(
			'icon'        => array( 'url' => $forme_uploads . 'security.svg' ),
			'title'       => 'Bezpieczeństwo',
			'description' => 'Platforma FORME wykorzystuje zabezpieczony komunikator Google Meet',
		),
		array(
			'icon'        => array( 'url' => $forme_uploads . 'work-from-home.svg' ),
			'title'       => 'Komfort',
			'description' => 'Rezerwuj sesję w dogodnych godzinach i łącz się z komfortowego miejsca',
		),
		array(
			'icon'        => array( 'url' => $forme_uploads . 'goal.svg' ),
			'title'       => 'Rezultat',
			'description' => 'Ustalamy cel, do którego dążymy i konkretny plan działań',
		),
	);
}

/* Services (side-by-side) ----------------------------------------------- */
$forme_services = forme_field( 'services', false, array() );
$forme_services_title = ! empty( $forme_services['title'] ) ? $forme_services['title'] : 'Skuteczna terapia dzieci, młodzieży i <br> dorosłych w dogodnym miejscu';
$forme_services_desc  = ! empty( $forme_services['description'] ) ? $forme_services['description'] : 'Terapia poznawczo-behawioralna, którą stosujemy, uważana jest za jedną z najlepiej przebadanych, a jej skuteczność jest potwierdzona naukowo (EBM).';
$forme_services_items = ! empty( $forme_services['items'] ) ? $forme_services['items'] : array(
	array(
		'name'  => 'PSYCHOTERAPIA DZIECI I MŁODZIEŻY',
		'url'   => '/psychoterapia#dla-det',
		'image' => array( 'url' => $forme_uploads . 'side-by-side-1.jpg' ),
	),
	array(
		'name'  => 'PSYCHOTERAPIA DOROSŁYCH',
		'url'   => '/psychoterapia#dla-doroslich',
		'image' => array( 'url' => $forme_uploads . 'side-by-side-2.jpg' ),
	),
);

/* Tags cloud ------------------------------------------------------------ */
$forme_tags = forme_field( 'tags_cloud', false, array() );
$forme_tags_title = ! empty( $forme_tags['title'] ) ? $forme_tags['title'] : 'Celem terapii jest zmiana myśli i przekonań na takie, które bedą polepszać Twoje samopoczucie i jakość życia';
$forme_tags_desc  = ! empty( $forme_tags['description'] ) ? $forme_tags['description'] : 'Problemy, z jakimi pracują nasi psychoterapeuci, to m.in.';
$forme_tags_img   = ! empty( $forme_tags['image']['url'] ) ? $forme_tags['image']['url'] : $forme_uploads . 'Group-125.png';

/* Session info (duration / price) --------------------------------------- */
$forme_session = forme_field( 'session_info', false, array() );
if ( empty( $forme_session ) ) {
	$forme_session = array(
		array(
			'icon'  => array( 'url' => $forme_uploads . 'clock.svg' ),
			'label' => 'Czas trwania:',
			'value' => '50 min',
		),
		array(
			'icon'  => array( 'url' => $forme_uploads . 'coins.svg' ),
			'label' => 'Cena:',
			'value' => '180-270 pln',
		),
	);
}

/* Primary CTA ----------------------------------------------------------- */
$forme_cta = forme_field( 'primary_cta', false, array() );
$forme_cta_label = ! empty( $forme_cta['button_label'] ) ? $forme_cta['button_label'] : 'Zarezerwuj sesję online';
$forme_cta_url   = ! empty( $forme_cta['button_url'] ) ? $forme_cta['button_url'] : '/zarezerwuj-wizyte';

/* Therapists section (side-by-side-2) ----------------------------------- */
$forme_ts = forme_field( 'therapists_section', false, array() );
$forme_ts_title = ! empty( $forme_ts['title'] ) ? $forme_ts['title'] : 'Wszyscy nasi psychoterapeuci posiadają <span>certyfikat psychoterapeuty lub są w trakcie certyfikacji</span>';
$forme_ts_desc  = ! empty( $forme_ts['description'] ) ? $forme_ts['description'] : 'Skuteczność prowadzenia terapii przez naszych psychoterapeutów gwarantuje praca pod superwizją. Superwizja pomaga psychoterapeucie zaplanować sposób prowadzenia terapii, żeby był jak najbardziej dostosowany do potrzeb klienta.';
$forme_ts_img   = ! empty( $forme_ts['image']['url'] ) ? $forme_ts['image']['url'] : $forme_uploads . 'business-approve-.jpg';
$forme_ts_label = ! empty( $forme_ts['button_label'] ) ? $forme_ts['button_label'] : 'Znajdź terapeutę';
$forme_ts_url   = ! empty( $forme_ts['button_url'] ) ? $forme_ts['button_url'] : '/znajdz-terapeute/';

/* Steps ----------------------------------------------------------------- */
$forme_steps = forme_field( 'steps', false, array() );
$forme_steps_title = ! empty( $forme_steps['title'] ) ? $forme_steps['title'] : 'Dowiedz się jak korzystać<br> z platformy ForMe';
$forme_steps_items = ! empty( $forme_steps['items'] ) ? $forme_steps['items'] : array(
	array( 'label' => 'Krok 1', 'description' => 'Wybierz psychoterapeutę oraz dogodny termin' ),
	array( 'label' => 'Krok 2', 'description' => 'Zarezerwuj i opłać sesję' ),
	array( 'label' => 'Krok 3', 'description' => 'Otrzymaj potwierdzenie rezerwacji' ),
	array( 'label' => 'Krok 4', 'description' => 'Połącz się z psychoterapeutą, klikając na link otrzymany w mailu' ),
);

/* Instruction ----------------------------------------------------------- */
$forme_instr = forme_field( 'instruction', false, array() );
$forme_instr_title = ! empty( $forme_instr['title'] ) ? $forme_instr['title'] : 'Przed sesją online zadbaj <br> o prywatność oraz dobre połączenie internetowe.';
$forme_instr_desc  = ! empty( $forme_instr['description'] ) ? $forme_instr['description'] : 'Rozmowa odbędzie się przez Google Meet. Link do rozmowy dostaniesz w dniu spotknia <br> na podany adres e-mail.';
$forme_instr_label = ! empty( $forme_instr['button_label'] ) ? $forme_instr['button_label'] : 'Dowiedz się, jak korzystać z platformy ForMe';

/* Closing heading ------------------------------------------------------- */
$forme_closing = forme_field( 'closing_heading', false, array() );
$forme_closing_title = ! empty( $forme_closing['title'] ) ? $forme_closing['title'] : 'NAJTRUDNIEJ JEST ZROBIĆ PIERWSZY KROK W KIERUNKU ZMIANY';
$forme_closing_desc  = ! empty( $forme_closing['description'] ) ? $forme_closing['description'] : 'Nie zwlekaj! Zapisz się już teraz na konsultację z psychoterapeutą i odkryj lepszą jakość życia.';

/* First consultation (side-by-side-rev) --------------------------------- */
$forme_fc = forme_field( 'first_consultation', false, array() );
$forme_fc_title = ! empty( $forme_fc['title'] ) ? $forme_fc['title'] : 'Jak wygląda pierwsza konsultacja?';
$forme_fc_img   = ! empty( $forme_fc['image']['url'] ) ? $forme_fc['image']['url'] : $forme_uploads . 'cheerful-young-spouses-talking.jpg';
$forme_fc_label = ! empty( $forme_fc['button_label'] ) ? $forme_fc['button_label'] : 'Zarezerwuj sesję online';
$forme_fc_url   = ! empty( $forme_fc['button_url'] ) ? $forme_fc['button_url'] : '/zarezerwuj-wizyte';
$forme_fc_items = ! empty( $forme_fc['items'] ) ? $forme_fc['items'] : array(
	array( 'text' => 'Przeprowadzamy wywiad, żeby zrozumieć na czym polega problem, od kiedy trwa i jakie są jego okoliczności' ),
	array( 'text' => 'Ustalamy cel, do ktorego dążymy' ),
	array( 'text' => 'Ustalamy dalsze kroki i oddziaływania' ),
);

/* Reviews (creators) ---------------------------------------------------- */
$forme_reviews = forme_field( 'reviews', false, array() );
$forme_reviews_title = ! empty( $forme_reviews['title'] ) ? $forme_reviews['title'] : 'Portal stworzony przez psychoterapeutów:';
$forme_reviews_desc  = ! empty( $forme_reviews['description'] ) ? $forme_reviews['description'] : '“Cenimy szacunek i uczciwość w kontaktach z ludźmi, jesteśmy ciekawe każdego człowieka i jego historii.”';
$forme_reviews_items = ! empty( $forme_reviews['items'] ) ? $forme_reviews['items'] : array(
	array(
		'photo' => array( 'url' => $forme_uploads . 'person.jpg' ),
		'name'  => 'mgr Marta Siódmiak (Polak)',
		'text'  => 'Jestem psychologiem i psychoterapeutą. Ukończyłam studia magisterskie na Uniwersytecie SWPS ze specjalnością psychologia kliniczna oraz psychologia kliniczna dziecka. Odbyłam czteroletnie szkolenie psychoterapeutów w Szkole Psychoterapii Poznawczo-Behawioralnej. Należę do Polskiego Towarzystwa Terapii Poznawczo-Behawioralnej.',
	),
	array(
		'photo' => array( 'url' => $forme_uploads . 'Group124.jpg' ),
		'name'  => 'mgr Anna Jagoda Jeżewska',
		'text'  => 'Jestem psychologiem, terapeutą integracji sensorycznej, certyfikowanym psychoterapeutą poznawczo – behawioralnym (certyfikat nr 710), psychoterapeutą dzieci i młodzieży, a także terapeutą EMDR. Ukończyłam psychologię na Uniwersytecie Łódzkim, specjalizacja: psychologia zdrowia i kliniczna.',
	),
);

$forme_inline = array( 'span' => array(), 'br' => array() );
?>

<section class="hero">
	<div class="hero__container">
		<div class="hero__column">
			<h1 class="hero__title"><?php echo wp_kses( $forme_hero_title, $forme_inline ); ?></h1>
			<div class="hero__desc"><?php echo esc_html( $forme_hero_desc ); ?></div>
			<a href="<?php echo esc_url( $forme_hero_url ); ?>" class="hero__button button --green" data-da=".hero__img, 768, 2"><?php echo esc_html( $forme_hero_label ); ?></a>
		</div>
		<div class="hero__column">
			<div class="hero__img">
				<img src="<?php echo esc_url( $forme_hero_img ); ?>" alt="">
			</div>
		</div>
	</div>
</section>

<section class="benefits">
	<div class="benefits__container">
		<?php foreach ( $forme_benefits as $forme_b ) : ?>
			<div class="benefits__column">
				<div class="benefits__border">
					<div class="benefits__wrap">
						<div class="benefits__icon"><img src="<?php echo esc_url( $forme_b['icon']['url'] ); ?>" alt=""></div>
						<div class="benefits__info">
							<div class="benefits__title"><?php echo esc_html( $forme_b['title'] ); ?></div>
							<div class="benefits__desc"><?php echo esc_html( $forme_b['description'] ); ?></div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</section>

<section class="side-by-side">
	<div class="side-by-side__container">
		<h2 class="side-by-side__title title"><?php echo wp_kses( $forme_services_title, $forme_inline ); ?></h2>
		<p class="side-by-side__desc description"><?php echo esc_html( $forme_services_desc ); ?></p>
		<div class="side-by-side__items">
			<?php foreach ( $forme_services_items as $forme_s ) : ?>
				<a href="<?php echo esc_url( $forme_s['url'] ); ?>" class="side-by-side__item">
					<div class="side-by-side__name"><?php echo esc_html( $forme_s['name'] ); ?></div>
					<div class="side-by-side__bg"><img src="<?php echo esc_url( $forme_s['image']['url'] ); ?>" alt=""></div>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="tags-cloud">
	<div class="tags-cloud__container">
		<h2 class="tags-cloud__title title"><?php echo esc_html( $forme_tags_title ); ?></h2>
		<p class="tags-cloud__desc description"><?php echo esc_html( $forme_tags_desc ); ?></p>
		<div class="tags-cloud__img"><img src="<?php echo esc_url( $forme_tags_img ); ?>" alt=""></div>
	</div>
</section>

<section class="call-to-action">
	<div class="call-to-action__container">
		<div class="call-to-action__items">
			<?php foreach ( $forme_session as $forme_si ) : ?>
				<div class="call-to-action__item">
					<img src="<?php echo esc_url( $forme_si['icon']['url'] ); ?>" alt="">
					<p><?php echo esc_html( $forme_si['label'] ); ?> <span><?php echo esc_html( $forme_si['value'] ); ?></span></p>
				</div>
			<?php endforeach; ?>
		</div>
		<a href="<?php echo esc_url( $forme_cta_url ); ?>" class="call-to-action__button button --green"><?php echo esc_html( $forme_cta_label ); ?></a>
	</div>
</section>

<section class="side-by-side-2">
	<div class="side-by-side-2__container">
		<div class="side-by-side-2__column">
			<h2 class="side-by-side-2__title title"><?php echo wp_kses( $forme_ts_title, $forme_inline ); ?></h2>
			<p class="side-by-side-2__desc description" data-da=".side-by-side-2__img, 768"><?php echo esc_html( $forme_ts_desc ); ?></p>
		</div>
		<div class="side-by-side-2__column">
			<div class="side-by-side-2__img"><img src="<?php echo esc_url( $forme_ts_img ); ?>" alt=""></div>
			<a href="<?php echo esc_url( $forme_ts_url ); ?>" class="side-by-side-2__button button --green"><?php echo esc_html( $forme_ts_label ); ?></a>
		</div>
	</div>
</section>

<section class="steps">
	<div class="steps__container">
		<h2 class="steps__title title"><?php echo wp_kses( $forme_steps_title, $forme_inline ); ?></h2>
		<div class="steps__items">
			<?php foreach ( $forme_steps_items as $forme_idx => $forme_step ) : ?>
				<div class="steps__item">
					<span><?php echo esc_html( sprintf( '%02d', $forme_idx + 1 ) ); ?></span>
					<div class="steps__step"><?php echo esc_html( $forme_step['label'] ); ?></div>
					<p class="steps__desc"><?php echo esc_html( $forme_step['description'] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="instruction">
	<div class="instruction__container">
		<div class="instruction__wrap">
			<h2 class="instruction__title title"><?php echo wp_kses( $forme_instr_title, $forme_inline ); ?></h2>
			<p class="instruction__desc description"><?php echo wp_kses( $forme_instr_desc, $forme_inline ); ?></p>
			<a href="<?php echo esc_url( $forme_cta_url ); ?>" data-popup="#popup-instruction" class="instruction__button button --green"><?php echo esc_html( $forme_instr_label ); ?></a>
		</div>
	</div>
</section>

<section class="heading">
	<div class="heading__container">
		<h2 class="heading__title title"><?php echo esc_html( $forme_closing_title ); ?></h2>
		<div class="heading__desc"><?php echo esc_html( $forme_closing_desc ); ?></div>
	</div>
</section>

<section class="side-by-side-rev">
	<div class="side-by-side-rev__container">
		<div class="side-by-side-rev__column">
			<div class="side-by-side-rev__img"><img src="<?php echo esc_url( $forme_fc_img ); ?>" alt=""></div>
		</div>
		<div class="side-by-side-rev__column">
			<div class="side-by-side-rev__wrap">
				<div class="side-by-side-rev__title"><?php echo esc_html( $forme_fc_title ); ?></div>
				<ul class="side-by-side-rev__list">
					<?php foreach ( $forme_fc_items as $forme_idx => $forme_fc_item ) : ?>
						<li class="side-by-side-rev__item"><span><?php echo (int) ( $forme_idx + 1 ); ?></span><?php echo esc_html( $forme_fc_item['text'] ); ?></li>
					<?php endforeach; ?>
				</ul>
				<a href="<?php echo esc_url( $forme_fc_url ); ?>" class="side-by-side-rev__button button --green"><?php echo esc_html( $forme_fc_label ); ?></a>

				<div class="call-to-action__items side-by-side-rev__items">
					<div class="call-to-action__item">
						<img src="<?php echo esc_url( $forme_uploads . 'clock-black.svg' ); ?>" alt="">
						<p>Czas trwania: <span>50 min</span></p>
					</div>
					<div class="call-to-action__item">
						<img src="<?php echo esc_url( $forme_uploads . 'coins-black.svg' ); ?>" alt="">
						<p>Cena: <span>180-270 pln</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="reviews-block">
	<div class="reviews-block__container">
		<h2 class="reviews-block__title title"><?php echo esc_html( $forme_reviews_title ); ?></h2>
		<p class="reviews-block__desc description"><?php echo esc_html( $forme_reviews_desc ); ?></p>
		<div class="reviews-block__items reviews">
			<?php foreach ( $forme_reviews_items as $forme_r ) : ?>
				<div class="reviews__item">
					<div class="reviews__person">
						<div class="reviews__img"><img src="<?php echo esc_url( $forme_r['photo']['url'] ); ?>" alt=""></div>
						<p class="reviews__name"><?php echo esc_html( $forme_r['name'] ); ?></p>
						<div class="reviews__quote-icon"><img src="<?php echo esc_url( $forme_uploads . 'quote-icon.svg' ); ?>" alt=""></div>
					</div>
					<div class="reviews__desc description"><?php echo wp_kses_post( wpautop( $forme_r['text'] ) ); ?></div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<?php
get_footer();
