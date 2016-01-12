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
  }
  td{
    padding:10px;
    text-align: center;
  }
  td>img{
    padding:10px;
    text-align: center; 
  }
  #Compositeur{
    margin-left: 45%;
    position: static;
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


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*-------------------------------------------------             0            ---------------------------------------------------------*/
/*-------------------------------------------------         Orchestre        ---------------------------------------------------------*/
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if (isset($_GET['Code_Orchestre']))
{
  $Code_Orchestre=$_GET['Code_Orchestre'];
  $Nom=urldecode($_GET['Nom']);
  $query="Select DISTINCT Album.Titre_Album, Album.Code_Album, Album.Année_Album
  FROM Album INNER JOIN (Disque INNER JOIN ((Enregistrement INNER JOIN (Orchestres INNER JOIN Direction 
    ON Orchestres.Code_Orchestre = Direction.Code_Orchestre) ON Enregistrement.Code_Morceau = Direction.Code_Morceau) 
    INNER JOIN Composition_Disque ON Enregistrement.Code_Morceau = Composition_Disque.Code_Morceau) 
    ON Disque.Code_Disque = Composition_Disque.Code_Disque) ON Album.Code_Album = Disque.Code_Album
  WHERE Orchestres.Code_Orchestre=".$Code_Orchestre;
  if ($pdo->query($query)->fetchColumn() != "")
  {
    echo "<center><h2>Album de l'orchestre ".$Nom."</h2></center>";
    echo "</br></br>";
    echo "<table border=1 align=center> <tr align=center><td> <h3>TITRE ALBUM</h3></td><td><h3> ANNEE</h3></td><td><h3> PHOTO</h3></td></tr>";
    $nb = $page*10;                       //
    $i=0; $d=0;                           //  Variable
    foreach ($pdo->query($query) as $row) //  de pagination 0
      $d+=1;                              //
    foreach ($pdo->query($query) as $row) 
    {
      if ($i==$nb) break;
      if ($i>=$nb-10)
      {
        echo "<tr align=center><td><a href=Ecoute.php?Code_Album=".$row['Code_Album'].">".$row[utf8_decode('Titre_Album')]."</a></td><td>" 
        .$row[utf8_decode('Année_Album')]. "</td><td><img  align=center src='ImageAlbum.php?Code_Album="
        .$row['Code_Album']."' alt='photo album' height=150></td></tr>";
      }
      $i+=1;
    }
  }
  else {
    echo "<h3 align=center>Il n'y a aucun album de cet orchestre</h3>";
    echo "<br><br><center><a text-align=center href='#'> En haut de page </a></center></br></br>";
    echo "<footer> <center> Copyright 2016 © DuydangThanhnguyen - All rights reserved </center><br><br></footer>";
    return;
  } 
  echo "</table></br></br></br>";
  /*-------------------------------------------------------START PAGINATION 0-------------------------------------------------*/
  if ($d<=50)                                                                                                               
  {
    if ($d>10)                                                      
    {
      echo "<center><ul class='pagination'>"; 
      if ($page>1)
        echo " <li><a href=Album.php?Code_Orchestre=".$Code_Orchestre."&Nom=".urlencode($Nom)."&page=".($page-1)."><</a></li>";
      for ($i=1; $i*10<$d+10 ; $i++) {
        if ($i==$page)                                                                                   
          echo " <li class='active'><a>".$i."</a></li>";                                                 
        else echo " <li><a href=Album.php?Code_Orchestre=".$Code_Orchestre."&Nom=".urlencode($Nom)."&page=".$i.">".$i."</a></li>";
      }
      if($page*10<$d)
        echo " <li><a href=Album.php?Code_Orchestre=".$Code_Orchestre."&Nom=".urlencode($Nom)."&page=".($page+1).">></a></li>";
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
        echo " <li><a href=Album.php?Code_Orchestre=".$Code_Orchestre."&Nom=".urlencode($Nom)."&page=".($page-5)."><<</a></li>";
        echo " <li><a href=Album.php?Code_Orchestre=".$Code_Orchestre."&Nom=".urlencode($Nom)."&page=".($page-1)."><</a></li>";
    }   
    else if ($page>1)
        echo " <li><a href=Album.php?Code_Orchestre=".$Code_Orchestre."&Nom=".urlencode($Nom)."&page=".($page-1)."><</a></li>";
    for ($i=$min; $i<=$max; $i++) 
    {                                                                    
      if ($i==$page)                                                                                   
        echo " <li class='active'><a>".$i."</a></li>";
      else echo "<li><a href=Album.php?Code_Orchestre=".$Code_Orchestre."&Nom=".urlencode($Nom)."&page=".$i.">".$i."</a></li>";                                   
      if ($i==$d) break;
    }     
    if ($page<$d)                                                                                   
    {             
        echo "<li><a href=Album.php?Code_Orchestre=".$Code_Orchestre."&Nom=".urlencode($Nom)."&page=".($page+1).">></a></li>";                                      
        if ($page+5<=$d)                                      
          echo "<li><a href=Album.php?Code_Orchestre=".$Code_Orchestre."&Nom=".urlencode($Nom)."&page=".($page+5).">>></a></li>";                                      
    }
    echo "</ul></center>";                                                                             
  }                                                                                                  
  /*--------------------------------------------------END PAGINATION 0--------------------------------------------*/

  echo "<center><a text-align=center href='#'> En haut de page </a></center></br></br>";
  echo "<footer> <center> Copyright 2016 © DuydangThanhnguyen - All rights reserved </center><br><br></footer>";
  return;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*-------------------------------------------------           1            -----------------------------------------------------------*/
/*-------------------------------------------------       INSTRUMENT       -----------------------------------------------------------*/
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if (isset($_GET['Code_Instrument']))
{
  $Code_Instrument=$_GET['Code_Instrument'];
  $Nom=urldecode($_GET['Nom']);
  $query="Select Distinct Album.Titre_Album, Album.Code_Album, Album.Année_Album
    FROM Album INNER JOIN (Disque INNER JOIN ((Enregistrement INNER JOIN (Instrument 
      INNER JOIN Interpréter ON Instrument.Code_Instrument = Interpréter.Code_Instrument) 
      ON Enregistrement.Code_Morceau = Interpréter.Code_Morceau) INNER JOIN Composition_Disque 
      ON Enregistrement.Code_Morceau = Composition_Disque.Code_Morceau) 
      ON Disque.Code_Disque = Composition_Disque.Code_Disque) 
      ON Album.Code_Album = Disque.Code_Album
    WHERE Instrument.Code_Instrument=".$Code_Instrument;
  if ($pdo->query($query)->fetchColumn() != "")
  {
    $pdo1 = new PDO($pdodsn, $user, $password);
    $query1="Select Distinct Image FROM Instrument WHERE Code_Instrument=".$Code_Instrument;
    if ($pdo1->query($query1)->fetchColumn() != null)
      echo "<center><img src='ImageInstrument.php?Code_Instrument=".$Code_Instrument."' 
          alt='photo instrument' width=150 /></center></br></br>";
    echo "<center><h2>Album avec ".$Nom."</h2></center>";
    echo "</br></br>";
    echo "<table border=1 align=center> <tr align=center><td> <h3>TITRE ALBUM</h3></td><td><h3> ANNEE</h3></td><td><h3> PHOTO</h3></td></tr>";
    $nb = $page*10;                       //
    $i=0; $d=0;                           //  Variable
    foreach ($pdo->query($query) as $row) //  de pagination 1
      $d+=1;                              //    
    foreach ($pdo->query($query) as $row) 
    {
      if ($i==$nb) break;
      if ($i>=$nb-10)
      {
        echo "<tr align=center><td><a href=Ecoute.php?Code_Album=".$row['Code_Album'].">".$row[utf8_decode('Titre_Album')]."</a></td><td>" 
        .$row[utf8_decode('Année_Album')]. "</td><td><img  align=center src='ImageAlbum.php?Code_Album="
        .$row['Code_Album']."' alt='photo album' height=150></td></tr>";
      }
      $i+=1;
    }
  }
  else {
    echo "<h3 align=center>Il n'y a aucun album de cet instrument</h3>";
    echo "<br><br><center><a text-align=center href='#'> En haut de page </a></center></br></br>";
    echo "<footer> <center> Copyright 2016 © DuydangThanhnguyen - All rights reserved </center><br><br></footer>";
    return;
  } 
  echo "</table></br></br></br>";
  /*-------------------------------------------------------START PAGINATION 1-------------------------------------------------*/
  if ($d<=50)                                                                                                               
  {
    if ($d>10)                                                      
    {
      echo "<center><ul class='pagination'>"; 
      if ($page>1)
        echo " <li><a href=Album.php?Code_Instrument=".$Code_Instrument."&Nom=".urlencode($Nom)."&page=".($page-1)."><</a></li>";
      for ($i=1; $i*10<$d+10 ; $i++) {
        if ($i==$page)                                                                                   
          echo " <li class='active'><a>".$i."</a></li>";                                                 
        else echo " <li><a href=Album.php?Code_Instrument=".$Code_Instrument."&Nom=".urlencode($Nom)."&page=".$i.">".$i."</a></li>";
      }
      if($page*10<$d)
        echo " <li><a href=Album.php?Code_Instrument=".$Code_Instrument."&Nom=".urlencode($Nom)."&page=".($page+1).">></a></li>";
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
        echo " <li><a href=Album.php?Code_Instrument=".$Code_Instrument."&Nom=".urlencode($Nom)."&page=".($page-5)."><<</a></li>";
        echo " <li><a href=Album.php?Code_Instrument=".$Code_Instrument."&Nom=".urlencode($Nom)."&page=".($page-1)."><</a></li>";
    }   
    else if ($page>1)
        echo " <li><a href=Album.php?Code_Instrument=".$Code_Instrument."&Nom=".urlencode($Nom)."&page=".($page-1)."><</a></li>";
    for ($i=$min; $i<=$max; $i++) 
    {                                                                    
      if ($i==$page)                                                                                   
        echo " <li class='active'><a>".$i."</a></li>";
      else echo "<li><a href=Album.php?Code_Instrument=".$Code_Instrument."&Nom=".urlencode($Nom)."&page=".$i.">".$i."</a></li>";                                   
      if ($i==$d) break;
    }     
    if ($page<$d)                                                                                   
    {             
        echo "<li><a href=Album.php?Code_Instrument=".$Code_Instrument."&Nom=".urlencode($Nom)."&page=".($page+1).">></a></li>";                                      
        if ($page+5<=$d)                                      
          echo "<li><a href=Album.php?Code_Instrument=".$Code_Instrument."&Nom=".urlencode($Nom)."&page=".($page+5).">>></a></li>";                                      
    }
    echo "</ul></center>";                                                                             
  }                                                                                                  
  /*--------------------------------------------------END PAGINATION 1--------------------------------------------*/

  echo "<br><br><center><a text-align=center href='#'> En haut de page </a></center></br></br>";
  echo "<footer> <center> Copyright 2016 © DuydangThanhnguyen - All rights reserved </center><br><br></footer>";
  return;
}



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*-------------------------------------------------         2         ----------------------------------------------------------------*/
/*-------------------------------------------------       GENRE       ----------------------------------------------------------------*/
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if (isset($_GET['Genre']))
{
  $genre=$_GET['Genre'];
  $nom=urldecode($_GET['nom']);
  $query ="Select Code_Album, Titre_Album,Année_Album FROM Album inner join Genre 
        ON Genre.Code_Genre=Album.Code_Genre WHERE Album.Code_Genre=".$genre;
  echo "<h1 align=center> Tous les albums du genre ".$nom."</h1>";
  echo "</br></br>";
  echo "<table border=1 align=center> <tr align=center><td> <h3>TITRE ALBUM</h3></td>
                <td><h3> ANNEE</h3></td><td><h3> PHOTO</h3></td></tr>";
  $nb = $page*10;                       //
  $i=0; $d=0;                           //  Variable
  foreach ($pdo->query($query) as $row) //  de pagination 2
    $d+=1;                              //
  foreach ($pdo->query($query) as $row) {   
    if ($i==$nb) break;
    if ($i>=$nb-10)
    {
      echo "<tr align=center><td><a href=Ecoute.php?Code_Album=".$row['Code_Album'].">".$row[utf8_decode('Titre_Album')]."</a></td><td>" 
      .$row[utf8_decode('Année_Album')]. "</td><td><img  align=center src='ImageAlbum.php?Code_Album=".$row['Code_Album']."' alt='photo album' height=150></td></tr>";
    }
    $i+=1;
  }
  echo "</table></br></br></br>";
  /*-------------------------------------------------------START PAGINATION 2-------------------------------------------------*/
  if ($d<=50)                                                                                                               
  {
    if ($d>10)                                                      
    {
      echo "<center><ul class='pagination'>";
      if ($page>1)
        echo " <li><a href=Album.php?Genre=".$genre."&nom=".urlencode($nom)."&page=".($page-1)."><</a></li>";                                                     
      for ($i=1; $i*10<$d+10 ; $i++) {
        if ($i==$page)                                                                                   
          echo " <li class='active'><a>".$i."</a></li>";                                                 
        else echo " <li><a href=Album.php?Genre=".$genre."&nom=".urlencode($nom)."&page=".$i.">".$i."</a></li>";
      }
      if ($page*10<$d)
        echo " <li><a href=Album.php?Genre=".$genre."&nom=".urlencode($nom)."&page=".($page+1).">></a></li>";
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
        echo " <li><a href=Album.php?Genre=".$genre."&nom=".urlencode($nom)."&page=".($page-5)."><<</a></li>";
        echo " <li><a href=Album.php?Genre=".$genre."&nom=".urlencode($nom)."&page=".($page-1)."><</a></li>";
    }   
    else if ($page>1)
        echo " <li><a href=Album.php?Genre=".$genre."&nom=".urlencode($nom)."&page=".($page-1)."><</a></li>";
    for ($i=$min; $i<=$max; $i++) 
    {                                                                    
      if ($i==$page)                                                                                   
        echo " <li class='active'><a>".$i."</a></li>";
      else echo "<li><a href=Album.php?Genre=".$genre."&nom=".urlencode($nom)."&page=".$i.">".$i."</a></li>";                                   
      if ($i==$d) break;
    }     
    if ($page<$d)                                                                                   
    {             
        echo "<li><a href=Album.php?Genre=".$genre."&nom=".urlencode($nom)."&page=".($page+1).">></a></li>";                                      
        if ($page+5<=$d)                                      
          echo "<li><a href=Album.php?Genre=".$genre."&nom=".urlencode($nom)."&page=".($page+5).">>></a></li>";                                      
    }
    echo "</ul></center>";                                                                             
  }                                                                                                  
  /*--------------------------------------------------END PAGINATION 2--------------------------------------------*/

  echo "<br><br><center><a text-align=center href='#'> En haut de page </a></center></br></br>";
  echo "<footer> <center> Copyright 2016 © DuydangThanhnguyen - All rights reserved </center><br><br></footer>";
  return;
}



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*-------------------------------------------------         3         ----------------------------------------------------------------*/
/*-------------------------------------------------       ANNEE       ----------------------------------------------------------------*/
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if (isset($_GET['Annee']))
{
  $Annee=$_GET['Annee'];
  $query ="Select Code_Album, Titre_Album,Année_Album FROM Album WHERE Année_Album like'$Annee%' ORDER BY Année_Album";
  if ($Annee!=0)
    echo "<h1 align=center> Tous les albums de ".($Annee*10)." à ".($Annee*10+10)."</h1>";
  else echo "<h1 align=center> Tous les albums sans date </h1>";
  echo "</br></br>";
  echo "<table border=1 align=center> <tr align=center><td> <h3>TITRE ALBUM</h3></td>
                <td><h3> ANNEE</h3></td><td><h3> PHOTO</h3></td></tr>";
  $nb = $page*10;                       //
  $i=0; $d=0;                           //  Variable
  foreach ($pdo->query($query) as $row) //  de pagination 3
    $d+=1;                              //
  foreach ($pdo->query($query) as $row) 
  {   
    if ($i==$nb) break;
    if ($i>=$nb-10)
    {
      echo "<tr align=center><td><a href=Ecoute.php?Code_Album=".$row['Code_Album'].">".$row[utf8_decode('Titre_Album')]."</a></td><td>" 
      .$row[utf8_decode('Année_Album')]. "</td><td><img  align=center src='ImageAlbum.php?Code_Album=".$row['Code_Album']."' alt='photo album' height=150></td></tr>";
    }
    $i+=1;
  }
  echo "</table></br></br></br>";
  /*-------------------------------------------------------START PAGINATION 3-------------------------------------------------*/
  if ($d<=50)                                                                                                               
  {
    if ($d>10)                                                      
    {
      echo "<center><ul class='pagination'>";
      if ($page>1)
        echo "<li><a href=Album.php?Annee=".$Annee."&page=".($page-1)."><</a></li>";
      for ($i=1; $i*10<$d+10 ; $i++) {
        if ($i==$page)                                                                                   
          echo " <li class='active'><a>".$i."</a></li>";                                                 
        else echo " <li><a href=Album.php?Annee=".$Annee."&page=".$i.">".$i."</a></li>";
      }
      if ($page*10<$d)
        echo "<li><a href=Album.php?Annee=".$Annee."&page=".($page+1).">></a></li>";
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
        echo " <li><a href=Album.php?Annee=".$Annee."&page=".($page-5)."><<</a></li>";
        echo " <li><a href=Album.php?Annee=".$Annee."&page=".($page-1)."><</a></li>";
    }   
    else if ($page>1)
        echo " <li><a href=Album.php?Annee=".$Annee."&page=".($page-1)."><</a></li>";
    for ($i=$min; $i<=$max; $i++) 
    {                                                                    
      if ($i==$page)                                                                                   
        echo " <li class='active'><a>".$i."</a></li>";
      else echo "<li><a href=Album.php?Annee=".$Annee."&page=".$i.">".$i."</a></li>";                                   
      if ($i==$d) break;
    }     
    if ($page<$d)                                                                                   
    {             
        echo "<li><a href=Album.php?Annee=".$Annee."&page=".($page+1).">></a></li>";                                      
        if ($page+5<=$d)                                      
          echo "<li><a href=Album.php?Annee=".$Annee."&page=".($page+5).">>></a></li>";                                      
    }
    echo "</ul></center>";                                                                             
  }                                                                                                  
  /*--------------------------------------------------END PAGINATION 3--------------------------------------------*/

  echo "<center><a text-align=center href='#'> En haut de page </a></center></br></br>";
  echo "<footer> <center> Copyright 2016 © DuydangThanhnguyen - All rights reserved </center><br><br></footer>";
  return;
}



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*-------------------------------------------------         4         ----------------------------------------------------------------*/
/*-----------------------------------------------------COMPOSITEURS-------------------------------------------------------------------*/
/*---------------------------------------------------------CHEF-----------------------------------------------------------------------*/
/*------------------------------------------------------INTERPRETE--------------------------------------------------------------------*/
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if (isset($_GET['Type']))
{
  $Type=$_GET['Type'];
  $id=$_GET['Code'];
  $musicien="Select Nom_Musicien, Prénom_Musicien, Année_Naissance, Année_Mort, Nom_Pays FROM Musicien 
  inner join Pays ON Musicien.Code_Pays = Pays.Code_Pays WHERE Code_Musicien=".$id;
  echo "</br></br>";
  foreach ($pdo->query($musicien) as $row) 
  {
    echo "<center><img src='ImageMusicien.php?Code_Musicien=".$id."' 
        alt=photo musicien width=200 /></center></br></br>";
    if ($Type=="Compositeur")
    {
      echo "<h4 align=center>Compositeur: ".$row[utf8_decode('Nom_Musicien')]." "
      .$row[utf8_decode('Prénom_Musicien')]."</h4>";
      $query ="Select DISTINCT Album.Titre_Album, Album.Année_Album, Album.Code_Album
      FROM Album INNER JOIN (Disque INNER JOIN (((Composition INNER JOIN ((Oeuvre INNER JOIN 
        (Musicien INNER JOIN Composer ON Musicien.Code_Musicien = Composer.Code_Musicien) 
        ON Oeuvre.Code_Oeuvre = Composer.Code_Oeuvre) INNER JOIN Composition_Oeuvre 
        ON Oeuvre.Code_Oeuvre = Composition_Oeuvre.Code_Oeuvre) 
        ON Composition.Code_Composition = Composition_Oeuvre.Code_Composition) 
        INNER JOIN Enregistrement ON Composition.Code_Composition = Enregistrement.Code_Composition) 
        INNER JOIN Composition_Disque ON Enregistrement.Code_Morceau = Composition_Disque.Code_Morceau) 
        ON Disque.Code_Disque = Composition_Disque.Code_Disque) ON Album.Code_Album = Disque.Code_Album
        WHERE Musicien.Code_Musicien=".$id;
    }
    else if ($Type=="Chef")
    {
       echo "<h4 align=center>Chef d'orchestre: ".$row[utf8_decode('Nom_Musicien')]." "
      .$row[utf8_decode('Prénom_Musicien')]."</h4>";
      $query="Select DISTINCT Album.Titre_Album, Album.Année_Album, Album.Code_Album
      FROM Album INNER JOIN (Disque INNER JOIN ((Enregistrement INNER JOIN Direction ON Enregistrement.Code_Morceau = Direction.Code_Morceau)
          INNER JOIN Composition_Disque ON Enregistrement.Code_Morceau = Composition_Disque.Code_Morceau) 
          ON Disque.Code_Disque = Composition_Disque.Code_Disque) ON Album.Code_Album = Disque.Code_Album
      WHERE Direction.Code_Musicien=".$id;
    }
    else if ($Type=="Interprete")
    {
      echo "<h4 align=center>Interprète: ".$row[utf8_decode('Nom_Musicien')]." "
      .$row[utf8_decode('Prénom_Musicien')]."</h4>";
      $query ="Select Distinct Album.Titre_Album, Album.Année_Album, Album.Code_Album
      FROM Album INNER JOIN (Disque INNER JOIN ((Enregistrement INNER JOIN 
        (Musicien INNER JOIN Interpréter ON Musicien.Code_Musicien = Interpréter.Code_Musicien) 
        ON Enregistrement.Code_Morceau = Interpréter.Code_Morceau) INNER JOIN Composition_Disque 
        ON Enregistrement.Code_Morceau = Composition_Disque.Code_Morceau)
        ON Disque.Code_Disque = Composition_Disque.Code_Disque) 
        ON Album.Code_Album = Disque.Code_Album
      WHERE Musicien.Code_Musicien=".$id;
    }
    echo "<h4 align=center>Année de Naissance: ".$row[utf8_decode('Année_Naissance')]."</h4>";
    echo "<h4 align=center>Année de Décès: ".$row[utf8_decode('Année_Mort')]."</h4>";
    echo "<h4 align=center>Pays: ".$row[utf8_decode('Nom_Pays')]."</h4></br></br>";
  }   
  
  if ($pdo->query($query)->fetchColumn() != "")
  {
    echo "<table border=1 align=center><tr align=center><td><h2>Titre</h2></td><td><h2> Annee</h2></td><td><h2>Photo</h2></td></tr></h2>";
    $nb = $page*10;                       //
    $i=0; $d=0;                           //  Variable
    foreach ($pdo->query($query) as $row) //  de pagination 4
      $d+=1;                              //
    foreach ($pdo->query($query) as $row)
    {
      if ($i==$nb) break;
      if ($i>=$nb-10)
      {
        echo "<tr><td><a href=Ecoute.php?Code_Album=".$row['Code_Album'].">".$row[utf8_decode('Titre_Album')]."</a></td><td>".$row[utf8_decode('Année_Album')].
        "</td><td><img src='ImageAlbum.php?Code_Album=".$row['Code_Album']."' alt='photo album' height=100></td></tr>";   
      }
      $i+=1;
    }
  }
  else {  echo "<h3 align=center>Cette recherche ne retourne aucun album !</h3>";
        echo "<br><br><center><a text-align=center href='#'> En haut de page </a></center></br></br>";
        echo "<footer> <center> Copyright 2016 © DuydangThanhnguyen - All rights reserved </center><br><br></footer>";
        return;
      }
  echo "</table></br></br></br>";
  /*-------------------------------------------------------START PAGINATION 4-------------------------------------------------*/
  if ($d<=50)                                                                                                               
  {
    if ($d>10)                                                      
    {
      echo "<center><ul class='pagination'>";
      if ($page>1)
        echo "<li><a href=Album.php?Code=".$id."&Type=Interprete&page=".($page-1)."><</a></li>";
      for ($i=1; $i*10<$d+10 ; $i++) {
        if ($i==$page)                                                                                   
          echo " <li class='active'><a>".$i."</a></li>";                                                 
        else echo " <li><a href=Album.php?Code=".$id."&Type=Interprete&page=".$i.">".$i."</a></li>";
      }
      if ($page*10<$d)
        echo "<li><a href=Album.php?Code=".$id."&Type=Interprete&page=".($page+1).">></a></li>";
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
        echo "<li><a href=Album.php?Code=".$id."&Type=Interprete&page=".($page-5)."><<</a></li>";
        echo "<li><a href=Album.php?Code=".$id."&Type=Interprete&page=".($page-1)."><</a></li>";
    }   
    else if ($page>1)
      echo "<li><a href=Album.php?Code=".$id."&Type=Interprete&page=".($page-1)."><</a></li>";
    for ($i=$min; $i<=$max; $i++) 
    {                                                                    
      if ($i==$page)                                                                                   
        echo " <li class='active'><a>".$i."</a></li>";
      else echo "<li><a href=Album.php?Code=".$id."&Type=Interprete&page=".$i.">".$i."</a></li>";                                   
      if ($i==$d) break;
    }     
    if ($page<$d)                                                                                   
    {             
        echo "<li><a href=Album.php?Code=".$id."&Type=Interprete&page=".($page+1).">></a></li>";                                      
        if ($page+5<=$d)                                      
          echo "<li><a href=Album.php?Code=".$id."&Type=Interprete&page=".($page+5).">>></a></li>";
    }
    echo "</ul></center>";                                                                             
  }                                                                                                  
  /*--------------------------------------------------END PAGINATION 4-------------------------------------*/

  echo "<center><a text-align=center href='#'> En haut de page </a></center></br></br>";
  echo "<footer> <center> Copyright 2016 © DuydangThanhnguyen - All rights reserved </center><br><br></footer>";
  return;
}


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*-------------------------------------------------         5         -----------------------------------------------------------------*/
/*----------------------------------------------------TOUS LES ALBUMS------------------------------------------------------------------*/
/*-----------------------------------------------------ET SON INITIAL------------------------------------------------------------------*/
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if (isset($_REQUEST['initial']))
{
  $initial=urldecode($_REQUEST['initial']);
  $query="Select Code_Album, Titre_Album, Année_Album FROM ALBUM WHERE Titre_Album like'%$initial%' ORDER BY Titre_Album";
  echo "<center><h2>TITRE ALBUMS CONTENANT \"".$initial."\"</h2></center>";
}
else
{
  $query="Select Code_Album, Titre_Album, Année_Album FROM ALBUM ORDER BY Titre_Album";
  echo "<center><h2>TOUS LES ALBUMS</h2></center>";
}
echo "</br></br>";
?>
<form method="post" action="Album.php">
  <p align="center"><input type="text" size="24" name="initial"/><input type="submit" value="Rechercher"/></p>
</form>
<?php
echo "</br></br>";
if ($pdo->query($query)->fetchColumn() != "")
{
  echo "<table border=1 align=center><tr align=center><td>
    <h2>Titre</h2></td><td><h2> Annee</h2></td><td><h2>Photo</h2></td></tr></h2>";
  $nb = $page*10;                       //
  $i=0; $d=0;                           //  Variable
  foreach ($pdo->query($query) as $row) //  de pagination 5
    $d+=1;                              //
  foreach ($pdo->query($query) as $row)
    {
    if ($i==$nb) break;
    if ($i>=$nb-10)
    {
      echo "<tr><td><a href=Ecoute.php?Code_Album=".$row['Code_Album'].">".$row[utf8_decode('Titre_Album')]."</a></td>
      <td>".$row[utf8_decode('Année_Album')]."</td><td><img src='ImageAlbum.php?Code_Album=".$row['Code_Album']."' 
        alt='photo album' height=100></td></tr>";
    }
    $i+=1;
  }
}
else {  echo "<h3 align=center>Cette recherche ne retourne aucun album !</h3>";
        echo "<br><br><center><a text-align=center href='#'> En haut de page </a></center></br></br>";
        echo "<footer> <center> Copyright 2016 © DuydangThanhnguyen - All rights reserved </center><br><br></footer>";
        return;
      }
echo "</table></br></br></br>";
  /*----------------------------------------------START PAGINATION 5-------------------------------------------------*/
  if ($d<=50)                                                                                                               
  {
    if ($d>10)                                                      
    {
      echo "<center><ul class='pagination'>";
      if ($page>1)
      {
        if (isset($_REQUEST['initial']))
          echo "<li><a href=Album.php?initial=".urlencode($initial)."&page=".($page-1)."><</a></li>";
        else 
          echo "<li><a href=Album.php?page=".($page-1)."><</a></li>";                                    
      }
      for ($i=1; $i*10<$d+10 ; $i++) 
      { 
        if ($i==$page)                                                                                   
          echo " <li class='active'><a>".$i."</a></li>";                                                 
        else {
          if (isset($_REQUEST['initial']))
            echo "<li><a href=Album.php?initial=".urlencode($initial)."&page=".$i.">".$i."</a></li>";                                   
          else echo "<li><a href=Album.php?page=".$i.">".$i."</a></li>";                                   
        }
      }
      if ($page*10<$d)
        if (isset($_REQUEST['initial']))
          echo "<li><a href=Album.php?initial=".urlencode($initial)."&page=".($page+1).">></a></li>";
        else 
          echo "<li><a href=Album.php?page=".($page+1).">></a></li>";                                    
      echo "</ul></center><br><br>";
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
      if (isset($_REQUEST['initial'])){
        echo "<li><a href=Album.php?initial=".urlencode($initial)."&page=".($page-5)."><<</a></li>";                                   
        echo "<li><a href=Album.php?initial=".urlencode($initial)."&page=".($page-1)."><</a></li>";
        }
      else{                                                                                                      
        echo "<li><a href=Album.php?page=".($page-5)."><<</a></li>";                                   
        echo "<li><a href=Album.php?page=".($page-1)."><</a></li>";                                    
      }    
    }
    else if ($page>1)
    {
      if (isset($_REQUEST['initial']))
        echo "<li><a href=Album.php?initial=".urlencode($initial)."&page=".($page-1)."><</a></li>";
      else 
        echo "<li><a href=Album.php?page=".($page-1)."><</a></li>";                                    
    }

    for ($i=$min; $i<=$max; $i++) {                                                                    
      if ($i==$page)                                                                                   
        echo " <li class='active'><a>".$i."</a></li>";
      else {
        if (isset($_REQUEST['initial']))
          echo "<li><a href=Album.php?initial=".urlencode($initial)."&page=".$i.">".$i."</a></li>";                                   
        else echo "<li><a href=Album.php?page=".$i.">".$i."</a></li>";                                   
        }
      if ($i==$d) break;
    }     
    if ($page<$d)                                                                                   
    {     
      if (isset($_REQUEST['initial'])){
        echo "<li><a href=Album.php?initial=".urlencode($initial)."&page=".($page+1).">></a></li>";
        if ($page+5<=$d)                                      
          echo "<li><a href=Album.php?initial=".urlencode($initial)."&page=".($page+5).">>></a></li>";
      }
      else {                                                                                           
        echo "<li><a href=Album.php?page=".($page+1).">></a></li>";  
        if ($page+5<=$d)                                                                          
          echo "<li><a href=Album.php?page=".($page+5).">>></a></li>";
      }                                     
    }
    echo "</ul></center><br><br>";                                                                             
  }                                                                                                  
  /*---------------------------------------------------END PAGINATION 5-------------------------------------*/
echo "<center><a text-align=center href='#'> En haut de page </a></center></br></br>";
$pdo=null;
?>
</body>
<footer> <center> Copyright 2016 © DuydangThanhnguyen - All rights reserved </center><br><br></footer>
</html>
