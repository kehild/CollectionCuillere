<header>
	<title>Collection de Cuillère</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<link rel="icon" type="image/png" href="image/Cuilieres.png"/>
	<table id="test">	
		<tr>
			<td><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; &nbsp </span></td>
			<td><img src="image/Cuilieres.png" onclick="Compte()"/></td>
			<td><h1>Bienvenue Sur Ma Collection de Cuillères</h1></td>
			<td>
			<div style="color:white">
			<?php
			ini_set('session.use_only_cookies',1);
			session_start();
			if(!empty($_SESSION['pseudo'])){
				echo "Bienvenue, " .$_SESSION['pseudo'];
			}
			?></div></td>
		</tr>
	</table>	
</header>

<div id="mySidenav" class="sidenav">

	 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	 <a href="index.php">Home</a>
	 <a href="saisie.php">Saisie Cuillère</a>
	 <a href="ville.php">Liste Ville</a>
	 <a href="symbole.php">Liste Symbole</a>
	 <a href="monument.php">Liste Monument</a>
	 <a href="region.php">Liste Region</a>
	 <a href="pays.php">Liste Pays</a>
	 <a href="statistique.php">Statistique</a>
	 <a href="statistiqueOrigine.php">Statistique Par Origine</a>
	 <?php
	 if(!empty($_SESSION['pseudo'])){
			echo "<a href='parametre.php'>Paramètre</a>";
	}
	 ?>
</div>

<script>
	function openNav() {
		document.getElementById("mySidenav").style.width = "250px";
	}
	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
	}
	function Compte(){
	var url = "compte.php";			  
	 document.location.href = url;
	}
</script>













