<?php
/*
Theme Name:         Wiki
Beschreibung:       Conten-none ist ein template File wenn keine Beiträge vorhanden sind.
Version:            0.9
Author:             Yannick Bach
*/

?>

<div class="nichtsgefunden">
	<header class="page-header nichts">
		<i class="fas fa-exclamation-triangle fa-9x"></i> <!-- Warnungs Icon -->
		<h1 class="page-title"><?php _e( 'Oops! Keine Anleitungen gefunden', 'foundationpress' ); ?></h1> <!-- Ausgabe des Titels, wenn nichts gefunden wurde -->
	</header>
	<div class="page-content nichts">
		<?php if ( is_search() ) : ?> <!-- Ausgabe falls es sich um eine fehlgeschlagene Suchanfrage handelt -->
		<p><?php _e( 'Leider konnten keine Anleitungen gefunden werden. Vielleicht hilft ihnen eine Suche weiter.', 'foundationpress' ); ?></p>
		<?php get_search_form(); ?> <!-- WordPress Suchfunktion -->
		<?php endif; ?>
	</div>
</div>
