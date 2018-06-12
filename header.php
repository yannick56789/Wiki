<?php
/*
Theme Name:         Wiki
Beschreibung:       Header File, bildet den Kopf der Webseite und beinhaltet die Navigation
Version:            0.9
Author:             Yannick Bach
*/

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" href="<?php bloginfo('template_directory')?>/favicon.ico" /> <!-- Einbettung des Favicon -->
		<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/style.css" /> <!-- Eigenes CSS -->
		<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/web-fonts-with-css/css/fontawesome-all.css" /> <!-- Einbettung Fontawesome CSS -->
		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>

	<header class="starter">
		<div class="container">
			<div class="row main">
				<div class="col-lg">
					<?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo();} ?> <!-- Funktion für ein eigens bestimmtes Logo -->
				</div>
			</div> <!-- row -->
			<div class="row main">
				<div class="col-md-8 hauptnavigation">
					<nav class="navbar navbar-expand-md navbar-dark bg-dark" role="navigation"> <!-- Navigation Grundstruktur von Bootstrap https://getbootstrap.com/docs/4.0/components/navbar/ -->
						<ul class="nav navbar-nav">
							<?php foundationpress_top_bar_r(); ?> <!-- Menüstruktur von Wordpress -->
						</ul>
					</nav>
				</div>
				<div class="col-md-4 headerrechts">
					<div class="suchfunktonheader">
						<?php get_search_form(); ?>
					</div>
				</div>
			</div> <!-- row -->
		</div> <!-- Container -->
	</header>
