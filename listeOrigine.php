<?php
include_once "header.php";
include_once "bdd/connexion.php";
include_once 'phpmailer/class.phpmailer.php';

$stmt = $db->prepare("SELECT origine FROM cuilieres GROUP BY origine"); 
$stmt->execute();
?>

<!-- Requete liste déroulante par origine -->

<form id="saisieForm"method="post">
		<select name="origines" id="origines">
			<?php while($donnees = $stmt->fetch()){
						echo "<option value='".utf8_encode($donnees['origine'])."'>".utf8_encode($donnees['origine'])."</option>";
						echo utf8_encode($donnees['origine']); 
					}?>
		</select>
		</br></br>
 <!-- Afficher resultat des noms par rapport à la liste déroulant -->
 <!-- Permet de retourné l'origine dans le sujet du mail-->
 <input type="hidden" id="titre" name="titre" value="<?php echo $_POST['origines']; ?>">
		<textarea name="test" rows="25" cols="100">
			<?php
			if(isset($_POST['Recherche'])){
				$stmt = $db->prepare("SELECT nom,categorie,origine FROM cuilieres where origine='".$_POST['origines']."'"); 
				$stmt->execute();
				
					foreach(($stmt->fetchAll()) as $toto){
						
						echo utf8_encode($toto['nom']); ?>&nbsp; &nbsp; &nbsp; &nbsp;<?php
						echo utf8_encode($toto['categorie']); echo "\n"; 
					} 	
				}
 ?>
		</textarea></br></br>
		<input type="submit" id="Recherche" name="Recherche" value="Recherche">&nbsp; &nbsp;
		<input type="submit" id="save" name="save" value="Envoie liste par Mail">
		<input type="submit" id="retour" name="retour" value="Retour">
</form>
 
 <?php
if(isset($_POST['save'])){

	$mail = new PHPMailer(); //Create a new PHPMailer instance
	$mail->Host = 'smtp.gmail.com'; //Set the hostname of the mail server
	//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
	$mail->Port = 587; //Tell PHPMailer to use SMTP
	$mail->IsSMTP();
	$mail->SMTPSecure = 'tls'; //Set the encryption system to use - ssl (deprecated) or tls
	$mail->SMTPAuth = true; //Whether to use SMTP authentication
	$mail->Username = 'josselindaeye@gmail.com';
	$mail->Password = 'duffy1949';
	$mail->AddAddress('josselindaeye@gmail.com', 'collection de cuilleres'); // Destinataire
	$mail->SetFrom('josselindaeye@gmail.com', 'collection de cuilleres');  //Expéditeur
	$mail->Subject = "liste cuilleres : ".$_POST['titre'].""; // Sujet

	
	$test1 = $_POST['test'];
	$test1 = str_replace("\n", "</br>", $test1);
        
        $mail->MsgHTML("".$test1."");


	if(!$mail->Send()) {
	  echo 'Mailer Error:';
	} else {
	  echo 'Message sent!';
	}



}

if(isset($_POST['retour'])){

header('Location: http://localhost/CollectionCuillere/parametre.php');
exit();
}

 ?>
