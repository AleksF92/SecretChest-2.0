<?php
	include_once("classes/database.php");

	function Load_Article() {
		$linkId = $_GET["linkId"];
		$articles = $GLOBALS["DB"]->query("SELECT title, content FROM article WHERE linkId='$linkId'");

		if ($articles->num_rows > 0) {
			echo "<h1>REDIGER ARTIKKEL</h1>";
			$aData = $articles->fetch_assoc();
			$aTitle = $aData["title"];
			echo "<p>Tittel: " . $aTitle . "</p>";
		}
		else {
			echo "<h1>OPPRETT NY ARTIKKEL</h1>";
			echo "<p>Tittel: Ingen...</p>";
		}
	}
?>