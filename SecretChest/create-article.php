<!DOCTYPE html>

<html>
	<head>
		<base href="../">
		<?php
			include_once("html/head.php");
			include_once("logic/create-article.php");
		?>
	</head>
	<body>
		<div class="container">
			<a href=""><img src="img/title-banner.png" width="100%"></a>

			<div class="row artikkel">
				<?php Load_Article(); ?>
			</div>
		</div>

		<!-- Scripts -->
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
	</body>
</html>