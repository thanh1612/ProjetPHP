<?php
session_start();
$dbh = new PDO("sqlsrv:Server=INFO-SIMPLET; Database=Classique_Web", "ETD", "ETD");
$query= "Update Abonné SET Nom_Abonné='".$_POST['Nom']."',Prénom_Abonné='".$_POST['Prénom']."',Adresse='".$_POST['Adresse']."',
			Ville='".$_POST['Ville']."',Code_Postal='".$_POST['Code_Postal']."',Email='".$_POST['Email']."'
		Where Code_Abonné=".$_SESSION['CODE_USER'];
$dbh->query($query);
$save="Select Nom_Abonné From Abonné Where Code_Abonné=".$_SESSION['CODE_USER'];
foreach($dbh->query($save) as $row)
{
	$_SESSION['NOM_USER']=$row[utf8_decode('Nom_Abonné')];
}
header("Location: Profile.php");
?>