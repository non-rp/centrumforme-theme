<?php
/*
Template Name: Szkolenia dla nauczycieli
Template Post Type: page
*/

defined( 'ABSPATH' ) || exit;

get_header();
?>

<section class="side-by-side-rev side-icons">
	<h2 class="grid-three__title title side-icons__title"><?php esc_html_e( 'Prowadzimy kursy i szkolenia dla nauczycieli i rad pedagogicznych', 'forme' ); ?></h2>
	<div class="side-by-side-rev__container row-reverse">
		<div class="side-by-side-rev__column">
			<div class="side-by-side-rev__img">
				<img src="/wp-content/uploads/2022/10/side-p-3.jpg" alt="">
			</div>
		</div>
		<div class="side-by-side-rev__column">
			<div class="side-by-side-rev__wrap">
				<ul class="side-by-side-rev__list">
					<li class="side-by-side-rev__item side-icons__item">
						<div class="side-icons__icon"><img src="<?php echo esc_url( forme_icon( 'check-p-3.svg' ) ); ?>" alt=""></div>
						<?php esc_html_e( 'Przygotowane przez nas szkolenia odpowiadają na aktualne potrzeby nauczycieli oraz proponują konkretne sposoby pracy z uczniami.', 'forme' ); ?>
					</li>
					<li class="side-by-side-rev__item side-icons__item">
						<div class="side-icons__icon"><img src="<?php echo esc_url( forme_icon( 'check-p-3.svg' ) ); ?>" alt=""></div>
						<?php esc_html_e( 'Co zrobić, kiedy uczeń się okalecza? Jak postępować z dzieckiem, które ma depresję? Jak pracować z uczniem z zaburzeniami koncentracji uwagi, ADHD lub Zespołem Aspergera?', 'forme' ); ?>
					</li>
					<li class="side-by-side-rev__item side-icons__item">
						<div class="side-icons__icon"><img src="<?php echo esc_url( forme_icon( 'check-p-3.svg' ) ); ?>" alt=""></div>
						<?php esc_html_e( 'Jak radzić sobie ze stresem i frustracją w pracy nauczyciela?', 'forme' ); ?>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="appointmetn">
	<div class="appointmetn__container">
		<h2 class="appointmetn__title title">
			<?php esc_html_e( 'Coraz więcej uczniów ma trudności – jak z nimi pracować w klasie?', 'forme' ); ?>
		</h2>
		<p class="appointmetn__desc description">
			<?php esc_html_e( 'Wybierz odpowiednie szkolenie i zamów je poprzez formularz zgłoszeniowy', 'forme' ); ?>
		</p>

		<div class="appointmetn__grid">
			<?php
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
							'terms'    => 'nauczyciele',
						),
					),
				)
			);

			if ( $forme_trainings->have_posts() ) :
				while ( $forme_trainings->have_posts() ) :
					$forme_trainings->the_post();
					get_template_part( 'template-parts/components/card', 'training' );
				endwhile;
				wp_reset_postdata();
			endif;
			?>
		</div>
	</div>
</section>

<?php
get_footer();
