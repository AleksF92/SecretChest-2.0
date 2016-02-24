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

		echo "<div class='row edit-mode'>";
			echo "<h1>" . $iMode . "</h1>";
		echo "</div>";

		echo "<form role='form'>";
			echo "<div class='row title'>";
				echo "<p>Tittel:</p>";
				echo "<div class='col-md-6'><input class='input-title' type='text' placeholder='Skriv inn tittel her...' value='" . $iTitle . "'></div>";
			echo "</div></br>";

			echo "<div class='row upload'>";
				echo "<p>Filer:</p>";
				echo "<div class='col-md-6'><input class='input-upload-path' type='text' placeholder='Velg en fil...'></div>";
				echo "<div class='col-md-2'><input class='input-upload' type='button' value='Last opp'></div>";
			echo "</div></br>";

			echo "<div class='row content'>";
				echo "<p>Innhold:</p>";
				echo "<div class='col-md-10'><textarea id='input-content' rows='10'>" . $iContent . "</textarea></div>";
			echo "</div></br>";

			echo "<div class='row settings'>";
				echo "<p>Innstillinger:</p>";
				echo "<div class='checkbox'>";
					echo "<label><input type='checkbox'>Publisert?</label>";
				echo "</div>";
			echo "</div></br>";

			echo "<div class='row finish'>";
				echo "<div class='col-md-2'><input class='input-save' type='button' value='Lagre artikkel'></div>";
				echo "<div class='col-md-2'><input class='input-preview' type='button' value='Vis artikkel'></div>";
			echo "</div>";
		echo "</form>";
	}
?>