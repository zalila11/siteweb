<?php

    include "../entities/panier.php"; 
    require_once"../core/panierC.php"; 


    		
    		$nomProd=$_POST['nomProd'];
    		$qte=$_POST['qte'];
    		
    		$prixProd=$_POST['prixProd'];
    		$subTot=$prixProd*$qte;


			$panierC=new panier($nomProd,$qte,$prixProd,$subTot);
			
			$panier1=new panierC();
			$stock=30;
			if($qte<$stock)
			{
			$panier1->ajouterpanier($panierC);
			require_once("checkout.html");
			}
			else
			{
				
				 echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>Désole nous n'avons pas cette quantité 
                <strong class='green'>en stock</strong>
                </center></div>";
                require_once("single.html");

			}
			

			

			


?>

			