<?php
/**
 * The header: document head and the opening site header / navigation.
 *
 * @package Forme
 */

defined( 'ABSPATH' ) || exit;

$forme_logo     = forme_option( 'logo' );
$forme_logo_url = ! empty( $forme_logo['url'] ) ? $forme_logo['url'] : '/wp-content/uploads/2022/10/heade-logo.svg';
$forme_logo_alt = ! empty( $forme_logo['alt'] ) ? $forme_logo['alt'] : get_bloginfo( 'name' );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<div class="wrapper">
		<header class="header">
			<div class="header__container">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__logo"><img src="<?php echo esc_url( $forme_logo_url ); ?>" alt="<?php echo esc_attr( $forme_logo_alt ); ?>"></a>

				<div class="header__menu menu">
					<button type="button" class="menu__icon icon-menu"><span></span></button>
					<?php forme_nav_menu( 'primary' ); ?>
				</div>
			</div>
		</header>

		<main class="page">
