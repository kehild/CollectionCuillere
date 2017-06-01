<?php
include_once "header.php";
include_once "bdd/connexion.php";
include_once "bdd/webservice.php";


if (isset($_POST['export'])) {
                
                $cui = new webservice($db);
		$cui->dumpMySQL($db, 3);	
	}

	if (isset($_POST['dropbox'])) {
	header('Location: http://localhost/CollectionCuillere/listeOrigine.php');
	exit();
		
	}
?>
<section>
	<div class="transbox">
		<form id="saisieForm" method="post" action="">
			</br>
			</br>
			<input type="submit" name="export" value="Exporter la base de données">
			</br>
			<input type="submit" name="dropbox" value="Envoi liste cuillere par Mail">
		</form>
	</div>
</section>
<?php
include_once "footer.php";
?>

