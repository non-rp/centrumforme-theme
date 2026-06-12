<?php
/**
 * The footer: site contact block, navigation, legal links, popups.
 *
 * Content is driven by the "Ustawienia motywu" ACF options page, with graceful
 * fallback to the original copy. On the recruitment page the footer CTA block
 * is overridden by that page's ACF fields (replaces the old footer-terapevtf.php).
 *
 * @package Forme
 */

defined( 'ABSPATH' ) || exit;

$forme_uploads = '/wp-content/uploads/2022/10/';
$forme_social  = '/wp-content/uploads/2023/09/';

/* Logo ------------------------------------------------------------------ */
$forme_logo     = forme_option( 'logo' );
$forme_logo_url = ! empty( $forme_logo['url'] ) ? $forme_logo['url'] : forme_icon( 'heade-logo.svg' );
$forme_logo_alt = ! empty( $forme_logo['alt'] ) ? $forme_logo['alt'] : get_bloginfo( 'name' );

/* Contact details ------------------------------------------------------- */
$forme_phone   = forme_option( 'phone', '500 505 101' );
$forme_tel     = preg_replace( '/[^0-9+]/', '', $forme_phone );
if ( '' === $forme_tel ) {
	$forme_tel = '+48500505101';
} elseif ( '+' !== substr( $forme_tel, 0, 1 ) && 9 === strlen( $forme_tel ) ) {
	$forme_tel = '+48' . $forme_tel;
}
$forme_email   = forme_option( 'email', 'kontakt@centrumforme.pl' );
$forme_address = forme_option( 'address', 'Warszawa' );
$forme_fb      = forme_option( 'facebook_url', 'https://www.facebook.com/profile.php?id=100089830291607' );
$forme_ig      = forme_option( 'instagram_url', 'https://www.instagram.com/centrum_psychoterapii_forme/' );

/* Footer top block (options, or recruitment-page override) -------------- */
$forme_footer_cta = forme_field( 'footer_cta' );
$forme_is_recruit = is_array( $forme_footer_cta ) && ! empty( $forme_footer_cta['heading'] );
$forme_form_opt   = forme_option( 'footer_form', array() );

if ( $forme_is_recruit ) {
	$forme_f_heading      = $forme_footer_cta['heading'];
	$forme_f_desc         = isset( $forme_footer_cta['description'] ) ? $forme_footer_cta['description'] : '';
	$forme_f_form_heading = __( 'Wypełnij formularz zgłoszeniowy', 'forme' );
	$forme_f_cf7          = ! empty( $forme_footer_cta['cf7_id'] ) ? $forme_footer_cta['cf7_id'] : '125';
} else {
	$forme_f_heading      = forme_option( 'footer_heading', 'Centrum psychoterapii Forme' );
	$forme_f_desc         = forme_option( 'footer_description', 'Jeżeli doświadczasz w życiu trudności, potrzebujesz wsparcia lub porady psychologicznej — zapraszamy do kontaktu!' );
	$forme_f_form_heading = ! empty( $forme_form_opt['heading'] ) ? $forme_form_opt['heading'] : __( 'Napisz i zarezerwuj wizytę!', 'forme' );
	$forme_f_cf7          = ! empty( $forme_form_opt['cf7_id'] ) ? $forme_form_opt['cf7_id'] : '111';
}

/* Legal links + copyright ----------------------------------------------- */
$forme_legal = forme_option( 'legal_links', array() );
if ( empty( $forme_legal ) ) {
	$forme_legal = array(
		array( 'label' => 'Polityka prywatności', 'url' => '/polityka-prywatnosci/' ),
		array( 'label' => 'Polityka oraz procedury ochrony dzieci przed krzywdzeniem', 'url' => '/polityka-oraz-procedury-ochrony-dzieci-przed-krzywdzeniem/' ),
		array( 'label' => 'Regulamin platformy ForMe', 'url' => '/regulamin-platformy-forme/' ),
	);
}
$forme_copyright = forme_option( 'copyright', 'FORME © All rights reserved 2022' );

/* Platform instruction popup -------------------------------------------- */
$forme_pp         = forme_option( 'platform_popup', array() );
$forme_pp_title   = ! empty( $forme_pp['title'] ) ? $forme_pp['title'] : 'Jak korzystać z platformy ForMe:';
$forme_pp_content = ! empty( $forme_pp['content'] ) ? $forme_pp['content'] : '
	Wybierz dogodny termin, zarezerwuj i opłać.<br>
	Jeżeli nie znajdujesz terminu do wybranego specjalisty skontaktuj się z nami poprzez formularz kontaktowy.<br>
	Odbierz mail z linkiem do spotkania.<br><br>
	Centrum ForMe wykorzystuje Google Meet do prowadzenia spotkań.<br><br>
	<b>Jak dołączyć do rozmowy za pomocą zaproszenia na spotkanie?</b><br>
	Kliknij lub przekopiuj otrzymany link, wybierz "Chcę dołączyć" i poczekaj, aż specjalista zatwierdzi Twoje dołączenie.<br><br>
	<b>Udział w spotkaniu nie wymaga posiadania żadnego konta, aplikacji ani logowania się.</b>';
?>
</main>

