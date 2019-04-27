<?PHP
include "../entities/reclamation.php";
include "../core/reclamationC.php";

//$email = 'test'; // test avec une chaine qui n'est pas une adresse email
$_POST['email'] = 'test@example.com'; // test avec une chaine qui est une adresse email
 
// Vérifie si la chaine ressemble à un email
if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  
if (isset($_POST['nomRec']) and isset($_POST['dateRec']) and isset($_POST['etatRec']) and isset($_POST['messageRec'])and isset($_POST['sujetRec'])and isset($_POST['email'])){
$reclamation1=new reclamation($_POST['nomRec'],$_POST['dateRec'],$_POST['etatRec'],$_POST['messageRec'],$_POST['sujetRec'],$_POST['email']);

$reclamation1C=new reclamationC();
$reclamation1C->ajouterReclamation($reclamation1);
//header('Location: afficherReclamation.php');
	
}else{
	echo "vérifier les champs";
}
else {
    echo 'Cet email a un format non adapté.';
}}
require_once("icons.php");
//*/

?>