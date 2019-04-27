<?php
require_once ("../core/promotionP.php");
$promotion=new promotionP();
$promotion->supprimerpromotion($_POST["idpromotion"]);
require_once("psupprimer.php")
?>