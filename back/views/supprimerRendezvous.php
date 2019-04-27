<?php
require_once ("../core/supprimerRendezvous.php");
$rendezvous=new rendezvouss();
$rendezvous->supprimerRendezvous($_POST["nomRen"]);
require_once("afficherRen.php")
?>