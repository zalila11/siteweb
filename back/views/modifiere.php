<?php
require "../../config.php";
function modifierepromotion($idpromotion,$nom,$datedebut,$datefin,$pourcentage)
	{
		$sql = 'UPDATE promotion SET nom = :nom,datedebut = :datedebut,datefin = :datefin,pourcentage =:pourcentage WHERE idpromotion= :idpromotion';
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':idpromotion',$idpromotion);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':datedebut',$datedebut);
		$req->bindValue(':datefin',$datefin);
		$req->bindValue(':pourcentage',$pourcentage);

		$req->execute();
	}
modifierepromotion($_POST['idpromotion'],$_POST['nom'],$_POST['datedebut'],$_POST['datefin'],$_POST['pourcentage']);
header("location:form.php");
















?>