<?php
/*
Template Name: Rekrutacja terapeutów
Template Post Type: page
*/

defined( 'ABSPATH' ) || exit;

get_header();

$forme_hero        = forme_field( 'hero_heading' );
$forme_offers      = forme_field( 'offers', false, array() );
$forme_reqs        = forme_field( 'requirements', false, array() );
$forme_image_top   = forme_field( 'image_top' );
$forme_image_bot   = forme_field( 'image_bottom' );

/**
 * Render one "side-by-side-50" recruitment block (list + image).
 *
 * @param array  $group    ACF group with 'title' and 'items' (icon, text).
 * @param mixed  $image    ACF image array.
 * @param bool   $reverse  Whether to add the reverse modifier.
 */
$forme_render_block = static function ( $group, $image, $reverse = false ) {
	$title = isset( $group['title'] ) ? $group['title'] : '';
	$items = isset( $group['items'] ) && is_array( $group['items'] ) ? $group['items'] : array();
	?>
	<section class="side-by-side-50<?php echo $reverse ? ' reverse' : ''; ?>">
		<div class="side-by-side-50__container">
			<div class="side-by-side-50__column">
				<?php if ( $title ) : ?>
					<div class="side-by-side-50__title"><?php echo esc_html( $title ); ?></div>
				<?php endif; ?>
				<div class="side-by-side-50__list">
					<?php foreach ( $items as $item ) : ?>
						<div class="side-by-side-50__item">
							<div class="side-by-side-50__icon">
								<?php if ( ! empty( $item['icon']['url'] ) ) : ?>
									<img src="<?php echo esc_url( $item['icon']['url'] ); ?>" alt="">
								<?php endif; ?>
							</div>
							<div class="side-by-side-50__text"><?php echo esc_html( $item['text'] ); ?></div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="side-by-side-50__column">
				<div class="side-by-side-50__flw-img">
					<?php if ( ! empty( $image['url'] ) ) : ?>
						<img src="<?php echo esc_url( $image['url'] ); ?>" alt="">
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	<?php
};
?>

<section class="heading">
	<div class="heading__container">
		<h2 class="heading__title title">
			<?php echo $forme_hero ? wp_kses( $forme_hero, array( 'br' => array(), 'span' => array() ) ) : esc_html__( 'Jesteś psychologiem, psychoterapeutą i chcesz tworzyć z nami zgrany zespół?', 'forme' ); ?>
		</h2>
	</div>
</section>

<?php
$forme_render_block( $forme_offers, $forme_image_top, false );
$forme_render_block( $forme_reqs, $forme_image_bot, true );

get_footer( 'terapevtf' );
