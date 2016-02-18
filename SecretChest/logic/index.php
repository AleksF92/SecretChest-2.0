<?php
	include_once("classes/database.php");

	$MAX_ARTICLES = 5;

	function Load_Articles() {
		//Get articles from database
		$limit = intval($GLOBALS["MAX_ARTICLES"]);
		$articles = $GLOBALS["DB"]->query("SELECT linkId, thumbnail, title, intro FROM article ORDER BY id DESC LIMIT $limit");

		//Create carousel indicators
		echo "<ol class='carousel-indicators'>";
			for ($i = 0; $i < $articles->num_rows; $i++) {
				echo "<li data-target='#featuredArticles' data-slide-to='" . $i . "' class='" . ((!$i) ? "active" : "") . "'></li>";
			}
		echo "</ol>";

		//Create carousel content
		echo "<div class='carousel-inner' role='listbox'>";
			for ($i = 0; $i < $articles->num_rows; $i++) {
				//Find article data
				$aData = $articles->fetch_assoc();
				$aId = $aData["linkId"];
				$aThumbnail = $aData["thumbnail"];
				$aTitle = $aData["title"];
				$aIntro = $aData["intro"];

				//Create article element
				echo "<div class='item" . ((!$i) ? " active" : "") . "'>";
					echo "<a href='artikkel/" . $aId . "'>";
						echo "<img src='" . $aThumbnail . "' alt='" . $aTitle . "'>";
						echo "<div class='carousel-caption'>";
							echo "<h3>" . $aTitle . "</h3>";
							echo "<p>" . $aIntro . "</p>";
						echo "</div>";
					echo "</a>";
				echo "</div>";
			}
		echo "</div>";
	}
?>