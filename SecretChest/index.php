<!DOCTYPE html>

<html>
	<head>
		<?php
			include_once("html/head.php");
			include_once("logic/index.php");
		?>
	</head>
	<body>
		<div class="container">
			<a href=""><img src="img/title-banner.png" width="100%"></a>

			<div class="row artikler">
				<h2>NYE ARTIKLER</h2>

				<div id="featuredArticles" class="carousel slide">
					<?php Load_Articles(); ?>

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

		<!-- Scripts -->
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/index.js"></script>
	</body>
</html>