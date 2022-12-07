<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Racoon
 */

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="maquette des ratons laveurs">
    <title>Racoon</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/webfiles/css//style.css">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/src/img/racoonLogo.png" type="image/x-icon">
</head>

<body>
<header>
	<nav>
		<ul>
			<li><a href="#" title="Redirection acceuil">Accueil</a></li>
			<li><a href="<?php include_once(__DIR__ . "/articles.php"); ?>" 
			title="Redirection articles" class="active">Articles</a></li>
			<li><a href="#" title="Redirection a propos">A propos</a></li>
			<li><a href="#" title="Redirection contact">Contact</a></li>
		</ul>
		<ul>
			<li>
				<a href="#" title="Redirection vers Facebook" target="_blank">
					<img src="<?php echo get_template_directory_uri() ?>/src/img/facebook.png" alt="Logo de Facebook">
				</a>
			</li>
			<li>
				<a href="#" title="Redirection vers Twitter" target="_blank">
					<img src="<?php echo get_template_directory_uri() ?>/src/img/twitter.png" alt="Logo de Twitter">
				</a>
			</li>
		</ul>
	</nav>
	<img src="<?php echo get_template_directory_uri() ?>/src/img/joggeuse.webp"
		alt="Illustration d'une joggeuse qui descend de la montagne (à pied)" class="decoration">
</header>