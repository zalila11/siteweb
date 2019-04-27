<?PHP
include "../entities/rendezvous.php";
include "../core/rendezvousC.php";
require_once "../../config.php"; 


$today = date("Y-m-d");
if (($_POST['dateRen']>=$today))
{
if (isset($_POST['nomRen']) and isset($_POST['lieuRen']) and isset($_POST['dateRen']) ){
$rendezvous1=new rendezvous($_POST['nomRen'],$_POST['lieuRen'],$_POST['dateRen']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$rendezvous1C=new rendezvousC();
$rendezvous1C->ajouterRendezvous($rendezvous1);
//header('Location: afficherReclamation.php');
	
}else{
	echo "vérifier les champs";
}}
else
{
	echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>Le date doit etre superieur 
                <strong class='green'>a aujordh'ui</strong>
                </center></div>";
}
require_once("rendezvous.php");
//*/

?>