<?php
/**
 * Training card (grid item). Expects the current post to be a `training`.
 *
 * @package Forme
 */

defined( 'ABSPATH' ) || exit;

$forme_img = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_ID(), 'large' ) : '';
?>
<div class="appointmetn__item">
	<div class="appointmetn__img">
		<?php if ( $forme_img ) : ?>
			<img src="<?php echo esc_url( $forme_img ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
		<?php endif; ?>
	</div>
	<div class="appointmetn__info">
		<h3 class="appointmetn__name"><?php echo esc_html( get_the_title() ); ?></h3>
		<a href="" data-popup="#popup-training-<?php the_ID(); ?>" class="appointmetn__button"><?php esc_html_e( 'Dowiedz się więcej', 'forme' ); ?></a>
	</div>
</div>
