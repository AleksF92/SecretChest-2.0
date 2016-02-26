<?php
	//Include logic
	include_once("logic/create-article.php");

	//Include html
	include_once("html/head.php");
?>

<div class="container">
	<a href=""><img src="img/title-banner.png" width="100%"></a>

	<div class="artikkel">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Tittel:</label>
				<input type="text" placeholder="Skriv inn tittel..." value="<?php echo Get_Title(); ?>" class="form-control" name="title">
			</div>

			<div class="form-group">
				<label>Filer:</label>
				<input type="file" class="form-control" name="upload">
			</div>

			<div class="form-group">
				<label>Innhold:</label>
				<textarea rows="10" placeholder="Legg til innhold til artikkelen her..." class="form-control" name="content"><?php echo Get_Content(); ?></textarea>
			</div>

			<div class="form-group">
				<label>Innstillinger:</label>
				<p><input type="checkbox" name="public"> Publisert?</p>
			</div>

			<div class="form-group">
				<button class="btn btn-default">Lagre</button>
				<button class="btn btn-default">Forhåndsvisning</button>
			</div>
		</form>
	</div>
</div>

<?php include_once("html/footer.php"); ?>