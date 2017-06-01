<?php 
include_once "header.php";
include_once "bdd/webservice.php";
include_once "bdd/connexion.php";

?>

<section>
	<div class="transbox">
		<p><?php  
			$cui = new webservice($db);
			$cui->Total($db);
			?>
			<img src="jpgraph_categorie.php">
		</p>
	</div>
</section>

<?php
include_once "footer.php";
?>
