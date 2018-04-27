<?php
/*
Theme Name:         Wiki
Beschreibung:       Dieses File zeigt die Suchergebnise bei einer Suche an.
Version:            0.9
Author:             Yannick Bach
*/

get_header(); ?>

<div class="container">
	<div class="row main">
		<div class="col-md-8">
			<main id="search-results" class="main-content">
				<div class="Suchergebnisse">
					<h2><?php _e( '<i class="fas fa-search fa-1x"></i> Ergebnisse für', 'foundationpress' ); ?> "<?php echo get_search_query(); ?>"</h2> <!-- Ausgabe der Suchanfrage -->
				</div>
				<div class="weiteresuche">
					<?php echo ('<p>Nicht gefunden was Sie suchen? Überprüfen Sie ihre Eingaben. </p>'); ?>
					<?php get_search_form(); ?> <!-- WordPress Suchfunktion -->
				</div>
				<?php if ( have_posts() ) : // Beginn Post Loop // ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content-page', get_post_format() ); ?>
				<?php endwhile; ?>
				<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
				<?php endif; // Ende Post Loop //?>
			</main>
		</div>
		<div class="col-md-4">
			<?php get_sidebar(); ?> <!-- WordPress Suchfunktion -->
		</div>
	</div> <!-- Row -->
</div> <!-- Container -->

<?php get_footer();
