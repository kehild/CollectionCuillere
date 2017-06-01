<?php
include_once "header.php";
include_once "bdd/webservice.php";
include_once "bdd/connexion.php";
?>	
	<p><?php  

			$cui = new webservice($db);
			$cui->modification($db);			

			if (isset($_POST['Annuler'])) {
				echo '<meta http-equiv="refresh" content="0;URL=index.php">';	
			}
			if (isset($_POST['Modifier'])) {
						
                            $nombre = $_POST["nombre"];
                            $nom = $_POST["nom"];
                            $categorie = $_POST["categorie"];
                            $departements = $_POST["departements"];
                            $origine = $_POST["origine"];

                            if(preg_match("/^[1-9]*$/",$nombre) && preg_match("/^[1-9]*$/",$departements) && preg_match("/^[aA-zZéèàêâù -]*$/",$nom) && preg_match("/^[aA-zZéèàêâù -]*$/",$categorie) && preg_match("/^[aA-zZéèàêâù -]*$/",$origine)){
                                    $cui->UpdateCui($db);
                            }else{
                                    ?><span class="error"> <?php echo "Champs mal rempli" ?></span><?php
                            }
                        }
		?>
	</p>
<?php
include_once "footer.php";
	

?>
