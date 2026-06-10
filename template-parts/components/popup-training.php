<?php
/**
 * Modal popup for a training/webinar. Expects the current post to be a `training`.
 *
 * Rendered once per training near the footer; cards open it via
 * data-popup="#popup-training-{ID}".
 *
 * @package Forme
 */

defined( 'ABSPATH' ) || exit;

$forme_type    = forme_field( 'training_type', false, 'szkolenie' );
$forme_desc    = forme_field( 'short_description' );
$forme_goals   = forme_field( 'popup_goals', false, array() );
$forme_plan    = forme_field( 'popup_plan', false, array() );
$forme_form_id = forme_field( 'form_id' );
$forme_webinar = ( 'webinar' === $forme_type );
?>
<div id="popup-training-<?php the_ID(); ?>" class="popup-appointmetn<?php echo $forme_webinar ? ' popup-webinary' : ''; ?>">
	<div class="popup-appointmetn__wrapper">
		<div class="popup-appointmetn__content popup__content">
			<button data-close type="button" class="popup-appointmetn__close"><img src="/wp-content/uploads/2022/10/popup-close.svg" alt=""></button>
			<h3 class="popup-appointmetn__title title"><?php echo esc_html( get_the_title() ); ?></h3>

			<div class="popup-appointmetn__info">
				<?php if ( $forme_desc ) : ?>
					<div class="popup-appointmetn__column popup-column">
						<div class="popup-column__text"><?php echo wp_kses_post( wpautop( $forme_desc ) ); ?></div>
					</div>
				<?php endif; ?>

				<?php if ( $forme_goals ) : ?>
					<div class="popup-appointmetn__column popup-column">
						<h3 class="popup-column__title"><?php esc_html_e( 'Cele:', 'forme' ); ?></h3>
						<div class="popup-column__text">
							<ul class="popup-column__check">
								<?php foreach ( $forme_goals as $forme_goal ) : ?>
									<li class="popup-column__item">
										<div class="popup-column__icon"><img src="/wp-content/uploads/2022/10/popup-check.svg" alt=""></div>
										<?php echo esc_html( $forme_goal['text'] ); ?>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				<?php endif; ?>

				<?php if ( $forme_plan ) : ?>
					<div class="popup-appointmetn__column popup-column">
						<h3 class="popup-column__title"><?php esc_html_e( 'Plan szkolenia:', 'forme' ); ?></h3>
						<div class="popup-column__text">
							<ul class="popup-column__check">
								<?php foreach ( $forme_plan as $forme_plan_item ) : ?>
									<li class="popup-column__item"><?php echo wp_kses_post( $forme_plan_item['text'] ); ?></li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				<?php endif; ?>
			</div>

			<div class="popup-appointmetn__form popup-form">
				<h3 class="popup-form__title title"><?php esc_html_e( 'Jesteś zainteresowany szkoleniem?', 'forme' ); ?></h3>
				<p class="popup-form__description description"><?php esc_html_e( 'Wypełnij formularz, aby zarezerwować dogodny termin. Skontaktujemy się z Tobą!', 'forme' ); ?></p>
				<?php
				if ( $forme_form_id ) {
					echo do_shortcode( '[contact-form-7 id="' . esc_attr( $forme_form_id ) . '"]' );
				}
				?>
				<div class="popup-form__bg"></div>
			</div>
		</div>
	</div>
</div>
