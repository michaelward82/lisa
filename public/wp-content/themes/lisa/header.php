<?php
/*
Template Name: Header
*/

$args = array(
	'depth'       => 0,
	'sort_column' => 'menu_order, post_title',
	'menu_class'  => 'menu',
	'include'     => '',
	'exclude'     => '',
	'echo'        => true,
	'show_home'   => false,
	'link_before' => '',
	'link_after'  => '' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="pan">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="fade-in-late">
		<h1>Leigh Independant <br>Supporters Association</h1>
		<div id="header-btns">
			<?php wp_page_menu( $args ); ?>
		</div>
	</header>
