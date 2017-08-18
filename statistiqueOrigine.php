<?php 
include_once "header.php";
include_once "bdd/webservice.php";
include_once "bdd/connexion.php";
?>
<section>
	<div class="transbox">
		<p><?php  

                        if(isset($_GET['origine'])){
				
                            $cui = new Webservice($db);
                            $cui->ListeOrigine($db);
			}
                
                        $cui = new webservice($db);
                        $cui->TotalOrigine($db);

                    ?>
		</p>
	</div>
</section>

<?php
include_once "footer.php";
?>
