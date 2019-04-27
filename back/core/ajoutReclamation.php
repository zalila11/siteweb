<?PHP
include "../entities/reclamation.php";
include "../core/reclamationC.php";
require_once "../../config.php"; 

if isset($_POST['nomRec']) and isset($_POST['dateRec']) and isset($_POST['messageRec'])and isset($_POST['sujetRec'])and isset($_POST['email'])){
$reclamation1=new reclamation($_POST['nomRec'],$_POST['dateRec'],$_POST['messageRec'],$_POST['sujetRec'],$_POST['email']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$reclamation1C=new reclamationC();
$reclamation1C->ajouterReclamation($reclamation1);
//header('Location: afficherReclamation.php');
	
}else{
	echo "vérifier les champs";
}
require_once("icons.php");
//*/

?>