<?php
	//Include logic
	include_once("logic/article.php");

	//Include html
	include_once("html/head.php");
?>

<div class="container">
	<a href=""><img src="img/title-banner.png" width="100%"></a>

	<div class="row artikkel">
		<?php Load_Article(); ?>
	</div>
</div>

<?php include_once("html/footer.php"); ?>