<?php
/*
Template Name: Psychoterapeuci
Template Post Type: page
*/

defined( 'ABSPATH' ) || exit;

get_header();
?>

<section class="heading">
	<div class="heading__container">
		<h2 class="heading__title title">
			<?php esc_html_e( 'Wspierają Cię nasi certyfikowani psychoterapeuci', 'forme' ); ?>
		</h2>
		<div class="heading__desc">
			<?php esc_html_e( 'Którzy uzyskali certyfikat psychoterapeuty lub są w trakcie szkolenia.', 'forme' ); ?>
		</div>
	</div>
</section>

<section class="webinars reviews-page">
	<div class="webinars__container">
		<div class="webinars__items">
			<div class="webinars__item webinars-item">
				<div class="webinars-item__top">
					<div class="webinars-item__icon"><img src="<?php echo esc_url( forme_icon( 'clock-reviews.svg' ) ); ?>" alt=""></div>
					<div class="webinars-item__info">
						<a href="/zarezerwuj-wizyte">
							<h3 class="webinars-item__name"><?php esc_html_e( 'Konsultacja online dla dorosłych', 'forme' ); ?></h3>
							<p class="webinars-item__type">50 min</p>
						</a>
					</div>
				</div>
			</div>

			<div class="webinars__item webinars-item">
				<div class="webinars-item__top">
					<div class="webinars-item__icon"><img src="<?php echo esc_url( forme_icon( 'clock-reviews.svg' ) ); ?>" alt=""></div>
					<div class="webinars-item__info">
						<a href="/zarezerwuj-wizyte">
							<h3 class="webinars-item__name"><?php esc_html_e( 'Konsultacja online dla dzieci', 'forme' ); ?></h3>
							<p class="webinars-item__type">50 min</p>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="reviews-block">
	<div class="reviews-block__container">
		<div class="reviews-block__items reviews">
			<?php
			$forme_therapists = new WP_Query(
				array(
					'post_type'      => 'psychotherapist',
					'posts_per_page' => -1,
					'orderby'        => array(
						'menu_order' => 'ASC',
						'title'      => 'ASC',
					),
				)
			);

			if ( $forme_therapists->have_posts() ) :
				while ( $forme_therapists->have_posts() ) :
					$forme_therapists->the_post();
					get_template_part( 'template-parts/components/card', 'psychotherapist' );
				endwhile;
				wp_reset_postdata();
			endif;
			?>
		</div>
	</div>
</section>

<?php
get_footer();
