<?php /* Template Name: Template1 */ ?>

<?php get_header(); ?>

<div class="container">
	<div class="row main">
    <div class="col-md-8">
			<h1>BM-Zeugnis</h1>
			<p>Hier kannst du berechnen welche Note du für das BM-Zeugnis brauchst, um dieses zu bestehen.</p>
			<ul>
				<li style="float: left; width: 39%;">
					<form method="post">
						<p>Vornote VBR</p><input type="number" name="vorvornotevbr"><br><br>
						<p>Gewünschte Endnote VBR</p><input type="number" name="wunschvbr"><br><br>
					</li>
					<li>
						<p>Vornote F&R</p><input type="number" name="vorvornotefr"><br><br>
						<p>Gewünschte Endnote F&R</p><input type="number" name="wunschfr"><br><br>
						<input type="submit">
					</form>
				</li>
			</ul>
			<?php
			$durch = $wunschvbr * 2;
			$rechnung = $durch - $vorvornotevbr;
			$mach = $wunschfr * 2;
			$rechersche = $mach - $vorvornotefr;

			echo "Du musst in VBR im QV einen $rechnung er schreiben um zu bestehen." .
					"<br>Du musst in FR im QV einen $rechersche er schreiben um zu bestehen."
			?>

			<br><br><br>

			<h1>Notenberechner</h1>
			<p>Berechne deine ungefähre QV Note</p>
			<ul>
				<li style="float: left; width: 39%;">
					<form method="post">
						<p>Vornote VBR</p><input type="text" name="vornotevbr"><br><br>
						<p>Geschätzte Prüfungsnote VBR</p><input type="text" name="notevbr"><br><br>
					</li>
					<li>
						<p>Vornote F&R</p><input type="text" name="vornotefr"><br><br>
						<p>Geschätzte Prüfungsnote F&R</p><input type="text" name="notefr"><br><br>
						<input type="submit" name="submit">
					</form>
				</li>
			</ul>
			<?php
			$vornotevbr = $_POST['vornotevbr'];
			$vornotefr = $_POST['vornotefr'];
			$notevbr = $_POST['notevbr'];
			$notefr = $_POST['notefr'];

			$sumvbr = $vornotevbr + $notevbr;
			$sumfr = $vornotefr + $notefr;

			$ergvbr = $sumvbr / 2;
			$ergfr = $sumfr / 2;

			echo "Zeugnisnote VBR &nbsp; <b>$ergvbr</b><br>";
			echo "<br>Note F&R &nbsp; <b>$ergfr</b>";

			$bmerg = $ergfr + $ergvbr;

			if ($bmerg < 6) {
				echo "<br>Tut mir leid. Für ein BM-Zeugnis reicht es leider nicht.";
			}

			else {
				echo "<br>Juhu! Für's BM-Zeugnis reichts.";
			}
			?>

			<br><br><br>

			<h1>Fakultität Rechner</h1>
			<p>Gib eine Zahl ein und ich rechne dir seine Fakultität aus</p>
				<form method="post">
					<p>Zahl eingeben:</p><input type="text" name="fakapult">
					<input type="submit">
				</form>
				<br>
	      <?php
					$n = $_POST['fakapult'];
					$kopie = $n;
					$fakult = 1;

					while ($n > 0) {
						$fakult = ($n * $fakult);
						$n--;
					}
					echo "Die Fakultität von $kopie ist: <b>$fakult</b>";
	      ?> <br><br><br>

			<h1>Zahlenspiel</h1>
			<p>Gib zwei verschiedene Zahlen ein und ich sage dir welche grösser ist</p>
				<form method="post">
					Zahl A:&nbsp;<input type="text" name="zahla">
					Zahl B:&nbsp;<input type="text" name="zahlb">
					<input type="submit" name="submit" id="knopf">
				</form>
				<br>
				<?php
					$zahla = $_POST['zahla'];
					$zahlb = $_POST['zahlb'];

					if ($zahla > $zahlb) {
						echo "<b>Zahl A ($zahla) ist grösser als Zahl B($zahlb)</b>";
					}
					else {
						echo "<b>Zahl B ($zahlb) ist grösser als Zahl A ($zahla)</b>";
					}
				?><br><br><br>

				<h1>Number Info</h1>
				<p>Schreibe irgendeine Nummer in das unten stehende Feld und siehe was passiert.</p>
					<form method="post">
						<input type="text" name="lol">
						<input type="submit">
					</form>
					<?php
					$lol = $_POST['lol'];

					if (($lol == 69) or ($lol == 420)) {
						echo "$lol, Nice Dude!";
					}
					else {
						echo "$lol, Da kenn ich nix spezielles, versuch eine andere Nummer.";
					}
					?>
					<br><br><br>

    	</div>
    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div>
	</div> <!--- Row -->
</div> <!-- Container -->

<?php get_footer();
