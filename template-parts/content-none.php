<?php
/*
Theme Name:         Wiki
Beschreibung:       Conten-none ist ein template File für nicht vorhandene Beiträge
Version:            0.6
Author:             Yannick Bach
*/

?>

<div class="nichtsgefunden">
<header class="page-header nichts">
	<i class="fas fa-exclamation-triangle fa-9x"></i> <!-- Warnungs Icon -->
	<h1 class="page-title"><?php _e( 'Oops! Nichts gefunden', 'foundationpress' ); ?></h1> <!-- Ausgabe des Titels, wenn nichts gefunden wurde -->
</header>
<div class="page-content nichts">
	<?php if ( is_search() ) : ?> <!-- Ausgabe falls es sich um eine Suche handelt -->
	<p><?php _e( 'Leider konnte die von Ihnen Angefragte Seite nicht gefunden werden. Vielleicht hilft ihnen eine Suche weiter.', 'foundationpress' ); ?></p>
	<?php get_search_form(); ?> <!-- WordPress Suchfunktion -->
	<?php else : ?>  <!-- Ausgabe wenn keine Beiträge vorhanden sind -->
	<p><?php _e( 'Leider konnte die von Ihnen Angefragte Seite nicht gefunden werden. Vielleicht hilft ihnen eine Suche weiter.', 'foundationpress' ); ?></p>
	<?php get_search_form(); ?> <!-- WordPress Suchfunktion -->
	<?php endif; ?>
</div>
</div>
