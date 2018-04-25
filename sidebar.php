<?php
/*
Theme Name:         Wiki
Beschreibung:       Die sidebar oder Seitennavigation wird auf jeder Seite rechts angezeigt.
Version:            0.4
Author:             Yannick Bach
*/
?>

<aside class="sidebar">
	<div class="seitennavigation">
		<div id="accordion"> <!-- Accrodion Grundstruktur von Bootstrap https://getbootstrap.com/docs/4.0/components/collapse/ -->
		  <div class="card">
				<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		    	<div class="card-header" id="headingOne">
		      	<h2 class="mb-0">
		          Anmelden
		      	</h2>
		    	</div>
				</button>
		    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
		      <div class="card-body">
		       <?php wp_login_form(); ?> <!-- WordPress Anmeldeformular -->
		      </div>
		    </div>
		  </div>
		</div> <!-- Grundstruktur Bootstrap Accordion -->
		<div class="card-body unique">
			<i class="fas fa-user"></i> &nbsp; <b> <!-- Benuter Icon -->
			<?php 	if ( is_user_logged_in() ) { $current_user = wp_get_current_user(); echo '' . $current_user->user_login . ''; // Abfrage ob Benutzer eingeloggt ist //
    		} 	else {
        	echo( 'Nicht Angemeldet' );
    		}
			?> </b>
			<br>
			<span class="nichtkorrekt">
				<i>Nicht korrekt?</i> <?php wp_loginout(); ?> <!-- WordPress Ein-/Ausloggen Link -->
			</span> <br>
		</div>

			<div class="card-body unique">
				<?php dynamic_sidebar( 'sidebar-widgets' ); ?> <!-- WordPress Seitennavigation -->
			</div>
		</div>
</aside>
