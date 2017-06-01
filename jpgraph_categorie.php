<?php
require_once("include_path_inc.php");
require_once("jpgraph.php");
require_once("jpgraph_bar.php");
require_once("bdd/webservice.php");
require_once("bdd/connexion.php");

$cui = new webservice($db);
$cui->graph_categorie($db);
?>

  
  
  
  
