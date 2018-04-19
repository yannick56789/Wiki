<?php
/*
Theme Name:         Wiki
Beschreibung:       Footer File, bildet den Schluss jeder einzelnen Seite.
Version:            0.3
Author:             Yannick Bach
*/

?>
<footer>
  <div class="footerfirst">
    <div class="container">
      <div class="row main">
        <div class="col-md-4">
          <i class="fas fa-home fa-4x"></i>
          <p>Sie befinden sich auf dem Unternehmenswiki der Intronic AG. Hier finden Sie Anleitungen und Beiträge zum Firmenablauf.</p>
        </div>
        <div class="col-md-4">
          <i class="fas fa-archive fa-4x"></i>
          <p>Auf dieser Seite befindet sich ein Archiv aus Anleitungen die sie für den Berufsalltag der Intronic AG benutzen können.</p>
        </div>
        <div class="col-md-4">
          <i class="fas fa-address-book fa-4x"></i>
          <p>Roger Wetzel: (+) 41 52 644 00 99 <br>
             Ralph Morgenthaler: (+) 41 52 644 00 83 <br>
             Intronic Lager: (+) 41 52 644 00 81 </p>
        </div>
      </div>
    </div>
  </div>
  <div class="footersecond">
    <div class="container">
      <div class="row main">
        <div class="col-md-3">
          <?php dynamic_sidebar( 'footer_widget_ganz_links' ); ?>
        </div>
        <div class="col-md-3">
          <?php dynamic_sidebar( 'footer_widget_mitte_links' ); ?>
        </div>
        <div class="col-md-3">
          <?php dynamic_sidebar( 'footer_widget_mitte_rechts' ); ?>
        </div>
        <div class="col-md-3">
          <?php dynamic_sidebar( 'footer_widget_ganz_rechts' ); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="footerthird">
    <div class="container">
      <div class="row main">
        <div class="col-lg">
          <p>Intronic AG &copy; <?php echo date("Y"); ?></p>
        </div>
      </div>
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
