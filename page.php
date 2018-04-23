<?php
/*
Theme Name:         Wiki
Beschreibung:       Das standart für Beiträge
Version:            0.5
Author:             Yannick Bach
*/

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="container">
	<div class="row main">
		<div class="col-md-8">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php comments_template(); ?>
			<?php endwhile; ?>
		</div>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php
get_footer();
