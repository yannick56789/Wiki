<?php
/*
Theme Name:         Wiki
Beschreibung:       Footer File, bildet den Schluss jeder einzelnen Seite.
Version:            0.9
Author:             Yannick Bach
*/

?>
    <footer>
      <div class="footerfirst">
        <div class="container">
          <div class="row main">
            <div class="col-md-4 iconlink">
              <a href="<?php echo get_home_url(); ?>"><i class="fas fa-home fa-4x"></i></a> <!-- Verlinkt zur Startseite -->
              <p>Sie befinden sich auf dem Unternehmenswiki der Intronic AG. Hier finden Sie Anleitungen und Beiträge zum Firmenablauf.</p>
            </div>
            <div class="col-md-4 iconlink">
              <a href="<?php echo get_home_url(); ?>/<?php echo date("Y"); ?>"><i class="fas fa-archive fa-4x"></i></a> <!-- Verlinkt zum Archiv des aktuellen Jahres -->
              <p>Auf dieser Seite befindet sich ein Archiv aus Anleitungen die sie für den Berufsalltag der Intronic AG benutzen können.</p>
            </div>
            <div class="col-md-4 iconlink">
              <a href="<?php echo get_home_url(); ?>/intern/"><i class="fas fa-address-book fa-4x"></i></a> <!-- Verlinkt zur Seite "intern" -->
              <p>Greifen Sie auf Interne Kontaktdaten zu. Private und direkte Telefonnummern stehen ihnen zur verfügung.</p>
            </div>
          </div> <!-- Row -->
        </div> <!-- Container -->
      </div>
      <div class="footersecond">
        <div class="container">
          <div class="row main">
            <div class="col-md-3">
              <?php dynamic_sidebar( 'footer_widget_ganz_links' ); ?> <!-- Footer Funktion, ganz Links -->
            </div>
            <div class="col-md-3">
              <?php dynamic_sidebar( 'footer_widget_mitte_links' ); ?> <!-- Footer Funktion, mitte Links -->
            </div>
            <div class="col-md-3">
              <?php dynamic_sidebar( 'footer_widget_mitte_rechts' ); ?> <!-- Footer Funktion, mitte rechts -->
            </div>
            <div class="col-md-3">
              <?php dynamic_sidebar( 'footer_widget_ganz_rechts' ); ?> <!-- Footer Funktion, ganz ganz -->
            </div>
          </div> <!-- Row -->
        </div> <!-- Container -->
      </div>
      <div class="footerthird">
        <div class="container">
          <div class="row main">
            <div class="col-lg">
              <p>Intronic AG &copy; <?php echo date("Y"); ?></p>
            </div>
          </div> <!-- Row -->
        </div> <!-- Container -->
      </div>
    </footer>

    <?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>

    <?php endif; ?>
    <script rel="javascript" src="<?php bloginfo('template_directory')?>/js/bootstrap.min.js"></script> <!-- Bootstrap Javascript -->

    <?php wp_footer(); ?>
  </body>
</html>
