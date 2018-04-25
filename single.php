<?php
/*
Theme Name:         Wiki
Beschreibung:       Das Single File zeigt einen einzelnen Beitrag an
Version:            0.5
Author:             Yannick Bach
*/

get_header(); ?>

<div class="container">
	<div class="row main">
		<div class="col-md-8">
			<div class="crumb">
				<?php if (function_exists('nav_breadcrumb')) nav_breadcrumb(); ?> <!-- Breadcrumb Navigation Funktion -->
			</div>
			<?php while ( have_posts() ) : the_post(); // Beginn des Post Loops // ?>
				<?php get_template_part( 'template-parts/content', '' ); ?>
				<?php comments_template(); ?>
			<?php endwhile; // Ende des Post Loops // ?>
		</div>
		<div class="col-md-4">
			<?php get_sidebar(); ?> <!-- WordPress Seitennavigation -->
		</div>
	</div> <!-- Row -->
</div> <!-- Container -->

<?php get_footer();
