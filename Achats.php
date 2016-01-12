<?php
  // Paramètres de connexion
$driver = 'sqlsrv';$host = 'INFO-SIMPLET';$nomDb = 'Classique_Web';
$user = 'ETD';$password = 'ETD';
  // Chaîne de connexion
$pdodsn = "$driver:Server=$host;Database=$nomDb";
  // Connexion PDO
$pdo = new PDO($pdodsn, $user, $password);
$query="Select Enregistrement.Titre, Enregistrement.Code_Morceau
	FROM Enregistrement INNER JOIN Achat ON Enregistrement.Code_Morceau = Achat.Code_Enregistrement
	WHERE Achat.Code_Abonné =".$_SESSION["CODE_USER"];
if ($pdo->query($query)->fetchColumn()!="")
{
	echo "<center><h3>Vos Achats</h3></center></br></br>";
	echo "<table border=1 align=center> <tr align=center> <td> <h3> Titre</h3> </td><td> <h3>Morceau</h3> </td></tr>";
	foreach ($pdo->query($query) as $row){
	echo "<tr><td>".$row['Titre']."</td><td><audio src='Extrait.php?Code_Morceau=".$row['Code_Morceau']."' controls></td></tr>";
	}
  	echo "</table></br></br><center><a text-align=center href='#'> En haut de page </a></center></br></br>";
}
else {
	echo "<center><h3>Vous n'avez aucun achat !</h3></center>";
	echo "</br></br><center><a text-align=center href='#'> En haut de page </a></center></br></br>";
}
$pdo=null;
?>