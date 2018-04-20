<?php
/*
Theme Name:         Wiki
Beschreibung:       Das standart File für Fehlermeldugnen
Version:            0.4
Author:             Yannick Bach
*/

get_header(); ?>

<div class="container">
	<div class="row main">
		<div class="col-md-8">
			<article>
				<header class="fiernullfier">
					<i class="fas fa-exclamation-triangle fa-9x"></i>
					<h1 class="entry-title"><?php _e( 'Seite konnte leider nicht gefunden werden.', 'foundationpress' ); ?></h1>
				</header>
				<div class="entry-content">
					<div class="error">
						<p class="bottom"><?php _e( 'Die Seite, die Sie suchen, wurde möglicherweise entfernt oder umbennant, oder ist vorübergehend nicht verfügbar.', 'foundationpress' ); ?></p>
					</div>
					<p><?php _e( 'Vielleicht hilft eine Suche', 'foundationpress' ); ?></p>
					<p><?php get_search_form(); ?></p>
					<ul>
						<li>
							<?php _e( 'Überprüfen Sie ihre Eingabe auf Rechtschreibefehler', 'foundationpress' ); ?>
						</li>
						<li>
							<?php
								/* translators: %s: home page url */
								printf(
									__( 'Return to the <a href="%s">home page</a>', 'foundationpress' ),
									home_url()
								);
							?>
						</li>
						<li>
							<?php _e( 'Click the <a href="javascript:history.back()">Back</a> button', 'foundationpress' ); ?>
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
