<?php
/*
Theme Name:         Wiki
Beschreibung:       Das Index File bildet die Startseite der Homepage.
Version:            0.9
Author:             Yannick Bach
*/

get_header(); ?>

<div class="startseite">
	<div class="container">
		<h1 class="titelstart">Intronic AG - Unternehmens Wiki</h1>
		<p>Dies ist das offizielle Unternehmens Wiki der Firma Intronic AG. Hier finden Sie Anleitungen und Beiträge die Ihnen bei ihrem täglichem Arbeitsablauf helfen können.
		Wurde eine Frage noch nicht beantwortet? Wenden Sie sich an das <a href="http://10.100.146.11/wiki/forums/forum/forum/">Forum.</a></p>
		<p><?php get_search_form(); ?></p> <!-- WordPress Suchfunktion -->
	</div> <!-- Container -->
</div>

<div class="container">
	<div class="row main">
		<div class="col-md-8">
			<?php if ( have_posts() ) : // Beginn des Loops // ?>
				<?php while ( have_posts() ) : the_post(); ?> <!-- Abfrage ob Beiträge vorhanden sind -->
					<?php get_template_part( 'template-parts/content-page', get_post_format() ); ?> <!-- Wenn Beiträge vorhanden sind, werden diese mit dem Template content-page.php ausgegeben -->
				<?php endwhile; ?>
				<?php else : ?> <!-- Wenn keine Beiträge vorhanden sind -->
					<?php get_template_part( 'template-parts/content-none' ); ?>
				<?php endif; // Ende des Loops // ?>
		</div>

		<div class="col-md-4">
			<?php get_sidebar(); ?> <!-- WordPress Seitennavigation -->
		</div>
	</div> <!-- Row -->
</div><!-- Container -->


<?php get_footer();
