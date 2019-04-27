<?PHP 
include "../entities/promotion.php";
require_once "../core/promotionP.php"; 

$nomp=0;
$idp=0 ;
$datep=0;
$pour=0 ; 

$today=date("Y-m-d") ;
if(($_POST['datefin']>=$today))
{
    $datep=0 ; 
}
else 
{
    $datep++; 
}

if (ctype_upper($_POST['nom']))
{
$nomp=0;
}
else
{
	$nomp++;
}

/*
if ((($datedebut).getTime())> (($datefin).getTime())) 
{

    $datep=0 ; 
}
else 
{
    $datep++ ; 
}

*/

if ((ctype_digit($_POST['idpromotion']))&&(($_POST['idpromotion'])<=999)&&(($_POST['idpromotion'])>99))
{
$idp=0;
}
else
{
    $idp++;
}


if(($_POST['pourcentage'])<100)
{
    $pour=0 ; 

}
else 
{
    $pour++;
}




if(($nomp==0)&&($idp==0)&&($pour==0)&&($datep==0))
{


$promo=new promotionP() ; 
$datedebut=date('d/m/Y') ; 
$promotion1= new promotion($_POST['idpromotion'],$_POST['nom'],$datedebut,$_POST['datefin'],$_POST['pourcentage']);
$promo->ajouterpromotion($promotion1) ; 

}
else
{

 if($nomp>0)
    {
    		echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>Le nom du promotion doit contenir que 
                <strong class='green'>des lettres majuscule</strong>
                </center></div>";
    }
   


if($idp>0)
    {
    echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>Code de promotion
                <strong class='green'>doit contenir que des nombres et doit contenir 3 nombres</strong>
                </center></div>";
    }
 
     if($pour>0)
    {
            echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>pourcentage doit etre  
                <strong class='green'>inferieur a 100</strong>
                </center></div>";
    }

   if($datep>0)
    {
            echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>date de debut doit etre  
                <strong class='green'>inferieur a la date du fin</strong>
                </center></div>";
    }
  
   
   
}

    




   
    require_once("pajouter.php");

?> 