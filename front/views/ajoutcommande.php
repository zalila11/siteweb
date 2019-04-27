<?PHP
include "../entities/commande.php";
include "../core/commandeC.php";
include "../entities/lignecommande.php";
include "../core/lignecommandeC.php";

$date=date('d/m/Y');

		
		
$l=new commandeC();
$ll=$l->totale();
//echo $ll;
//echo "hichel";

/*function uniq_rand($min,$max,$tab)
{
    do $rand=rand($min,$max); while(in_array($rand,$tab));
    return $rand;
}
$image = array();
for($i=1;$i<6;$i++)
    $idcommande = uniq_rand(1,80,$image);*/
/*$tab = array();
do $idcommande=rand(1,30);
while(in_array($idcommande,$tab));
 */ 
//$commande1=new commande($_POST['idcommande'],$_POST['ref'],$date,$_POST['cin'],$_POST['idproduit']);
if(isset($_SESSION['active'])) 
{
        include "signin.html";
}
else
{
session_start();
}
$nb= new commandeC();
$nbb=$nb->nbProduits();
$commande1=new commande($date,$_SESSION['cin'],$nbb,$ll);


$commandeC=new commandeC();
$commandeC->ajoutercommande($commande1);
$k= new commandeC();
$idcommande=$k->recupererid();

/////////////////////////
$lignecommandeC=new lignecommandeC();
$listeEmployes=$lignecommandeC->recuppanier();

for($i=0;$i<$nbb;$i++)
{
	
foreach($listeEmployes as $row){
	
	
	 //echo $row['qte'];
		
	
$lignecommande1=new lignecommande($idcommande,$row['nomProd'],$row['qte'],$row['prixProd']);



$lignecommandeC->ajouterlignecommande($lignecommande1);



}
}



$p=new commandeC();
$p->supprimerpanier();
 echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>Votre commande a été enregistré avec 
                <strong class='green'>succès</strong>
                </center></div>";

                 echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>Avec un totale 
                <strong class='green'>".$ll."DT"."</strong>
                </center></div>";





//echo "ghbnj,k;";
//$commandeC->affichercommande($commande1);
require_once("checkout.html")


//header('Location: afficherEmploye.php');
	




?>