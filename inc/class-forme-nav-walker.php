<?php
/**
 * Navigation walker that outputs the theme's BEM menu markup
 * (.menu__list / .menu__item / .menu__link).
 *
 * @package Forme
 */

defined( 'ABSPATH' ) || exit;

/**
 * Custom nav walker for the primary/footer menus.
 */
class Forme_Nav_Walker extends Walker_Nav_Menu {

	/**
	 * Start a sub-menu level.
	 *
	 * @param string   $output Passed by reference.
	 * @param int      $depth  Depth of menu item.
	 * @param stdClass $args   Menu arguments.
	 */
	public function start_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '<ul class="menu__sub-list">';
	}

	/**
	 * End a sub-menu level.
	 *
	 * @param string   $output Passed by reference.
	 * @param int      $depth  Depth of menu item.
	 * @param stdClass $args   Menu arguments.
	 */
	public function end_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '</ul>';
	}

	/**
	 * Start a menu item.
	 *
	 * @param string   $output Passed by reference.
	 * @param WP_Post  $item   Menu item data object.
	 * @param int      $depth  Depth of menu item.
	 * @param stdClass $args   Menu arguments.
	 * @param int      $id     Current item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		// Keep only author-added CSS classes (drop WordPress' auto-generated ones).
		$auto_prefixes = array( 'menu-item', 'current-menu', 'current_page', 'page-item', 'page_item' );
		$custom        = array();

		foreach ( (array) $item->classes as $class ) {
			if ( '' === $class ) {
				continue;
			}
			$is_auto = false;
			foreach ( $auto_prefixes as $prefix ) {
				if ( 0 === strpos( $class, $prefix ) ) {
					$is_auto = true;
					break;
				}
			}
			if ( ! $is_auto ) {
				$custom[] = $class;
			}
		}

		$li_classes = trim( 'menu__item ' . implode( ' ', $custom ) );
		$url        = ! empty( $item->url ) ? $item->url : '#';
		$target     = ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';

		$output .= '<li class="' . esc_attr( $li_classes ) . '">';
		$output .= '<a class="menu__link" href="' . esc_url( $url ) . '"' . $target . '>' . esc_html( $item->title ) . '</a>';
	}

	/**
	 * End a menu item.
	 *
	 * @param string   $output Passed by reference.
	 * @param WP_Post  $item   Menu item data object.
	 * @param int      $depth  Depth of menu item.
	 * @param stdClass $args   Menu arguments.
	 */
	public function end_el( &$output, $item, $depth = 0, $args = null ) {
		$output .= '</li>';
	}
}

/**
 * Echo the default menu <li> items.
 *
 * Used as a fallback before a menu is assigned to a location so the header and
 * footer are never empty.
 */
function forme_default_menu_items() {
	$items = array(
		array( '/psychoterapia', __( 'Terapia', 'forme' ) ),
		array( '/dla-rodzicow', __( 'Dla rodziców', 'forme' ) ),
		array( '/dla-nauczycieli', __( 'Dla nauczycieli', 'forme' ) ),
		array( '/dla-terapeutow', __( 'Dla terapeutów', 'forme' ) ),
		array( '/kategoria/aktualnosci', __( 'Blog', 'forme' ) ),
		array( '#footer', __( 'Kontakt', 'forme' ) ),
	);

	foreach ( $items as $item ) {
		printf(
			'<li class="menu__item"><a class="menu__link" href="%s">%s</a></li>',
			esc_url( $item[0] ),
			esc_html( $item[1] )
		);
	}
}

/**
 * Render the site navigation (primary or footer location) with the CTA button.
 *
 * @param string $location Menu location: 'primary' or 'footer'.
 */
function forme_nav_menu( $location = 'primary' ) {
	$cta       = forme_option( 'header_cta', array() );
	$cta_label = ! empty( $cta['label'] ) ? $cta['label'] : __( 'Znajdź terapeutę', 'forme' );
	$cta_url   = ! empty( $cta['url'] ) ? $cta['url'] : '/znajdz-terapeute';
	$cta_li    = '<li class="menu__item header__button"><a class="menu__link" href="' . esc_url( $cta_url ) . '">' . esc_html( $cta_label ) . '</a></li>';

	echo '<nav class="menu__body">';

	if ( has_nav_menu( $location ) ) {
		wp_nav_menu(
			array(
				'theme_location' => $location,
				'container'      => false,
				'menu_class'     => 'menu__list',
				'items_wrap'     => '<ul class="%2$s">%3$s' . $cta_li . '</ul>',
				'walker'         => new Forme_Nav_Walker(),
				'depth'          => 2,
			)
		);
	} else {
		echo '<ul class="menu__list">';
		forme_default_menu_items();
		echo $cta_li; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- built from escaped parts above.
		echo '</ul>';
	}

	echo '</nav>';
}
