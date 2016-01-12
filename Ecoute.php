<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>DdTn's WebSite</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      -webkit-filter: grayscale(90%);
      filter: grayscale(90%); /* make all photos black and white */ 
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
  }  
  .navbar {
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  table {
    border-collapse: collapse;
    width: 80%;
  }
  td{
    padding: 15px;
    text-align: center;
    font-size: 110%;
  }
  </style>
  <?php
  session_start();
  ?>
</head>
<body>
  <div id='lienInterne'> </div>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" >DdTn's website</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Accueil.php">Accueil</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" >Orchestre
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Orchestres.php">Tous les orchestres</a></li>
            <li><a href="Chefs.php">Chefs d'orchestre</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" >Rechercher par
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Annee.php">Date de sortie</a></li>
            <li><a href="Compositeurs.php">Compositeurs</a></li>
            <li><a href="Interprete.php">Interprètes</a></li> 
            <li><a href="Genre.php">Genre</a></li> 
            <li><a href="Instrument.php">Instrument</a></li> 
          </ul>
        </li>
        <li><a href="Album.php">Tous les albums</a></li>
        <li><a href="Propos.php">A propos</a></li>
        <li class="dropdown">
          <!--<a class="dropdown-toggle" data-toggle="dropdown" >Connectivité
          <span class="caret"></span></a>
          <ul class="dropdown-menu"> -->
            <?php
            if (!empty($_SESSION["NOM_USER"])){
              echo "<a class='dropdown-toggle' data-toggle='dropdown' >".$_SESSION["NOM_USER"]."
                   <span class='caret'></span></a> <ul class='dropdown-menu'>";
              echo "<li><a href='Profile.php'><span class='glyphicon glyphicon-user'></span> Compte</a></li>";
              echo "<li><a href='Panier.php'><span class='  glyphicon glyphicon-shopping-cart'></span> PANIER(".$_SESSION["Panier"].")</a></li>";
              echo "<li><a href='Session_End.php?url=".$_SERVER['REQUEST_URI']."'>
                  <span class='glyphicon glyphicon-log-out'></span> Déconnexion</a></li>";
            }
            else {
              echo "<a class='dropdown-toggle' data-toggle='dropdown' >Connectivité
                   <span class='caret'></span></a> <ul class='dropdown-menu'>";
              echo " <li><a href='Inscrire.php'><span class='glyphicon glyphicon-user'></span> S'inscrire</a></li>";
              echo "<li><a href='Session_Start.php?url=".$_SERVER['REQUEST_URI']."'>
                    <span class='glyphicon glyphicon-log-in'></span> Connexion</a></li> ";
            }
            ?>
          </ul>
        </li>
        </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <!-- <img src="piano.jpeg" alt="piano" width="200%" height="200%"> -->
        <img src="piano.jpeg" alt="piano" width="800" height="600">
        <div class="carousel-caption">
          <h3 >Thanh Duy DANG</h3>
          <p>Rédacteur-Designer</p>
        </div>      
      </div>

      <div class="item">
        <img src="violon.jpg" alt="violon" width="800" height="600">
        <div class="carousel-caption">
          <h3>Cong Thanh NGUYEN</h3>
          <p>Chef de Projet - Développeur Web</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<br><br><br><br><br>
<?php
// Paramètres de connexion
$driver = 'sqlsrv';$host = 'INFO-SIMPLET';$nomDb = 'Classique_Web';
$user = 'ETD';$password = 'ETD';
// Chaîne de connexion
$pdodsn = "$driver:Server=$host;Database=$nomDb";
// Connexion PDO
$pdo = new PDO($pdodsn, $user, $password);
if(isset($_GET['page']))
  $page=$_GET['page'];
else $page=1;
$Code_Album=$_REQUEST["Code_Album"];
$query="Select  Album.Titre_Album, Album.Année_Album, Editeur.Nom_Editeur, Genre.Libellé_Abrégé
  FROM Editeur INNER JOIN (Genre INNER JOIN Album ON Genre.Code_Genre = Album.Code_Genre) 
  ON Editeur.Code_Editeur = Album.Code_Editeur
  WHERE Album.Code_Album=".$Code_Album;
foreach ($pdo->query($query) as $row) { 
  echo "<center><img src='ImageAlbum.php?Code_Album=".$Code_Album."' alt='photo album' height=150></center></br>";
  echo "<center>Titre Album: ".$row[utf8_decode('Titre_Album')]."</center></br>";
  echo "<center>Année de distribution: ".$row[utf8_decode('Année_Album')]."</center></br>";
  echo "<center>Éditeur: ".$row[utf8_decode('Nom_Editeur')]."</center></br>";
  echo "<center>Genre: ".$row[utf8_decode('Libellé_Abrégé')]."</center></br>";
}

$query="Select Enregistrement.Titre, Enregistrement.Prix, Enregistrement.Code_Morceau
  FROM Album INNER JOIN (Disque INNER JOIN (Enregistrement INNER JOIN Composition_Disque 
    ON Enregistrement.Code_Morceau = Composition_Disque.Code_Morceau) 
    ON Disque.Code_Disque = Composition_Disque.Code_Disque) 
    ON Album.Code_Album = Disque.Code_Album
  WHERE Album.Code_Album=".$Code_Album;
echo "</br>";

if ($pdo->query($query)->fetchColumn() != "")
{
  echo "<table border=1 align=center> <tr align=center> <td> <h3> Titre Morceau</h3> </td><td> 
    <h3> Extrait </h3> </td> <td> <h3>Prix Unitaire</h3> </td></tr>";
  $nb = $page*10;                     //  Variable  
  $i=0; $d=0; $All_Morceau="";        //  de pagination                 
  foreach ($pdo->query($query) as $row) 
  {
    if ($d==0)
      $All_Morceau=$All_Morceau.$row['Code_Morceau'];
    else $All_Morceau=$All_Morceau.",".$row['Code_Morceau'];
    $d+=1;                          //
  }  
  foreach ($pdo->query($query) as $row) 
  { 
    if ($i==$nb) break;
    if ($i>=$nb-10)
    { 
      echo "<tr align=center><td>". $row[utf8_decode('Titre')]."</td>
        <td><audio src='Extrait.php?Code_Morceau=".$row['Code_Morceau']."' controls></audio></td>
        <td>".number_format($row['Prix'])." Crédit
        <form method='post' action='Ajouter.php?url=".$_SERVER['REQUEST_URI']."'>
        <input type='SUBMIT' value='Ajouter au panier'>
        <input type='hidden' name='Code_Morceau' value='". $row['Code_Morceau'] . "'/>
        </form></td></tr>";
    }
    $i+=1;
  }
  echo "<form method='post' action='Ajouter.php?url=".$_SERVER['REQUEST_URI']."'>
      <center><input type='SUBMIT' value='Ajouter cet album au panier'></center></br></br>
      <input type='hidden' name='Code_Morceau' value='".$All_Morceau. "'/></form>";
}
else {
  echo "<center><h3>Il n'y a rien dans cet album!</h3></center>";
  echo "<br><br><center><a text-align=center href='#'> En haut de page </a></center></br></br>";
  echo"<footer> <center> Copyright 2016 © DuydangThanhnguyen - All rights reserved </center><br><br></footer>";
  return;
  }
$pdo = null;
echo "</table></br></br></br>";
 /*--------------------------------------------------PAGINATION -------------------------------------------------*/
  if ($d<=50)                                                                                                               
  {
    if ($d>10)                                                      
    {
      echo "<center><ul class='pagination'>";                                                            
      if ($page>1)
        echo " <li><a href=Ecoute.php?Code_Album=".$Code_Album."&page=".($page-1)."><</a></li>";
      for ($i=1; $i*10<$d+10 ; $i++) {
        if ($i==$page)                                                                                   
          echo " <li class='active'><a>".$i."</a></li>";                                                 
        else echo " <li><a href=Ecoute.php?Code_Album=".$Code_Album."&page=".$i.">".$i."</a></li>";
      }
      if ($page*10<$d)
        echo " <li><a href=Ecoute.php?Code_Album=".$Code_Album."&page=".($page+1).">></a></li>";
      echo "</ul></center>";
    }
  }
  else {
    echo "<center><ul class='pagination'>";
    if ($d%10==0)                 //  Compte
      $d=$d/10;                   //  le nombre
    else $d=(($d-($d%10))/10)+1;  //  de page                                                                           
    if ($page%5==0)                                                                                    
    {                                                                                                  
      $max=$page;                                                                                      
      $min=$max-4;                                                                                     
    }                                                                                                  
    else                                                                                               
    {                                                                                                  
      $min=$page-$page%5+1;                                                                            
      $max=$min+4;                                                                                     
    }                                                                                                  
    if ($page>5)                                                                                        
    {
        echo " <li><a href=Ecoute.php?Code_Album=".$Code_Album."&page=".($page-5)."><<</a></li>";
        echo " <li><a href=Ecoute.php?Code_Album=".$Code_Album."&page=".($page-1)."><</a></li>";
    }   
    else if ($page>1)
        echo " <li><a href=Ecoute.php?Code_Album=".$Code_Album."&page=".($page-1)."><</a></li>";
    for ($i=$min; $i<=$max; $i++) 
    {                                                                    
      if ($i==$page)                                                                                   
        echo " <li class='active'><a>".$i."</a></li>";
      else echo "<li><a href=Ecoute.php?Code_Album=".$Code_Album."&page=".$i.">".$i."</a></li>";                                   
      if ($i==$d) break;
    }     
    if ($page<$d)                                                                                   
    {             
        echo "<li><a href=Ecoute.php?Code_Album=".$Code_Album."&page=".($page+1).">></a></li>";                                      
        if ($page+5<=$d)                                      
          echo "<li><a href=Ecoute.php?Code_Album=".$Code_Album."&page=".($page+5).">>></a></li>";                                      
    }
    echo "</ul></center>";                                                                             
  }                                                                                                  
  /*--------------------------------------------------PAGINATION -------------------------------------------------*/  
echo "</br><center><a text-align=center href='#'> En haut de page </a></center></br><br>";
?>
</body>
<footer> <center> Copyright 2016 © DuydangThanhnguyen - All rights reserved </center><br><br></footer>
</html>
