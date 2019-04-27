<?php
require_once ("../core/catalogueC.php");
$catalogue=new catalogueC();
$catalogue->supprimercatalogue($_POST["idcatalogue"]);
require_once("calendar.php")
?>