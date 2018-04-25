<?php
/*
Theme Name:         Wiki
Beschreibung:       Das Index File bildet die Startseite der Homepage.
Version:            0.3
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
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content-page', get_post_format() ); ?>
				<?php endwhile; ?>
				<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
				<?php endif; // Ende des Loops // ?>
		</div>

		<div class="col-md-4">
			<?php get_sidebar(); ?> <!-- WordPress Seitennavigation -->
		</div>
	</div> <!-- Row -->
</div><!-- Container -->


<?php get_footer();
