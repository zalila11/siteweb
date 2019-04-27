
<?php
require_once ("../core/supprimerReclamation.php");
$reclamation=new reclamations();
$reclamation->supprimerReclamation($_POST["nomRec"]);
require_once("icons.php")
?>