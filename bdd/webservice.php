<?php

class webservice{

private $_db; // Instance de PDO

public function __construct($db){
  $this->setDb($db);
}
   
public function setDb(PDO $db){
  $this->_db = $db;
}

function DernierRentree($db){

	$stmt = $db->prepare("SELECT * FROM cuilieres ORDER BY id DESC LIMIT 1"); 
	$stmt->execute();
					
	foreach(($stmt->fetchAll()) as $toto){
						
			echo "<table id='dernier' align='center'>";
			
				echo "<tr><th>"; echo "Nom"; echo "</th>";
				echo "<th>"; echo "Nombre"; echo "</th>";
				echo "<th>"; echo "Origine"; echo "</th>";
				echo "<th>"; echo "Catégorie"; echo "</th>";
				echo "<th>"; echo "Départements"; echo "</th></tr>";
				
				echo "<tr><th>"; echo utf8_encode($toto['nom']); echo "</th>";
				echo "<th>"; echo utf8_encode($toto['nombre']); echo "</th>";
				echo "<th>"; echo utf8_encode($toto['origine']); echo "</th>";
				echo "<th>"; echo utf8_encode($toto['categorie']); echo "</th>";
				echo "<th>"; echo utf8_encode($toto['departements']);  echo "</th></tr>";

			echo "</table>";
		} 
	}

function ListeVille($db){


	$stmt = $db->prepare("SELECT * FROM cuilieres where categorie='Ville' ORDER BY nom ASC"); 
	$stmt->execute();
	
	echo "<table id='dernier' align='center'>";
		
		echo "<tr><th>"; echo "Nom"; echo "</th>";
		echo "<th>"; echo "Nombre"; echo "</th>";
		echo "<th>"; echo "Origine"; echo "</th>";
		echo "<th>"; echo "Départements"; echo "</th>";
		echo "<th>"; echo "Modifier"; echo "</th>";
		echo "<th>"; echo "Supprimer"; echo "</th></tr>";
	
	foreach(($stmt->fetchAll()) as $toto){
			
		echo "<tr><th>"; echo utf8_encode($toto['nom']); echo "</th>";
		echo "<th>"; echo utf8_encode($toto['nombre']); echo "</th>";
		echo "<th>"; echo utf8_encode($toto['origine']); echo "</th>";
		echo "<th>"; echo utf8_encode($toto['departements']);  echo "</th>";
		echo "<th>"; echo '<a href="Modif.php?id='.$toto['id'].'"><img src="image/modifier.png"></a>'; echo "</th>";
		echo "<th>"; echo '<a href="?id1='.$toto['id'].'"><img src="image/delete.png"></a>'; echo "</th></tr>";  

		
		} 
		
		echo "</table>";
	} 

function ListeSymbole($db){

	$stmt = $db->prepare("SELECT * FROM cuilieres where categorie='Symbole' ORDER BY nom ASC"); 
	$stmt->execute();
	
	echo "<table id='dernier' align='center'>";
			
		echo "<tr><th>"; echo "Nom"; echo "</th>";
		echo "<th>"; echo "Nombre"; echo "</th>";
		echo "<th>"; echo "Origine"; echo "</th>";
		echo "<th>"; echo "Départements"; echo "</th>";
		echo "<th>"; echo "Modifier"; echo "</th>";
		echo "<th>"; echo "Supprimer"; echo "</th></tr>";
	
	foreach(($stmt->fetchAll()) as $toto){
									
		echo "<tr><th>"; echo utf8_encode($toto['nom']); echo "</th>";
		echo "<th>"; echo utf8_encode($toto['nombre']); echo "</th>";
		echo "<th>"; echo utf8_encode($toto['origine']); echo "</th>";
		echo "<th>"; echo utf8_encode($toto['departements']);  echo "</th>";
		echo "<th>"; echo '<a href="Modif.php?id='.$toto['id'].'"><img src="image/modifier.png"></a>'; echo "</th>";
		echo "<th>"; echo '<a href="?id1='.$toto['id'].'"><img src="image/delete.png"></a>'; echo "</th></tr>";  
	
		} 
		
		echo "</table>";
	}

function ListeMonument($db){

		$stmt = $db->prepare("SELECT * FROM cuilieres where categorie='Monument' ORDER BY nom ASC"); 
		$stmt->execute();
		
		echo "<table id='dernier' align='center'>";
				
			echo "<tr><th>"; echo "Nom"; echo "</th>";
			echo "<th>"; echo "Nombre"; echo "</th>";
			echo "<th>"; echo "Origine"; echo "</th>";
			echo "<th>"; echo "Départements"; echo "</th>";
			echo "<th>"; echo "Modifier"; echo "</th>";
			echo "<th>"; echo "Supprimer"; echo "</th></tr>";			
		
		foreach(($stmt->fetchAll()) as $toto){
										
			echo "<tr><th>"; echo utf8_encode($toto['nom']); echo "</th>";
			echo "<th>"; echo utf8_encode($toto['nombre']); echo "</th>";
			echo "<th>"; echo utf8_encode($toto['origine']); echo "</th>";
			echo "<th>"; echo utf8_encode($toto['departements']);  echo "</th>";
			echo "<th>";echo '<a href="Modif.php?id='.$toto['id'].'"><img src="image/modifier.png"></a>'; echo "</th>";
			echo "<th>"; echo '<a href="?id1='.$toto['id'].'"><img src="image/delete.png"></a>'; echo "</th></tr>";  
		
			} 
			
			echo "</table>";
	}


function ListeRegion($db){

		$stmt = $db->prepare("SELECT * FROM cuilieres where categorie='Region' ORDER BY nom ASC"); 
		$stmt->execute();
			
		echo "<table id='dernier' align='center'>";
				
			echo "<tr><th>"; echo "Nom"; echo "</th>";
			echo "<th>"; echo "Nombre"; echo "</th>";
			echo "<th>"; echo "Origine"; echo "</th>";
			echo "<th>"; echo "Départements"; echo "</th>";
			echo "<th>"; echo "Modifier"; echo "</th>";
			echo "<th>"; echo "Supprimer"; echo "</th></tr>";	
		
		foreach(($stmt->fetchAll()) as $toto){
										
			echo "<tr><th>"; echo utf8_encode($toto['nom']); echo "</th>";
			echo "<th>"; echo utf8_encode($toto['nombre']); echo "</th>";
			echo "<th>"; echo utf8_encode($toto['origine']); echo "</th>";
			echo "<th>"; echo utf8_encode($toto['departements']);  echo "</th>";
			echo "<th>"; echo '<a href="Modif.php?id='.$toto['id'].'"><img src="image/modifier.png"></a>'; echo "</th>";
			echo "<th>"; echo '<a href="?id1='.$toto['id'].'"><img src="image/delete.png"></a>'; echo "</th></tr>";  
		
			} 
			
			echo "</table>";
	}


function ListePays($db){

		$stmt = $db->prepare("SELECT * FROM cuilieres where categorie='Pays' ORDER BY nom ASC"); 
		$stmt->execute();
		
		echo "<table id='dernier' align='center'>";
				
			echo "<tr><th>"; echo "Nom"; echo "</th>";
			echo "<th>"; echo "Nombre"; echo "</th>";
			echo "<th>"; echo "Origine"; echo "</th>";
			echo "<th>"; echo "Départements"; echo "</th>";
			echo "<th>"; echo "Modifier"; echo "</th>";
			echo "<th>"; echo "Supprimer"; echo "</th></tr>";				
		
		foreach(($stmt->fetchAll()) as $toto){
										
			echo "<tr><th>"; echo utf8_encode($toto['nom']); echo "</th>";
			echo "<th>"; echo utf8_encode($toto['nombre']); echo "</th>";
			echo "<th>"; echo utf8_encode($toto['origine']); echo "</th>";
			echo "<th>"; echo utf8_encode($toto['departements']);  echo "</th>";
			echo "<th>"; echo '<a href="Modif.php?id='.$toto['id'].'"><img src="image/modifier.png"></a>'; echo "</th>";
			echo "<th>"; echo '<a href="?id1='.$toto['id'].'"><img src="image/delete.png"></a>'; echo "</th></tr>";  
		
			} 
			
			echo "</table>";
	}
	
function Total($db){
		
		$stmt = $db->prepare("select COUNT(nom) from cuilieres");
		$stmt->execute();
		
		foreach(($stmt->fetchAll()) as $toto){
			echo "<table>";
				echo "<tr><th>"; echo "Total Cuillère"; echo "</th></tr>";				
				echo "<tr><th>"; echo $toto['COUNT(nom)']; echo "</th></tr>";
			echo "</table>";
				
		}
}

function graph_categorie($db){

$stmt = $db->prepare("select COUNT(nom),categorie from cuilieres GROUP BY categorie ORDER BY COUNT(nom) DESC");
$stmt->execute();
		
$donnees = array(); 
while ($row = $stmt->fetch()){
$donnees[] = $row['COUNT(nom)'];
$duree[] = $row['categorie'];
}
$largeur = 400;
$hauteur = 250;

 /////////////////////////// PARTIE GRAPHIQUE POUR CAMEMBERT //////////////////////////////////////////////
 
require_once("jpgraph_pie.php");

$graphe = new PieGraph(500,400);

// Titre du graphique
$graphe->title->Set("Nombre de Cuilleres par Catégorie");

// Créer un graphique secteur (classe PiePlot)
$oPie = new PiePlot($donnees);

// Légendes qui accompagnent chaque secteur, ici chaque année
$oPie->SetLegends($duree);

// position du graphique (légèrement à droite)
$oPie->SetCenter(0.4); 

$oPie->SetValueType(PIE_VALUE_ABS);

// Format des valeurs de type entier
$oPie->value->SetFormat('%d');

// Ajouter au graphique le graphique secteur
$graphe->Add($oPie);

// Provoquer l'affichage (renvoie directement l'image au navigateur)

$graphe->Stroke(); 

}

function TotalOrigine($db){
		
		$stmt = $db->prepare("select COUNT(nom),origine from cuilieres GROUP BY origine ORDER BY COUNT(nom) DESC");
		$stmt->execute();
			echo "<table id='dernier' align='center'>";
			
			echo "<tr><th>"; echo "Total Par Origine"; echo "</th>";
			echo "<th>"; echo "Origine"; echo "</th></tr>";
			
			foreach(($stmt->fetchAll()) as $toto){

				echo "<tr><th>"; echo $toto['COUNT(nom)']; echo "</th>";
				echo "<th>"; echo utf8_encode($toto['origine']); echo "</th></tr>";
				
			}
			echo "</table>";
}


function Saisie($db,$nom,$nombre,$origine,$categorie,$departements){

		// Permet de rentrer les cuillères
		
		try {
				
		$sql = "Insert INTO cuilieres (nom, nombre, origine, categorie, departements) VALUES ('" .$nom. "', '" .$nombre. "','" .$origine. "','" .$categorie. "','" .$departements. "')";
		$db->exec($sql);
			
		echo "Insertion réussi";
		}
		catch(Exception $e){
			
		echo("<h1>Erreur : Base de données </h1>");
		die('Erreur : ' .$e->getMessage());
		
		}

}

function deleteCui($db,$id){
	
		try {
		
		$stm = $db->prepare("delete from cuilieres where id=$id"); 
		$stm->execute();
				
		}catch(Exception $e){
				
		echo("<h1>Erreur : Base de données </h1>");
		die('Erreur : ' .$e->getMessage());
		
		}
}

function dumpMySQL($db, $mode){   
    
	$entete = "-- ----------------------\n";
	$entete .= "-- sauvegarde de la base cuileres au ".date("d-M-Y")."\n";
	$entete .= "-- ----------------------\n\n\n";
	$creations = "";
	$insertions = "\n\n";
		 
		 	 
	$listeTables = $db->prepare("show tables");
	$listeTables->execute(); 
	
	while($table = $listeTables->fetch()){
	
		// si l'utilisateur a demandé la structure ou la totale
		if($mode == 1 || $mode == 3){
			
			$creations .= "-- -----------------------------\n";
			$creations .= "-- creation de la table ".$table[0]."\n";
			$creations .= "-- -----------------------------\n";
						
			$listeCreationsTables = $db->prepare("show create table ".$table[0]);
			$listeCreationsTables->execute();
			
			while($creationTable =$listeCreationsTables->fetch()){
					  $creations .= $creationTable[1].";\n\n";
			}
		}
				// si l'utilisateur a demandé les données ou la totale
		if($mode > 1){
					
			$donnees = $db->prepare("SELECT * FROM ".$table[0]);
			$donnees->execute();
			$insertions .= "-- -----------------------------\n";
			$insertions .= "-- insertions dans la table ".$table[0]."\n";
			$insertions .= "-- -----------------------------\n";
			while($nuplet = $donnees->fetch()){
			
				$insertions .= "INSERT INTO ".$table[0]." VALUES(";
				for($i=0; $i < $donnees->columnCount(); $i++){
						  
						  if($i != 0)
							 $insertions .=  ", ";
						  if($donnees->columnCount() == "string" || $donnees->columnCount() == "blob"){
							 $insertions .=  "'";
							 }else{
							 $insertions .=  "'";
							 }
						  $insertions .= addslashes($nuplet[$i]);
						  if($donnees->columnCount() == "string" || $donnees->columnCount() == "blob"){
							$insertions .=  "'";
							}else{
							$insertions .=  "'";
							}
				}
				$insertions .=  ");\n";
			}
			$insertions .= "\n";
		}
	}  
        
	$fichierDump = fopen("cuilieres.sql", "wb");
	fwrite($fichierDump, $entete);
	fwrite($fichierDump, $creations);
	fwrite($fichierDump, $insertions);
	fclose($fichierDump);
	echo "Sauvegarde réalisée avec succès !!";
}

function modification($db){
	
		$nombreErreur = "";
		$nomErreur = "";
		$origineErreur = "";
		$categorieErreur = "";
		$departementsErreur = "";
						
		$stmt = $db->prepare("SELECT * FROM cuilieres where id=' " .$_GET['id']. " '"); 
		$stmt->execute();
				
		foreach(($stmt->fetchAll()) as $toto){
		?>
		<div>
		  <form id="saisieForm" method="post" action="">
		</br>
		<label for="nom">Nom</label><span class="error"> * <?php echo $nomErreur;?></span>
		</br>
		<input type="text" id="nom" name="nom" value="<?php echo $toto['nom']; ?>">
		</br>
		<label for="nombre">Nombre</label><span class="error"> * <?php echo $nombreErreur;?></span>
		</br>
		<input type="text" id="nombre" name="nombre" value="<?php echo $toto['nombre']; ?>">
		</br>
		<label for="origine">Origine</label><span class="error"> * <?php echo $origineErreur;?></span>
		</br>
		<input type="text" id="origine" name="origine" value="<?php echo $toto['origine']; ?>">
		</br>
		<label for="categorie">Catégorie</label><span class="error"> * <?php echo $categorieErreur;?></span>
		</br>
		<select name="categorie" id="categorie">
		   <option value="<?php echo $toto['categorie']; ?>"><?php echo $toto['categorie']; ?></option> <!-- genre en base -->
		   <option value="Ville">Ville</option> 
		   <option value="Symbole">Symbole</option>
		   <option value="Monument">Monument</option>
		   <option value="Region">Région</option>
		   <option value="Pays">Pays</option>
		</select>
		</br>
		<label for="departements">Départements</label><span class="error"> * <?php echo $departementsErreur;?></span>
		</br>
		<input type="text" id="departements" name="departements" value="<?php echo $toto['departements']; ?>">
		</br>
		<input type="submit" id="Modifier" name="Modifier" value="Modifier">
	  </form>
																		</div> <?php
	}					
}

function UpdateCui($db){
	
		// Permet de mettre à jour les informations dans la base de données
		try {

                    $sql = "UPDATE cuilieres SET nom='" .$_POST['nom']. "',nombre='" .$_POST['nombre']. "',origine='" .$_POST['origine']. "',categorie='" .$_POST['categorie']. "', departements='" .$_POST['departements']. "' WHERE id='" .$_GET['id']. "'";
			
                    $db->exec($sql);
				
                    echo "Modification réussi";
				
		}
		catch(Exception $e){
				
                    echo("<h1>Erreur : Base de données </h1>");
                    die('Erreur : ' .$e->getMessage());
			
		}
}








}
?>
