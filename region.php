<?php
include_once "header.php";
include_once "bdd/webservice.php";
include_once "bdd/connexion.php";
?>
<section>
	<div class="transbox">
		<p><?php  
			$cui = new webservice($db);
			$cui->ListeRegion($db);
                        
                                                        
                if (isset($_GET['id1'])){
			$cui->deleteCui($db, $_GET['id1']);
			echo '<meta http-equiv="refresh" content="0;URL=region.php">';
		}
			?>
		</p>
	</div>
</section>

<?php
include_once "footer.php";
?>
