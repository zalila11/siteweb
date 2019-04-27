<?php
/**
 * Created by PhpStorm.
 * User: Boussoukaya
 * Date: 25/04/2018
 * Time: 22:52
 */
require '../../config.php';
class livraisonC
{
    function getListCommandes()
    {
        $db = config::getConnexion();
        $req = $db->query("SELECT * FROM Commande WHERE Etat='En Cours' ");
        return $req->fetchAll();
    }

    function getListLivreurs()
    {
        $db = config::getConnexion();
        $req = $db->query("SELECT * FROM Livreur  ");
        return $req->fetchAll();
    }

    function getCommandeID($id)
    {
        $db = config::getConnexion();
        $req = $db->query("SELECT * FROM Commande WHERE idcommande=$id ");
        return $req->fetchAll();
    }


    function updateCommandeID($id)
    {
        $db = config::getConnexion();
        $req = $db->query("update Commande set  Etat='En Livraison' WHERE idcommande=$id");
    }

    public  function updateLivreurID($id)
    {
        $db = config::getConnexion();
        $req = $db->query("update Livreur set  Status='En Livraison' WHERE ID_Livreur=$id");
    }
    public  function updateLivreurIDFree($id)
    {
        $db = config::getConnexion();
        $req = $db->query("update Livreur set  Status='Libre' WHERE ID_Livreur=$id");
    }


    public function insertNewLivraison($livraison)
    {
        $db = config::getConnexion();

        $req = $db->query("insert into Livraison (ID_Livreur,ID_Commande,Montant,Etat,Adresse) Values ('".$livraison->ID_Livreur."','" . $livraison->ID_Commande . "','" . $livraison->Montant . "','En Livraison','" . $livraison->Adresse . "')");

    }


    public function GetlivreurLibre()
    {
        $db = config::getConnexion();
        $req = $db->query("SELECT * FROM Livreur WHERE Status='Libre' ");
        return $req->fetchAll() ;

    }

    public  function getListLivraison()
    {
        $db = config::getConnexion();
        $req = $db->query("SELECT * FROM Livraison INNER JOIN Livreur ON Livraison.ID_Livreur=Livreur.ID_Livreur ");
        return $req->fetchAll();
    }

    public  function getLivraison($id)
    {
        $db = config::getConnexion();
        $req = $db->query("SELECT * FROM Livraison  WHERE ID_Livraison=$id");
        return $req->fetchAll();
    }



    public  function updatelivraison($livraison)
    {
        $db = config::getConnexion();
        $req = $db->query("update Livraison set  Etat='".$livraison->Status."' WHERE ID_Livraison='".$livraison->ID_Livraison."'");
    }

    public  function delete($id)
    {
        $db = config::getConnexion();
        $req = $db->query("DELETE FROM Livraison WHERE ID_Livraison=$id");
    }

    public function deletelivreur($id)
    {
        $db = config::getConnexion();
        $req = $db->query("DELETE FROM Livreur WHERE ID_Livreur=$id");

    }
}