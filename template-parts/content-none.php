<?php
/*
Theme Name:         Wiki
Beschreibung:       Conten-none ist ein template File für nicht vorhandene Beiträge
Version:            0.4
Author:             Yannick Bach
*/

?>

<div class="nichtsgefunden">
<header class="page-header nichts">

	<i class="fas fa-exclamation-triangle fa-9x"></i>
	<h1 class="page-title"><?php _e( 'Oops! Nichts gefunden', 'foundationpress' ); ?></h1>
</header>

<div class="page-content nichts">
	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

	<p>
		<?php
			/* translators: %1$s: new post url */
			printf(
				__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'foundationpress' ),
				admin_url( 'post-new.php' )
			);
		?>
	</p>

	<?php elseif ( is_search() ) : ?>

	<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'foundationpress' ); ?></p>
	<?php get_search_form(); ?>

	<?php else : ?>

	<p><?php _e( 'Leider konnte die von Ihnen Angefragte Seite nicht gefunden werden. Vielleicht hilft ihnen eine Suche weiter.', 'foundationpress' ); ?></p>
	<?php get_search_form(); ?>
	<?php endif; ?>
</div>
</div>
