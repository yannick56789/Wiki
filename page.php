<?php
/*
Theme Name:         Wiki
Beschreibung:       Das standart File für Seiten
Version:            0.5
Author:             Yannick Bach
*/

get_header(); ?>

<div class="container">
	<div class="row main">
		<div class="col-md-8">
			<div class="crumb">
				<?php if (function_exists('nav_breadcrumb')) nav_breadcrumb(); ?> <!-- Breadcrumb Navigation Funktion -->
			</div>
			<article>
				<?php
				if ( !is_user_logged_in() ){ // Macht eine Abfrage ob der Nutzer angemeldet ist //
					the_title( '<h1 class="titel">', '</h1>' ); // Zeigt den Titel der Seite //
					echo "Sie müssen eingeloggt sein um diesen Inhalt zu sehen."; }
				else {
					the_title( '<h1 class="titel">', '</h1>' ); // Zeigt den Titel der Seite //
				while ( have_posts() ) : the_post(); // Ist der Nutzer angemeldet wird der Inhalt ausgegeben //
					the_content('');
				endwhile;
				}
				?>
			</article>
		</div>
		<div class="col-md-4">
			<?php get_sidebar(); ?> <!-- WordPress Seitennavigation -->
		</div>
	</div> <!-- Row -->
</div> <!-- Container -->

<?php get_footer();
