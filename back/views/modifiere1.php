<?php
require "../../config.php";
function modifiercatalogue($idcatalogue,$nom,$datedebut,$datefin)
	{
		$sql = 'UPDATE catalogue SET nom = :nom,datedebut = :datedebut,datefin = :datefin WHERE idcatalogue= :idcatalogue';
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':idcatalogue',$idcatalogue);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':datedebut',$datedebut);
		$req->bindValue(':datefin',$datefin);
	

		$req->execute();
	}
modifiercatalogue($_POST['idcatalogue'],$_POST['nom'],$_POST['datedebut'],$_POST['datefin']);
header("location:form1.php");
















?>