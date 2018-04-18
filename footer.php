<?php
/**
* Theme: Wiki
* Autor: Yannick Bach
* Version: 0.2
 */
?>

<footer class="footer">
    <div class="footer-container">
        <div class="footer-grid">
            <?php dynamic_sidebar( 'footer-widgets' ); ?>
        </div>
    </div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>
<script rel="javascript" src="<?php bloginfo('template_directory')?>/js/bootstrap.min.js"></script> <!-- Bootstrap Javascript -->

<?php wp_footer(); ?>
</body>
</html>
