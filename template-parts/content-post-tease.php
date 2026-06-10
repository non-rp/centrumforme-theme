<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Forme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-tease-wrapper'); ?>>
	<?php if (!is_singular() && 'post' === get_post_type()) : ?>
		<div class="post-tease-wrapper__img">
			<?php if (has_post_thumbnail()) : ?>
			<?php forme_post_thumbnail(); ?>
			<?php else : ?>
				<div class="post-tease-wrapper__img--placeholder"></div>
			<?php endif; ?>
		</div>
		<div class="post-tease-wrapper__content">
			<header class="entry-header">
				<?php the_title( '<h2 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
				<div class="post-meta"><?php forme_posted_on(); ?></div>
			</header>

			<div class="post-description">
				<?php the_excerpt(); ?> 
				<a href="<?php echo esc_url( get_permalink()); ?>">więcej</a>
			</div>
		</div>
	<?php else : ?>
	<?php endif; ?>


	<footer class="entry-footer">
		<?php // forme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
