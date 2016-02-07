<?php include_once("shared/htmlBegin.php"); ?>

<div class="container">
	<a href="index"><img src="img/title-banner.png" width="100%"></a>

	<div class="row artikler">
		<h2>NYE ARTIKLER</h2>

		<div id="featuredArticles" class="carousel slide">
			<ol class="carousel-indicators">
				<?php
					for ($i = 0; $i < 5; $i++) {
						echo "<li data-target='#featuredArticles' data-slide-to='" . $i . "' class='" . ((!$i) ? "active" : "") . "'></li>";
					}
				?>
			</ol>

			<div class="carousel-inner" role="listbox">
				<?php
					$articles = $DB->query("SELECT id, thumbnail, title, intro FROM article");
					for ($i = 0; $i < 5; $i++) {
						//Retrive article data
						$aData = $articles->fetch_row();
						$aId = $aData[0];
						$aThumbnail = $aData[1];
						$aTitle = $aData[2];
						$aIntro = $aData[3];

						//Create article element
						echo "<div class='item" . ((!$i) ? " active" : "") . "'>";
							echo "<a href='article?id=" . $aId . "'>";
								echo "<img src='" . $aThumbnail . "' alt='" . $aTitle . "'>";
								echo "<div class='carousel-caption'>";
									echo "<h3>" . $aTitle . "</h3>";
									echo "<p>" . $aIntro . "</p>";
								echo "</div>";
							echo "</a>";
						echo "</div>";
					}
				?>
			</div>

			<a class="left carousel-control" href="#featuredArticles" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Forrige</span>
			</a>
			<a class="right carousel-control" href="#featuredArticles" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Neste</span>
			</a>
		</div>
	</div>

	<div class="row videos">
		<h2>NYE VIDEOER</h2>
		
		<div class="row featuredVideos">
			<!-- Filled with JS -->
		</div>
	</div>
</div>

<?php include_once("shared/htmlEnd.php"); ?>