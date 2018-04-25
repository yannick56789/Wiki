<?php
/*
Theme Name:         Wiki
Beschreibung:       Das standart für Beiträge
Version:            0.5
Author:             Yannick Bach
*/

get_header(); ?>

<div class="container">
	<div class="row main">
		<div class="col-md-8">
			<?php while ( have_posts() ) : the_post(); // Beginn Post Loop // ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php comments_template(); ?>
			<?php endwhile; // Ende Post Loop // ?>
		</div>
		<div class="col-md-4">
			<?php get_sidebar(); ?> <!-- WordPress Seitennavigation -->
		</div>
	</div> <!-- Row -->
</div> <!-- Container -->
<?php
get_footer();
