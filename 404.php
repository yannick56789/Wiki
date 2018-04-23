<?php
/*
Theme Name:         Wiki
Beschreibung:       Das standart File für Fehlermeldugnen
Version:            0.5
Author:             Yannick Bach
*/

get_header(); ?>

<div class="container">
	<div class="row main">
		<div class="col-md-8">
			<article>
				<div class="fiernullfier">
					<i class="fas fa-exclamation-triangle fa-9x"></i>
					<h1 class="entry-title"><p>Seite konnte leider nicht gefunden werden.</p></h1>
				</div>
				<div class="entry-content">
					<div class="error">
						<p class="bottom">Die Seite, die Sie suchen, wurde möglicherweise entfernt oder umbennant, oder ist vorübergehend nicht verfügbar. Vielleicht hilft eine Suche</p>
					</div>
					<p><?php get_search_form(); ?></p>
					<ul>
						<li>
							<?php _e( 'Überprüfen Sie ihre Eingabe auf Rechtschreibefehler', 'foundationpress' ); ?>
						</li>
						<li>
							<?php
								printf(
									__( 'Zurück zur <a href="%s">Startseite</a>', 'foundationpress' ),
									home_url()
								);
							?>
						</li>
						<li>
							<?php _e( 'Eine Seite <a href="javascript:history.back()">zurück</a>', 'foundationpress' ); ?>
						</li>
					</ul>
				</div>
			</article>
		</div>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer();
