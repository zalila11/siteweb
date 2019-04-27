<?PHP
include "../entities/reclamation.php";
include "../core/reclamationC.php";
$reclamation=new reclamation(75757575,'mohsen','12/02/2016','en cours','quantite','poisson','jk@er.eg');
$reclamationC=new reclamationC();
$reclamationC->afficherReclamation($reclamation);
echo "****************";
echo "<br>";
echo "idRec:".$reclamation->getidRec();
echo "<br>";
echo "nomRec:".$reclamation->getnomRec();
echo "<br>";
echo "dateRec:".$reclamation->getdateRec();
echo "<br>";
echo "etatRec:".$reclamation->getetatRec();
echo "<br>";
echo "messageRec:".$reclamation->getmessageRec();
echo "<br>";
echo "sujetRec:".$reclamation->getsujetRec();
echo "<br>";
echo "email:".$reclamation->getemail();
echo "<br>";



?>