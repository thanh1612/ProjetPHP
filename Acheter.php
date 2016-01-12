<?php
session_start();
$ID = explode(",", $_COOKIE["Code_Morceau"]);
$dbh = new PDO("sqlsrv:Server=INFO-SIMPLET; Database=Classique_Web", "ETD", "ETD");
if (isset($_REQUEST['acheter']))
{
	if ($_SESSION['Credit']>=1)
	{
		$query = "insert into Achat (Code_Enregistrement, Code_Abonné)
		VALUES ('".	$ID[$_REQUEST['acheter']]."','" .$_SESSION["CODE_USER"]. "')";
		$dbh->query($query);
		$_SESSION['Credit']-=1;
		$query="Update Abonné SET Credit=".$_SESSION['Credit']." Where Code_Abonné=".$_SESSION['CODE_USER'];
		$dbh->query($query);
		echo '<body onLoad="alert(\'Merci pour votre achat ! \')">';
		echo '<meta http-equiv="refresh" content="0;URL=Delete.php?delete='.$_REQUEST['acheter'].'">';
	}
	else {
		echo '<body onLoad="alert(\'Vous n avez pas assez credit pour faire cet achat ! \')">';
		echo '<meta http-equiv="refresh" content="0;URL=Panier.php">';
	}
}
else
{
	if ($_SESSION['Credit']>=count($ID))
	{
		for ($i=0; $i < count($ID); $i++)
		{
			$query = "insert into Achat (Code_Enregistrement, Code_Abonné)
			VALUES ('".	$ID[$i]."','" .$_SESSION["CODE_USER"]. "')";
			$dbh->query($query);
		}
		$_SESSION['Credit']-=count($ID);
		$query="Update Abonné SET Credit=".$_SESSION['Credit']." Where Code_Abonné=".$_SESSION['CODE_USER'];
		$dbh->query($query);
		echo '<body onLoad="alert(\'Merci pour votre achat ! \')">';
		echo '<meta http-equiv="refresh" content="0;URL=Delete.php">';
	}
	else {
		echo '<body onLoad="alert(\'Vous n avez pas assez credit pour faire cet achat ! \')">';
		echo '<meta http-equiv="refresh" content="0;URL=Panier.php">';
	}
}
?>