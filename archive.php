<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Forme
 */

get_header();
?>

	<main id="primary" class="site-main archive-page__container">
		

		<?php if ( have_posts() ) : ?>

			<!--<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title post-meta">', '</h1>' );
				the_archive_description( '<div class="archive-description post-meta">', '</div>' );
				?>
			</header>-->
            <br>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
                if ( is_archive() ) :
                    get_template_part( 'template-parts/content', 'post-tease' );
                else :
                    get_template_part( 'template-parts/content', get_post_type() );
                endif;

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
