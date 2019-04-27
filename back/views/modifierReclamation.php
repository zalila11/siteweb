<?php
include "../entities/reclamation.php";
require "../core/modifierReclamation.php";
if(isset($_GET['nomRec'])){
$reclamationt=new reclamationm();

$reclamationt->modifierReclamation($_GET['nomRec']);

require_once("afficherRec.php");
header("location:../core/envoyerMail.php");
}

?>
