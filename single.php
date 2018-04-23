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
				<?php if (function_exists('nav_breadcrumb')) nav_breadcrumb(); ?>
			</div>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', '' ); ?>
				<?php the_post_navigation(); ?><br>
				<?php comments_template(); ?>
			<?php endwhile; ?>
		</div>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer();
