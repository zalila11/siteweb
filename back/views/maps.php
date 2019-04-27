            <?php
 
session_start();  
 if(!isset($_SESSION['active'])) 
{
    include "signin.php";
}
else
{
require_once("../../config.php");

$db=config::getConnexion();
  

 
  $req1= $db->query("SELECT COUNT(*) as nb1 FROM tendance WHERE note='5' "  );
    $nb1 = $req1->fetch();

    $req2= $db->query("SELECT COUNT(*) as nb2 FROM tendance WHERE note='4' " );
    $nb2 = $req2->fetch();

    $req3= $db->query("SELECT COUNT(*) as nb3 FROM tendance WHERE note='3' " );
     $nb3 = $req3->fetch();

    $req4= $db->query("SELECT COUNT(*) as nb4 FROM tendance WHERE note='2' " );
    $nb4 = $req4->fetch();

      $req5= $db->query("SELECT COUNT(*) as nb5 FROM tendance WHERE note='1' " );
    $nb5 = $req5->fetch();

$nb5['nb5']+=$nb4['nb4'];  


$dataPoints = array(
  array("label"=> "Note 5☆", "y"=> intval($nb1['nb1'])),
  array("label"=> "Note 4☆", "y"=> intval($nb2['nb2'])),
  array("label"=> "Note 3☆", "y"=> intval($nb3['nb3'])),
  //array("label"=> "Note 2☆", "y"=> intval($nb4['nb5'])),
  array("label"=> "Note 1☆", "y"=> intval($nb5['nb5'])),


);
  
?>


<!DOCTYPE html>
<html lang="en">

  <head>

   <script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  exportEnabled: true,
  theme: "light1", // "light1", "light2", "dark1", "dark2"
  title:{
    text: "Statistique tendance"
  },
  data: [{
    type: "column", //change type to bar, line, area, pie, etc
    //indexLabel: "{y}", //Shows y value on all Data Points
    indexLabelFontColor: "#5A5757",
    indexLabelPlacement: "outside",   
    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
 
}
</script>

<!DOCTYPE HTML>
<html>
<head>
<title>Dashboard Mer bleue</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<!-- tables -->
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!-- //tables -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
     <div class="mother-grid-inner">
            <!--header start here-->
        <div class="header-main">
          <div class="logo-w3-agile">
                <h1><a href="index.html">Pooled</a></h1>
              </div>
          <div class="w3layouts-left">
              
              <!--search-box-->
                <div class="w3-search-box">
                  <form action="#" method="post">
                    <input type="text" placeholder="Search..." required=""> 
                    <input type="submit" value="">          
                  </form>
                </div><!--//end-search-box-->
              <div class="clearfix"> </div>
             </div>
             <div class="w3layouts-right">
              <div class="profile_details_left"><!--notifications of menu start -->
                <ul class="nofitications-dropdown">
                  <li class="dropdown head-dpdn">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
                    <ul class="dropdown-menu">
                      <li>
                        <div class="notification_header">
                          <h3>You have 3 new messages</h3>
                        </div>
                      </li>
                      <li><a href="#">
                         <div class="user_img"><img src="images/in11.jpg" alt=""></div>
                         <div class="notification_desc">
                        <p>Lorem ipsum dolor</p>
                        <p><span>1 hour ago</span></p>
                        </div>
                         <div class="clearfix"></div> 
                      </a></li>
                      <li class="odd"><a href="#">
                        <div class="user_img"><img src="images/in10.jpg" alt=""></div>
                         <div class="notification_desc">
                        <p>Lorem ipsum dolor </p>
                        <p><span>1 hour ago</span></p>
                        </div>
                        <div class="clearfix"></div>  
                      </a></li>
                      <li><a href="#">
                         <div class="user_img"><img src="images/in9.jpg" alt=""></div>
                         <div class="notification_desc">
                        <p>Lorem ipsum dolor</p>
                        <p><span>1 hour ago</span></p>
                        </div>
                         <div class="clearfix"></div> 
                      </a></li>
                      <li>
                        <div class="notification_bottom">
                          <a href="#">See all messages</a>
                        </div> 
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown head-dpdn">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
                    <ul class="dropdown-menu">
                      <li>
                        <div class="notification_header">
                          <h3>You have 3 new notification</h3>
                        </div>
                      </li>
                      <li><a href="#">
                        <div class="user_img"><img src="images/in8.jpg" alt=""></div>
                         <div class="notification_desc">
                        <p>Lorem ipsum dolor</p>
                        <p><span>1 hour ago</span></p>
                        </div>
                        <div class="clearfix"></div>  
                       </a></li>
                       <li class="odd"><a href="#">
                        <div class="user_img"><img src="images/in6.jpg" alt=""></div>
                         <div class="notification_desc">
                        <p>Lorem ipsum dolor</p>
                        <p><span>1 hour ago</span></p>
                        </div>
                         <div class="clearfix"></div> 
                       </a></li>
                       <li><a href="#">
                        <div class="user_img"><img src="images/in7.jpg" alt=""></div>
                         <div class="notification_desc">
                        <p>Lorem ipsum dolor</p>
                        <p><span>1 hour ago</span></p>
                        </div>
                         <div class="clearfix"></div> 
                       </a></li>
                       <li>
                        <div class="notification_bottom">
                          <a href="#">See all notifications</a>
                        </div> 
                      </li>
                    </ul>
                  </li> 
                  <li class="dropdown head-dpdn">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">9</span></a>
                    <ul class="dropdown-menu">
                      <li>
                        <div class="notification_header">
                          <h3>You have 8 pending task</h3>
                        </div>
                      </li>
                      <li><a href="#">
                        <div class="task-info">
                          <span class="task-desc">Database update</span><span class="percentage">40%</span>
                          <div class="clearfix"></div>  
                        </div>
                        <div class="progress progress-striped active">
                          <div class="bar yellow" style="width:40%;"></div>
                        </div>
                      </a></li>
                      <li><a href="#">
                        <div class="task-info">
                          <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                           <div class="clearfix"></div> 
                        </div>
                        <div class="progress progress-striped active">
                           <div class="bar green" style="width:90%;"></div>
                        </div>
                      </a></li>
                      <li><a href="#">
                        <div class="task-info">
                          <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                          <div class="clearfix"></div>  
                        </div>
                         <div class="progress progress-striped active">
                           <div class="bar red" style="width: 33%;"></div>
                        </div>
                      </a></li>
                      <li><a href="#">
                        <div class="task-info">
                          <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                           <div class="clearfix"></div> 
                        </div>
                        <div class="progress progress-striped active">
                           <div class="bar  blue" style="width: 80%;"></div>
                        </div>
                      </a></li>
                      <li>
                        <div class="notification_bottom">
                          <a href="#">See all pending tasks</a>
                        </div> 
                      </li>
                    </ul>
                  </li> 
                  <div class="clearfix"> </div>
                </ul>
                <div class="clearfix"> </div>
              </div>
              <!--notification menu end -->
              
              <div class="clearfix"> </div>       
            </div>
            <div class="profile_details w3l">   
                <ul>
                  <li class="dropdown profile_details_drop">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <div class="profile_img"> 
                        <span class="prfil-img"><img src="images/in4.jpg" alt=""> </span> 
                        <div class="user-name">
                          <p><?php if(isset($_SESSION['active']))echo $_SESSION['identifiant']; else echo "Non connecté"?></p>
                          <span>Administrator</span>
                        </div>
                        <i class="fa fa-angle-down"></i>
                        <i class="fa fa-angle-up"></i>
                        <div class="clearfix"></div>  
                      </div>  
                    </a>
                    <?php $i=0;if(isset($_SESSION['active']))$i=1;{?>
                    <ul class="dropdown-menu drp-mnu">
                      <li> <a href=<?php if($i==1)echo "profil.php"?>><i class="fa fa-user"></i> Profile</a> </li> 
                      <li> <a href="deconnexion.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
                    </ul>
                  </li>
                </ul>
              </div>
              <?php }?>
              
             <div class="clearfix">


  </div>  
       

<!--heder end here-->
<ol class="breadcrumb">
 <li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Gestion tendance</li>
</ol>
<div class="agile-grids"> 
<div id="chartContainer" style="height: 370px; width: 83%; margin-left: 230px" align="center"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</div>
<!-- tables -->
        
        <div class="agile-tables">
          <div class="w3l-table-info">
            <div class="agile-tables">
<?PHP
include "../core/afficherprod.php";
$client=new tendancea();
$listeEmployes=$client->afficherprod();
$e=0;
foreach($listeEmployes as $row){
  if($row['idproduit']!="")
  {
?>
<?php if($e==0)
{?>
  <h2>Liste des produits</h2>
<table id="table">
<tr>
<th>Id produit</th>
<th>Nom produit</th>
<th>prix</th>
<th>quantite</th>
</tr>
<?php }
$e++;?>
  <tr>
  <td><?PHP echo $row['idproduit']; ?></td>
  <td><?PHP echo $row['nomproduit']; ?></td>
  <td><?PHP echo $row['prix']; ?></td>
  <td><?PHP echo $row['quantite']; ?></td>
  <td><form method="POST" action="ajouttendance.php">
  <input type="submit" name="ajouter" value="ajouter tendance">
  <input type="text" name="note" required="" placeholder="Note du produit /5">
  <input type="hidden" value="<?PHP echo $row['idproduit']; ?>" name="idproduit">
  <input type="hidden" value="<?PHP echo $row['nomproduit']; ?>" name="nom">
  <input type="hidden" value="<?PHP echo $row['prix']; ?>" name="prix">
  <input type="hidden" value="<?PHP echo $row['quantite']; ?>" name="quantite">
  </form>
  </tr>
  <?PHP
}}
?>
</table>

  <?PHP
require_once "../core/tendance.php";
$e=0;
$client=new tendenceaj();
$listeEmployes=$client->affichertendance();
foreach($listeEmployes as $row){
if($row['idproduit']!="")
  {
?>
<?php if($e==0){?>
<h2>Liste des tendances</h2>
<table id="table">
<tr>
<th>Id produit</th>
<th>Nom produit</th>
<th>Date ajout tendance</th>
<th>Note du produit</th>
</tr>
<?php }
$e++;?>
  <tr>
  <td><?PHP echo $row['idproduit']; ?></td>
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['date']; ?></td>
  <td><?PHP echo $row['note']; ?></td>
  <td><form method="POST" action="supprimertendance.php">
  <input type="submit" name="supprimer" value="supprimer tendance">
  <input type="hidden" value="<?PHP echo $row['idproduit']; ?>" name="idproduit">
  </form>
  </tr>
  <?PHP
}}
?>
</table>
          
  </div>
</div>
</div>
           
      </div>
<!-- script-for sticky-nav -->
    <script>
    $(document).ready(function() {
       var navoffeset=$(".header-main").offset().top;
       $(window).scroll(function(){
        var scrollpos=$(window).scrollTop(); 
        if(scrollpos >=navoffeset){
          $(".header-main").addClass("fixed");
        }else{
          $(".header-main").removeClass("fixed");
        }
       });
       
    });
    </script>
      <!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
   <p>© 2016 Pooled . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>  
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
    <!--/sidebar-menu-->
      <div class="sidebar-menu">
          <header class="logo1">
            <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
          </header>
            <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
                  <ul id="menu" >
                    <li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span><div class="clearfix"></div></a></li>
                    
                    
                     <li id="menu-academico" ><a href="inbox.html"><i class="fa fa-envelope nav_icon"></i><span>Inbox</span><div class="clearfix"></div></a></li>
                  <li><a href="gallery.php"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Gestion clients</span><div class="clearfix"></div></a></li>
                  <li id="menu-academico" ><a href="charts.php"><i class="fa fa-bar-chart"></i><span>Gestion commande</span><div class="clearfix"></div></a></li>
                   <li id="menu-academico" ><a href="afficherRec.php"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Gestion reclamation</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                       
                    </li>
                  <li id="menu-academico" ><a href="afficherRen.php"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Gestion rendez_vous</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                       <ul id="menu-academico-sub" >
                       <li id="menu-academico-avaliacoes" ><a href="rendez.php">Ajouter rendez_vous</a></li>
                       <li id="menu-academico-avaliacoes" ><a href="statistiques.php">statistiques rendez_vous</a></li>
                  
                      </ul>
                    </li>
                  <li id="menu-academico" ><a href="button.php"><i class="fa fa-bar-chart"></i><span>Gestion produit</span><div class="clearfix"></div></a></li>
                
                   <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Gestion promotion</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                       <ul id="menu-academico-sub" >
                       <li id="menu-academico-avaliacoes" ><a href="pajouter.php">Ajouter</a></li>
                      <li id="menu-academico-avaliacoes" ><a href="form.php">Modifier</a></li>
                      <li id="menu-academico-avaliacoes" ><a href="psupprimer.php">Supprimer</a></li>
                      <li id="menu-academico-avaliacoes" ><a href="prechercher.php">Rechercher</a></li>
                      <li id="menu-academico-avaliacoes" ><a href="affectpromo">Affecter une promotion</a></li>
                      </ul>
                    </li>




                  <li id="menu-academico" ><a href="catalogue.php"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Gestion catalogue</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                       <ul id="menu-academico-sub" >
                       <li id="menu-academico-avaliacoes" ><a href="cajouter.php">Ajouter</a></li>
                      <li id="menu-academico-avaliacoes" ><a href="form1.php">Modifier</a></li>
                      <li id="menu-academico-avaliacoes" ><a href="csupprimer.php">Supprimer</a></li>
                      <li id="menu-academico-avaliacoes" ><a href="crechercher.php">Rechercher</a></li>
                      <li id="menu-academico-avaliacoes" ><a href="prechercher.php">Affecter un catalogue</a></li>
                      </ul>
                    </li>
                    
                  <li><a href="AjouterLivraison.php"><i class="fa fa-table"></i>  <span>Ajouter Livraison</span><div class="clearfix"></div></a></li>
                    <li><a href="AjouterLivreur.php"><i class="fa fa-table"></i>  <span>Ajouter Livreur</span><div class="clearfix"></div></a></li>
                    <li><a href="Afficherlivraison.php"><i class="fa fa-table"></i>  <span>Afficher Livraison</span><div class="clearfix"></div></a></li>
                    <li><a href="AfficherLivreur.php"><i class="fa fa-table"></i>  <span>Afficher Livreur</span><div class="clearfix"></div></a></li>
                    <li><a href="Statisques.php"><i class="fa fa-table"></i>  <span>Statisques Livreurs</span><div class="clearfix"></div></a></li>
                  <li><a href="maps.php"><i class="fa fa-map-marker" aria-hidden="true"></i>  <span>Gestion tendance</span><div class="clearfix"></div></a></li>
                  </ul>
                </div>
                </div>
                <div class="clearfix"></div>    
              </div>
              <script>
              var toggle = true;
                    
              $(".sidebar-icon").click(function() {                
                if (toggle)
                {
                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                $("#menu span").css({"position":"absolute"});
                }
                else
                {
                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                setTimeout(function() {
                  $("#menu span").css({"position":"relative"});
                }, 400);
                }
                      
                      toggle = !toggle;
                    });
              </script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->     
<!-- calendar -->
  <script type="text/javascript" src="js/monthly.js"></script>
  <script type="text/javascript">
    $(window).load( function() {

      $('#mycalendar').monthly({
        mode: 'event',
        
      });

      $('#mycalendar2').monthly({
        mode: 'picker',
        target: '#mytarget',
        setWidth: '250px',
        startHidden: true,
        showTrigger: '#mytarget',
        stylePast: true,
        disablePast: true
      });

    switch(window.location.protocol) {
    case 'http:':
    case 'https:':
    // running on a server, should be good.
    break;
    case 'file:':
    alert('Just a heads-up, events will not work when run locally.');
    }

    });
  </script>
  <!-- //calendar -->
</body>
</html>
<?php }?>