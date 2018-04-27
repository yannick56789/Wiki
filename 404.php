<?php
/*
Theme Name:         Wiki
Beschreibung:       Das standart File für Fehlermeldugnen
Version:            0.9
Author:             Yannick Bach
*/

get_header(); ?>

<div class="container">
	<div class="row main notfound">
		<div class="col-lg">
			<div class="entry-content">
				<div class="fiernullfier">
					<div class="error">
						<h1 class="errortitel">404</h1>
						<p class="bottom">Die Seite, die Sie suchen, wurde möglicherweise entfernt oder umbennant, oder ist vorübergehend nicht verfügbar.</p>
					</div>
					<p><?php get_search_form(); ?></p> <!-- WordPress Suchfunktion -->
				</div>
			</div>
		</div>
	</div> <!-- Row -->
</div> <!-- Container -->

<?php get_footer();
