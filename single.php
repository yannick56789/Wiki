<?php
/*
Theme Name:         Wiki
Beschreibung:       Das Single File zeigt einen einzelnen Beitrag an
Version:            0.3
Author:             Yannick Bach
*/

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="container">
	<div class="row main">
		<div class="col-md-8">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', '' ); ?>
				<?php the_post_navigation(); ?>
				<?php comments_template(); ?>
			<?php endwhile; ?>
		</div>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer();
