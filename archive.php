<?php
/*
Theme Name:         Wiki
Beschreibung:       Das Archiv File zeigt Beiträge sortiert nach Kategorien an
Version:            0.5
Author:             Yannick Bach
*/

get_header(); ?>

<div class="container">
	<div class="row main">
		<div class="col-md-8">
			<div class="crumb">
				<?php if (function_exists('nav_breadcrumb')) nav_breadcrumb(); ?>
			</div>
			<div class="kategorietitel">
				<h2>Kategorie: <?php single_cat_title(); ?></h2>
				<p><?php echo category_description(); ?></p>
			</div>
			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content-page', get_post_format() ); ?>
				<?php endwhile; ?>
				<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
				<?php endif;?>
		</div>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer();
