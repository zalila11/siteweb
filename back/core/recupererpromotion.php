<?php 
	require_once("../../config.php");
	class promotionre
	{

function recupererpromotion($idpromotion){
		$sql="SELECT * from promotion where idpromotion=$idpromotion";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		
        }

        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
}

        ?>