<?PHP
include "../entites/rendezvous.php";
include "../core/rendezvousC.php";
require_once "../../config.php"; 

if ( isset($_POST['nomRen']) and isset($_POST['lieuRen']) and isset($_POST['dateRen']) ){
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
}
require_once("rendezvous.php");
//*/

?>