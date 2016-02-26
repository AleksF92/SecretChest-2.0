<?php
	include_once("classes/database.php");

	function Load_Article() {
		$linkId = $_GET["linkId"];
		$articles = $GLOBALS["DB"]->query("SELECT title, content FROM article WHERE linkId='$linkId'");

		//Initialize article data
		$iMode = "OPPRETT NY ARTIKKEL";
		$iTitle = "";
		$iContent = "";

		//Load if article exists
		if ($articles->num_rows > 0) {
			$iMode = "REDIGER ARTIKKEL";

			$aData = $articles->fetch_assoc();
			$iTitle = $aData["title"];
			$iContent = $aData["content"];
		}

		echo "<div class='edit-mode'>";
			echo "<h1>" . $iMode . "</h1>";
		echo "</div>";

		echo "<form role='form'>";
			echo "<div class='form-group title'>";
				echo "<p>Tittel:</p>";
				echo "<div class='row'>";
					echo "<div class='col-md-6'><input class='form-control input-title' type='text' placeholder='Skriv inn tittel her...' value='" . $iTitle . "'></div>";
				echo "</div>";
			echo "</div></br>";

			echo "<div class='form-group upload'>";
				echo "<p>Filer:</p>";
				echo "<div class='row'>";
					echo "<div class='col-md-6'><input class='form-control input-upload-path' type='text' placeholder='Velg en fil...'></div>";
					echo "<div class='col-md-2'><input class='form-control input-upload' type='button' value='Last opp'></div>";
				echo "</div>";
			echo "</div></br>";

			echo "<div class='form-group content'>";
				echo "<p>Innhold:</p>";
				echo "<div class='row'>";
					echo "<div class='col-md-10'><textarea class='form-control input-content' rows='10'>" . $iContent . "</textarea></div>";
				echo "</div>";
			echo "</div></br>";

			echo "<div class='form-group settings'>";
				echo "<p>Innstillinger:</p>";
				echo "<div class='checkbox'>";
					echo "<label><input type='checkbox'>Publisert?</label>";
				echo "</div>";
			echo "</div></br>";

			echo "<div class='form-group finish'>";
				echo "<div class='row'>";
					echo "<div class='col-md-2'><input class='form-control input-save' type='button' value='Lagre artikkel'></div>";
					echo "<div class='col-md-2'><input class='form-control input-preview' type='button' value='Vis artikkel'></div>";
				echo "</div>";
		echo "</form>";
	}

	function Get_Title() {
		return "Hearthstone får en reset!";
	}

	function Get_Content() {
		return '<p>Virtual Reality har i de siste årene fått mye hype!<br>
		I starten av 2015 fikk også YouTube støtte for 360-graders videoer, hvor du kan snu kameraet rundt som du vil. Dette er noe vi ikke så for oss at ville bli støttet på YouTube før om lang tid. Og har heller ikke fått den annonseringen det fortjener…</p>
		<p>Men nå på Comic-Con 2015 har Legendary, produsenten av bla. Warcraft-filmen som vi alle gleder oss til, gitt oss en snikktitt inn i den nydelige fremtiden! Nedenfor er et klipp som er inspirert av Warcraft-filmen. Hvor du flyr over byen Stormwind og kan kikke deg rundt med å holde museknappen inne.<br>
		<strong>(Anbefaler å prøve å se denne videoen på telefonen din hvis du har Android eller iOS for da kan du nemlig bare bevege den rundt deg for å bytte vinkel. Helt magisk!)</strong></p>
		<p><span class="embed-youtube" style="text-align:center; display: block;"><iframe class="youtube-player" type="text/html" width="800" height="480" src="http://www.youtube.com/embed/K_J8k43gUhY?version=3&rel=1&fs=1&autohide=2&showsearch=0&showinfo=1&iv_load_policy=1&wmode=transparent" frameborder="0" allowfullscreen="true"></iframe></span></p>
		<p>Vi venter fortsatt i spenning på den offisielle traileren til Warcraft-filmen, men siden det meste av produksjonen av filmen faktisk er ferdig er det ikke sikkert det er så utrolig lenge før vi får se noe til den. (Selv om magefølelsen sier at dette kanskje er noe de har lyst til å vente med til årets BlizzCon!)</p>';
	}
?>