<?php
/*
Theme Name:         Wiki
Beschreibung:       Dieses File zeigt die Suchergebnise bei einer Suche an.
Version:            0.5
Author:             Yannick Bach
*/

get_header(); ?>

<div class="container">
	<div class="row main">
		<div class="col-md-8">
			<main id="search-results" class="main-content">
				<div class="Suchergebnisse">
					<h2><?php _e( '<i class="fas fa-search fa-1x"></i> Ergebnisse für', 'foundationpress' ); ?> "<?php echo get_search_query(); ?>"</h2>
				</div>
				<div class="weiteresuche">
					<?php echo ('<p>Nicht gefunden was Sie suchen? Überprüfen Sie ihre Eingaben. </p>'); ?>
					<?php get_search_form(); ?>
				</div>

				<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
				<?php endwhile; ?>

				<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
			</main>
		</div>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer();
