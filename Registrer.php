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
  .title{
    font-size: 150%;
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
$dbh = new PDO("sqlsrv:Server=INFO-SIMPLET; Database=Classique_Web", "ETD", "ETD");
$query = "insert into Abonné (Nom_Abonné, Prénom_Abonné, Login, Password, Adresse, Ville, Code_Postal, Email, Credit) 
VALUES ('". $_POST['Nom']."','" .$_POST['Prénom']. "','".$_POST['Login']. "','".$_POST['Password'] ."','".
  $_POST['Adresse'] ."','". $_POST['Ville'] ."','". $_POST['Code_Postal'] ."','". $_POST['Email'] . "', '10')";
$query1 = "select Login from Abonné where Login='".$_POST['Login']."'";
if ($dbh->query($query1)->fetchColumn() != "")
{
  echo "<h3 align=center> Veuillez changer de Login, celui-ci est déjà pris !</h3></br>";
  echo "<center><a href=Inscrire.php> <input type=submit value=Back> </a></center></br></br>";
}
else
{
  $query1 = "select Nom_Abonné from Abonné where Nom_Abonné='".$_POST['Nom']."'";
  if ($dbh->query($query1)->fetchColumn() != "")
  {
    echo "<h3 align=center> Veuillez changer de Nom, celui-ci est déjà pris !</h3></br>";
    echo "<center><a href=Inscrire.php> <input type=submit value=Back> </a></center></br></br>";
  }
  else 
  {
    $query1 = "select Prénom_Abonné from Abonné where Prénom_Abonné='".$_POST['Prénom']."'";
    if ($dbh->query($query1)->fetchColumn() != "")
    {
      echo "<h3 align=center> Veuillez changer de Prénom, celui-ci est déjà pris !</h3></br>";
      echo "<center><a href=Inscrire.php> <input type=submit value=Back> </a></center></br></br>";
    }
    else 
    {
      $dbh->query($query);
      echo "<h3 align=center> Registration succès!</h3></br>";
      echo "<h4 align=center> Vous avez reçus 10 crédits pour la première inscription</h4></br>";
      echo "<center><a href=Connexion.php> <input type=submit value=Connexion> </a></center></br></br>";
    } 
  } 
} 
$dbh=null;
?>
</body>
<footer> <center> Copyright 2016 © DuydangThanhnguyen - All rights reserved </center><br><br></footer>
</html>
