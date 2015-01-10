<?php
/*
Template Name: Header
*/

$htmlClass = '';

if (is_front_page()) {
	$htmlClass = 'pan';
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="<?php echo $htmlClass ?>">
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
			<a class="btn info" href="/find-out-more/">Find out more</a>
			<a class="btn info" href="">Latest news</a>
			<a class="btn cta inverted" href="/join/">Join today</a>
		</div>
	</header>
	<div id="container" class="fade-in">
