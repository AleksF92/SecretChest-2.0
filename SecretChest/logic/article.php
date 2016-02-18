<?php
	include_once("classes/database.php");

	function Load_Article() {
		$linkId = $_GET["linkId"];
		$articles = $GLOBALS["DB"]->query("SELECT title, content FROM article WHERE linkId='$linkId'");

		if ($articles->num_rows > 0) {
			$aData = $articles->fetch_assoc();
			$aTitle = $aData["title"];
			$aContent = $aData["content"];

			echo "<h1>" . $aTitle . "</h1>";
			echo $aContent;
		}
		else {
			echo "<h1>Denne artikkelen finnes dessverre ikke...</h1>";
		}
	}
?>