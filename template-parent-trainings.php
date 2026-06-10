<?php
/*
Template Name: Szkolenia dla rodziców
Template Post Type: page
*/

defined( 'ABSPATH' ) || exit;

get_header();
?>

<section class="heading">
	<div class="heading__container">
		<h2 class="heading__title title">
			<?php esc_html_e( 'Szkolenia dla rodziców', 'forme' ); ?>
		</h2>
		<div class="heading__desc">
			<?php esc_html_e( 'Oparte na doświadczeniu zebranym w pracy indywidualnej i grupowej z dziećmi, młodzieżą oraz rodzicami.', 'forme' ); ?>
		</div>
	</div>
</section>

<?php
$forme_webinars = new WP_Query(
	array(
		'post_type'      => 'training',
		'posts_per_page' => -1,
		'orderby'        => array(
			'menu_order' => 'ASC',
			'date'       => 'ASC',
		),
		'tax_query'      => array(
			array(
				'taxonomy' => 'training_audience',
				'field'    => 'slug',
				'terms'    => 'rodzice',
			),
		),
		'meta_query'     => array(
			array(
				'key'   => 'training_type',
				'value' => 'webinar',
			),
		),
	)
);

if ( $forme_webinars->have_posts() ) :
	?>
	<section class="webinars">
		<div class="webinars__container">
			<h2 class="webinars__title title"><?php esc_html_e( 'Webinary', 'forme' ); ?></h2>
			<div class="webinars__items">
				<?php
				while ( $forme_webinars->have_posts() ) :
					$forme_webinars->the_post();
					get_template_part( 'template-parts/components/card', 'webinar' );
				endwhile;
				wp_reset_postdata();
				?>
			</div>
		</div>
	</section>
	<?php
endif;

$forme_trainings = new WP_Query(
	array(
		'post_type'      => 'training',
		'posts_per_page' => -1,
		'orderby'        => array(
			'menu_order' => 'ASC',
			'date'       => 'ASC',
		),
		'tax_query'      => array(
			array(
				'taxonomy' => 'training_audience',
				'field'    => 'slug',
				'terms'    => 'rodzice',
			),
		),
		'meta_query'     => array(
			'relation' => 'OR',
			array(
				'key'   => 'training_type',
				'value' => 'szkolenie',
			),
			array(
				'key'     => 'training_type',
				'compare' => 'NOT EXISTS',
			),
		),
	)
);

if ( $forme_trainings->have_posts() ) :
	?>
	<section class="appointmetn">
		<div class="appointmetn__container">
			<h2 class="appointmetn__title title"><?php esc_html_e( 'Szkolenia', 'forme' ); ?></h2>
			<p class="appointmetn__desc description">
				<?php esc_html_e( 'Przeprowadzane są w formie warsztatowej (online lub stacjonarnie).', 'forme' ); ?>
			</p>
			<div class="appointmetn__grid">
				<?php
				while ( $forme_trainings->have_posts() ) :
					$forme_trainings->the_post();
					get_template_part( 'template-parts/components/card', 'training' );
				endwhile;
				wp_reset_postdata();
				?>
			</div>
		</div>
	</section>
	<?php
endif;

get_footer();
