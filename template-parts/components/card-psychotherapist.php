<?php
/**
 * Psychotherapist card.
 *
 * Expects the current post in the loop to be a `psychotherapist`.
 *
 * @package Forme
 */

defined( 'ABSPATH' ) || exit;

$forme_name        = get_the_title();
$forme_photo       = forme_field( 'photo' );
$forme_subtitle    = forme_field( 'subtitle' );
$forme_bio         = forme_field( 'bio' );
$forme_booking_url = forme_field( 'booking_url', false, '/zarezerwuj-wizyte' );

$forme_photo_url = '';
$forme_photo_alt = $forme_name;
if ( is_array( $forme_photo ) && ! empty( $forme_photo['url'] ) ) {
	$forme_photo_url = $forme_photo['url'];
	$forme_photo_alt = ! empty( $forme_photo['alt'] ) ? $forme_photo['alt'] : $forme_name;
} elseif ( has_post_thumbnail() ) {
	$forme_photo_url = get_the_post_thumbnail_url( get_the_ID(), 'medium_large' );
}
?>
<div class="reviews__item">
	<div class="reviews__person">
		<div class="reviews__img">
			<?php if ( $forme_photo_url ) : ?>
				<img src="<?php echo esc_url( $forme_photo_url ); ?>" alt="<?php echo esc_attr( $forme_photo_alt ); ?>">
			<?php endif; ?>
		</div>
		<p class="reviews__name">
			<?php echo esc_html( $forme_name ); ?>
			<?php if ( $forme_subtitle ) : ?><br><?php echo esc_html( $forme_subtitle ); ?><?php endif; ?>
		</p>
	</div>
	<div class="reviews__desc description">
		<div data-showmore class="rew-2">
			<div data-showmore-content="330" class="rew-2__content">
				<?php echo wp_kses_post( $forme_bio ); ?>
			</div>
			<br>
			<button hidden data-showmore-button type="button" class="rew-2__more"><span><b>rozwiń</b></span><span><b>zwiń</b></span></button>
		</div>
	</div>
	<br>
	<a href="<?php echo esc_url( $forme_booking_url ); ?>" class="reviews__button button --green"><?php esc_html_e( 'Zarezerwuj sesję online', 'forme' ); ?></a>
</div>
