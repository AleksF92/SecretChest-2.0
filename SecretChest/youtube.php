<!DOCTYPE html>

<html>
	<head>
		<base href="../">
		<?php
			include_once("html/head.php");
			include_once("logic/article.php");
		?>
	</head>
	<body>
		<div class="container">
			<a href=""><img src="img/title-banner.png" width="100%"></a>

			<div class="row video">
				<div class="embed-responsive embed-responsive-16by9">
					<?php
						$vLink = "https://www.youtube.com/embed/" . $_GET["videoId"];
						echo "<iframe class='embed-responsive-item' src='" . $vLink . "'></iframe>";
					?>
				</div>
			</div>
		</div>

		<!-- Scripts -->
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
	</body>
</html>