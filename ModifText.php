<?php
include_once "header.php";
//include_once "webservice.php";
?>
<section>
	<div class="transbox">
		<form id="saisieForm" method="post" action="">
			<textarea name="test" rows="25" cols="200">
			<?php $myfile = fopen("texte/info.txt", "r+") or die("Unable to open file!"); // Ouverture du fichier
			echo utf8_encode(fread($myfile,filesize("texte/info.txt"))); // lecture du contenu du fichier
			fclose($myfile);?></textarea>
			<input type="submit" name="save" value="Mettre a jour">
		</form>
	</div>
</section>

<?php
	if(isset($_POST['save'])){
		$myfile = fopen("texte/info.txt", "r+") or die("Unable to open file!"); // Ouverture du fichier
		ftruncate($myfile,0); // Ecrasement du contenu
		fwrite($myfile, $_POST['test']); // Le contenu du textarea est copier dans le fichier
		fclose($myfile);
		
		echo '<meta http-equiv="refresh" content="0;URL=index.php">';
	}
include_once "footer.php";
?>