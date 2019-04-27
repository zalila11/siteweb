<?php
require_once ("../core/tendance.php");
$client=new tendenceaj();
$client->supprimertendance($_POST["idproduit"]);
require_once("maps.php")
?>