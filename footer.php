<?php
/*
Theme Name:         Wiki
Beschreibung:       Footer File, bildet den Schluss jeder einzelnen Seite.
Version:            0.1
Author:             Yannick Bach
*/

?>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
      </div>
      <div class="col-md-3">
      </div>
      <div class="col-md-3">
      </div>
      <div class="col-md-3">
      </div>
    </div>
    <div class="row">
      <div class="col-lg">
      </div>
    </div>
  </div>
</footer>


<?php //dynamic_sidebar( 'footer-widgets' ); ?>


<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>
<script rel="javascript" src="<?php bloginfo('template_directory')?>/js/bootstrap.min.js"></script> <!-- Bootstrap Javascript -->

<?php wp_footer(); ?>
</body>
</html>
