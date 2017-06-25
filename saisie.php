<script type="text/javascript" src="./jquery.min.js"></script>
<script type="text/javascript" src="./jquery.autocomplete.min.js"></script>

<?php
include_once "header.php";
include_once "bdd/webservice.php";
include_once "bdd/connexion.php";
 
$nombreErreur = "";
$nomErreur = "";
$origineErreur = "";
$categorieErreur = "";
$departementsErreur = "";
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nombre"]) || empty($_POST["nom"]) || empty($_POST["categorie"]) || empty($_POST["departements"]) || empty($_POST["origine"])) {
	if (empty($_POST["nombre"])){
 		$nombreErreur = "Nombre est obligatoire";
  	}
	if (empty($_POST["nom"])){
 		$nomErreur = "Nom est obligatoire";
  	}
	if (empty($_POST["categorie"])){
 		$categorieErreur = "Catégorie est obligatoire";
  	}
	if (empty($_POST["departements"])){
 		$departementsErreur = "Départements est obligatoire";
  	}
	if (empty($_POST["origine"])){
 		$origineErreur = "Origine est obligatoire";
  	}

} else {

	$nombre = $_POST["nombre"];
	$nom = $_POST["nom"];
	$categorie = $_POST["categorie"];
	$departements = $_POST["departements"];
	$origine = $_POST["origine"];

	    // check if name only contains letters and whitespace
	   	 if(!preg_match("/^[1-9]*$/",$nombre)) {
	      		$nombreErreur = "Le Champs Nombre mal rempli";
	    	}
		if(!preg_match("/^[0-9]*$/",$departements)){
			$departementsErreur = "Le Champs Departements est mal rempli";
		}
		if(!preg_match("/^[aA-zZéèàêâù -]*$/",$nom)){
			$nomErreur = "Le Champs Nom mal rempli";
		}
		if(!preg_match("/^[aA-zZéèàêâù -]*$/",$categorie)){
			$categorieErreur = "Le Champs Catégorie mal rempli";
		}
		if(!preg_match("/^[aA-zZéèàêâù -]*$/",$origine)){
			$origineErreur = "Le Champs Origine mal rempli";
		}
		if(preg_match("/^[1-9]*$/",$nombre) && preg_match("/^[1-9]*$/",$departements) && preg_match("/^[aA-zZéèàêâù -]*$/",$nom) && preg_match("/^[aA-zZéèàêâù -]*$/",$categorie) && preg_match("/^[aA-zZéèàêâù -]*$/",$origine)){
		$collection = new webservice($db);
                $collection->Saisie($db,$_POST['nom'], $_POST['nombre'],$_POST['origine'],$_POST['categorie'],$_POST['departements']);
		}
	
	}
}
?>

<div>
</br>
  <form id="saisieForm" method="post" action="">
    </br></br>
	<label for="nom">Nom</label><span class="error"> * <?php echo $nomErreur;?></span>
    </br></br>
	<input type="text" id="nom" name="nom">
	</br>
	<label for="nombre">Nombre</label><span class="error"> * <?php echo $nombreErreur;?></span>
    </br></br>
	<input type="text" id="nombre" name="nombre">
	</br>
	<label for="origine">Origine</label><span class="error"> * <?php echo $origineErreur;?></span>
    </br>
	<input type="text" id="origine" name="origine">
	</br>
    <label for="categorie">Catégorie</label><span class="error"> * <?php echo $categorieErreur;?></span>
    	</br>
	<select name="categorie" id="categorie">
			<option value="Ville">Ville</option>
            <option value="Region">Region</option>
			<option value="Symbole">Symbole</option>
			<option value="Monument">Monument</option>
			<option value="Pays">Pays</option>
	</select>
	</br>
	<label for="departements">Départements</label><span class="error"> * <?php echo $departementsErreur;?></span>
    </br>
	<input type="text" id="departements" name="departements">
	</br></br>
    <input type="submit" name="Valider" value="Valider">
	</br></br>
  </form>
</div>

<script>
   $(document).ready(function() {
    $('#origine').autocomplete({
        serviceUrl: 'auto.php',
        dataType: 'json'
    });
}); 
    
</script>    

<?php
	include_once"footer.php";
?>