<footer id="footer" class="footer">
	<div class="footer__container">
		<div class="footer__top">
			<div class="footer__column">
				<h2 class="footer__title title"><?php echo esc_html( $forme_f_heading ); ?></h2>
				<?php if ( $forme_f_desc ) : ?>
					<p class="footer__desc description"><?php echo esc_html( $forme_f_desc ); ?></p>
				<?php endif; ?>
			</div>

			<div class="footer__column">
				<h3 class="footer__col-title"><?php echo esc_html( $forme_f_form_heading ); ?></h3>
				<div class="footer__form">
					<?php
					if ( $forme_f_cf7 ) {
						echo do_shortcode( '[contact-form-7 id="' . esc_attr( $forme_f_cf7 ) . '"]' );
					}
					?>
				</div>
			</div>

			<div class="footer__column">
				<h3 class="footer__col-title"><?php esc_html_e( 'Dane kontaktowe:', 'forme' ); ?></h3>
				<div class="footer__contacts footer-contact">
					<?php if ( $forme_address ) : ?>
						<div class="footer-contact__row">
							<div class="footer-contact__icon"><img src="<?php echo esc_url( forme_icon( 'location.svg' ) ); ?>" alt=""></div>
							<span><?php echo esc_html( $forme_address ); ?></span>
						</div>
					<?php endif; ?>
					<?php if ( $forme_phone ) : ?>
						<div class="footer-contact__row">
							<div class="footer-contact__icon"><img src="<?php echo esc_url( forme_icon( 'phone-call.svg' ) ); ?>" alt=""></div>
							<span class="contact-item"><a href="tel:<?php echo esc_attr( $forme_tel ); ?>"><?php echo esc_html( $forme_phone ); ?></a></span>
						</div>
					<?php endif; ?>
					<?php if ( $forme_email ) : ?>
						<div class="footer-contact__row">
							<div class="footer-contact__icon"><img src="<?php echo esc_url( forme_icon( 'email.svg' ) ); ?>" alt=""></div>
							<span class="contact-item"><a href="mailto:<?php echo esc_attr( $forme_email ); ?>"><?php echo esc_html( $forme_email ); ?></a></span>
						</div>
					<?php endif; ?>
					<div class="footer-contact__row">
						<?php if ( $forme_fb ) : ?>
							<div class="footer-contact__icon"><a href="<?php echo esc_url( $forme_fb ); ?>"><img src="<?php echo esc_url( $forme_social . 'fb-2.png' ); ?>" alt="Facebook"></a></div>
						<?php endif; ?>
						<?php if ( $forme_ig ) : ?>
							<div class="footer-contact__icon"><a href="<?php echo esc_url( $forme_ig ); ?>"><img src="<?php echo esc_url( $forme_social . 'insta.png' ); ?>" alt="Instagram"></a></div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer__bottom">
		<section class="header">
			<div class="header__container">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__logo"><img src="<?php echo esc_url( $forme_logo_url ); ?>" alt="<?php echo esc_attr( $forme_logo_alt ); ?>"></a>
				<div class="header__menu menu">
					<?php forme_nav_menu( 'footer' ); ?>
				</div>
			</div>
		</section>
	</div>

	<div class="footer__copyright">
		<div class="rools">
			<?php foreach ( $forme_legal as $forme_link ) : ?>
				<p><a href="<?php echo esc_url( $forme_link['url'] ); ?>"><?php echo esc_html( $forme_link['label'] ); ?></a></p>
			<?php endforeach; ?>
		</div>
		<p><?php echo esc_html( $forme_copyright ); ?></p>
	</div>
</footer>
</div>

<div id="popup-instruction" aria-hidden="true" class="popup-instruction">
	<div class="popup-instruction__wrapper">
		<div class="popup-instruction__content">
			<div class="popup-instruction__title title"><?php echo esc_html( $forme_pp_title ); ?></div>
			<div class="popup-instruction__text"><?php echo wp_kses_post( $forme_pp_content ); ?></div>
		</div>
		<img class="popup-instruction__bg" src="<?php echo esc_url( forme_icon( 'popup-bg.svg' ) ); ?>" alt="">
		<img class="popup-instruction__bg" src="<?php echo esc_url( forme_icon( 'popup-bg.svg' ) ); ?>" alt="">
	</div>
</div>

<?php
/* Training & webinar popups (opened from cards via #popup-training-{ID}). */
$forme_popups = new WP_Query(
	array(
		'post_type'      => 'training',
		'posts_per_page' => -1,
		'no_found_rows'  => true,
	)
);
if ( $forme_popups->have_posts() ) :
	while ( $forme_popups->have_posts() ) :
		$forme_popups->the_post();
		get_template_part( 'template-parts/components/popup', 'training' );
	endwhile;
	wp_reset_postdata();
endif;
?>

<div id="popup-send" class="popup-appointmetn popup-webinary">
	<div class="popup-appointmetn__wrapper">
		<div class="popup-appointmetn__content popup__content">
			<button data-close type="button" class="popup-appointmetn__close"><img src="<?php echo esc_url( forme_icon( 'popup-close.svg' ) ); ?>" alt=""></button>
			<h3 class="popup-appointmetn__title title"><?php esc_html_e( 'Informacje', 'forme' ); ?></h3>
			<div class="popup-appointmetn__info">
				<div class="popup-appointmetn__column popup-column">
					<div class="popup-column__text"><?php esc_html_e( 'Twoja wiadomość została wysłana. Dziękujemy!', 'forme' ); ?></div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
