<?php
/**
 * Webinar card (video webinar item). Expects the current post to be a
 * `training` of type "webinar".
 *
 * @package Forme
 */

defined( 'ABSPATH' ) || exit;

$forme_icon = has_post_thumbnail()
	? get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' )
	: '/wp-content/uploads/2022/10/webinars.svg';
?>
<div class="webinars__item webinars-item">
	<div class="webinars-item__top">
		<div class="webinars-item__icon"><img src="<?php echo esc_url( $forme_icon ); ?>" alt=""></div>
		<div class="webinars-item__info">
			<h3 class="webinars-item__name"><?php echo esc_html( get_the_title() ); ?></h3>
			<p class="webinars-item__type"><?php esc_html_e( 'Nagranie video', 'forme' ); ?></p>
		</div>
	</div>
	<div class="webinars-item__buttons">
		<a href="" data-popup="#popup-training-<?php the_ID(); ?>" class="webinars-item__button button --border"><?php esc_html_e( 'Dowiedz się więcej', 'forme' ); ?></a>
	</div>
</div>
