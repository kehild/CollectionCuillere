<?php
include_once "header.php";
include_once "bdd/connexion.php";
?>
<form id="saisieForm" method="post">
</br></br></br>
    Pseudo <span class="error"> * </span></br>
	<input type="text" name="login" value=""/></br></br>
    Mot de passe <span class="error"> * </span></br>
	<input type="password" name="password" value=""/></br></br>
	<input type="submit" id="connexion" name="connexion" value="Connexion"/>&nbsp
	<input type="submit" id="déconnexion" name="déconnexion" value="Déconnexion"/></br></br>
</form>

<?php


// à mettre tout en haut du fichier .php, cette fonction propre à PHP servira à maintenir la $_SESSION

if(isset($_POST['connexion'])){ // si le bouton "Connexion" est appuyé
    // on vérifie que le champ "Pseudo" n'est pas vide
    // empty vérifie à la fois si le champ est vide et si le champ existe belle et bien (is set)
    if(empty($_POST['login'])){
        echo "Le champ Pseudo est vide.";
    } else {
        // on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
        if(empty($_POST['password'])){
            echo "Le champ Mot de passe est vide.";
        } else {
			if(preg_match("/^[aA-zZéèàêâù0-9]*$/",$_POST['login']) && preg_match("/^[aA-zZéèàêâù0-9]*$/",$_POST['password'])){
				// les champs sont bien posté et pas vide, on sécurise les données entrées par le membre:
				$Pseudo = htmlentities($_POST['login'], ENT_QUOTES, "ISO-8859-1"); // le htmlentities() passera les guillemets en entités HTML, ce qui empêchera les injections SQL
				$MotDePasse = htmlentities($_POST['password'], ENT_QUOTES, "ISO-8859-1");
				//on se connecte à la base de données:
				$mysqli = mysqli_connect("localhost", "root", "arcanis", "cuilieres");
				//on vérifie que la connexion s'effectue correctement:
				if(!$mysqli){
					echo "Erreur de connexion à la base de données.";
				} else {
					// on fait maintenant la requête dans la base de données pour rechercher si ces données existe et correspondent:
					$Requete = mysqli_query($mysqli,"SELECT * FROM compte WHERE login = '".$Pseudo."' AND password = '".$MotDePasse."'");
					// si il y a un résultat, mysqli_num_rows() nous donnera alors 1
					// si mysqli_num_rows() retourne 0 c'est qu'il a trouvé aucun résultat
					if(mysqli_num_rows($Requete) == 0) {
						echo "Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé.";
					} else {
						// on ouvre la session avec $_SESSION:
						$_SESSION['pseudo'] = $Pseudo; // la session peut être appelée différemment et son contenu aussi peut être autre chose que le pseudo
						echo "Vous êtes à présent connecté !";
						echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
					}
				}
			}	
        }
    }
}


if(isset($_POST['déconnexion'])) {
	$_SESSION = array();
        session_unset(); 
	session_destroy();
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";

}
?>

