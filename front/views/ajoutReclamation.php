<?PHP
include "../entities/reclamation.php";
include "../core/reclamationC.php";
 // test avec une chaine qui est une adresse email
 
// Vérifie si la chaine ressemble à un email
if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo 'Cet email est correct.';

if ( isset($_POST['nomRec']) and isset($_POST['messageRec'])and isset($_POST['sujetRec'])and isset($_POST['email'])){
$reclamation1=new reclamation($_POST['nomRec'],$_POST['messageRec'],$_POST['sujetRec'],$_POST['email']);

$reclamation1C=new reclamationC();
$reclamation1C->ajouterReclamation($reclamation1);
//header('Location: afficherReclamation.php');
	
}
} else {
    echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>Cet email est incorrect
                <strong class='green'> verifier </strong>
                </center></div>";
}
require_once("reclamation.php");
//*/

?>