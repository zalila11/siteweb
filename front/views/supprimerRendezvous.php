<?php
require_once ("../core/supprimerRendezvous.php");
$rendezvous=new rendezvouss();
$rendezvous->supprimerRendezvous($_POST["idRen"]);
require_once("icons.php")
?>