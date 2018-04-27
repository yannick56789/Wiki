<?php
/*
Theme Name:         Wiki
Beschreibung:       Content-Page ist ein bestandteil des Post Loops und gibt einzelne Seiten aus
Version:            0.9
Author:             FoundationPress
*/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="titel">', '</h1>' ); // Abfrage ob der Beitrag einzeln geöffnet ist oder in einer Liste angezeigt wird //
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); // Den Titel der Seite mit einem Link zum selbigen Beitrag verbinden //
			}
		?>
		<?php foundationpress_entry_meta(); ?> <!-- WordPress verlinkung des Beitrags mit den Metadaten -->
	</header>
	<div class="entry-content">
		<?php if (is_single() ){ // Abfrage ob der Beitrag einzeln geöffnet ist oder in einer Liste angezeigt wird //
			the_content();
		}else{
				the_excerpt(); // Wird der Beitrag in einer Liste angezeigt, wird nur der Auszug ausgegeben //
			}
		?>
	</div>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?> <!-- Verlinkung des Beitrags mit seinen Tags -->
	</footer>
</article>
