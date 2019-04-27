<?php
require_once ("../core/commande.php");
$commande=new commande();
if(isset($_POST['idcommande']))
$commande->supprimercommande($_POST["idcommande"]);
require_once("charts.php")
?>