<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Forme
 */

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
				<a href="<?php echo home_url(); ?>" class="header__logo"><img src="/wp-content/uploads/2022/10/heade-logo.svg" alt=""></a>

				<div class="header__menu menu">
					<button type="button" class="menu__icon icon-menu"><span></span></button>
					<nav class="menu__body">
						<ul class="menu__list">
							<li class="menu__item"><a href="/psychoterapia" class="menu__link">Terapia</a></li>
							<li class="menu__item"><a href="/dla-rodzicow" class="menu__link">Dla rodziców</a></li>
							<li class="menu__item"><a href="/dla-nauczycieli" class="menu__link">Dla nauczycieli</a></li>
							<li class="menu__item"><a href="/dla-terapeutow" class="menu__link">Dla terapeutów</a></li>
							<li class="menu__item"><a href="/kategoria/aktualnosci" class="menu__link">Blog</a></li>
							<li class="menu__item"><a href="#footer" class="menu__link">Kontakt</a></li>
							<li class="menu__item header__button"><a href="/znajdz-terapeute" class="menu__link">Znajdź terapeutę</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<main class="page">