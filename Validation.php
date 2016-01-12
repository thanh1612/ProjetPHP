<?php
$Password = $_REQUEST["Password"];
$Login = $_REQUEST["Login"];
$url=$_REQUEST["url"];
$driver = 'sqlsrv'; $host='INFO-SIMPLET';
$nomDb = 'Classique_Web';
$user = 'ETD'; $PasswordBD='ETD';
$req_txt = "select Login,Password,Nom_Abonné,Code_Abonné,Credit From Abonné where Login='$Login'and Password='$Password'";
$strConnection = "$driver:Server=$host;Database=$nomDb";
try{
	$arrExtraParam=array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8");
	$pdo = new PDO($strConnection,$user,$PasswordBD,$arrExtraParam);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e){
	$msg = 'ERREUR PDO dans '. $e->getFile(). ' L.' . $e->getLine().' : ' .$e->getMessage();
	die($msg);
}
$req=$pdo->query($req_txt);
$CONNECTE = false;
while ($row = $req->fetch())
{
	$CONNECTE =true;
	$Nom_User=$row[utf8_decode('Nom_Abonné')];
	$ID=$row[utf8_decode('Code_Abonné')];
	if ($row['Credit']==null)
		$Credit=0;
	else $Credit=$row['Credit'];
}
$req->closeCursor();
$pdo=NULL;
if ($CONNECTE==true){
	session_start();
	$_SESSION["NOM_USER"] = $Nom_User;
	$_SESSION["CODE_USER"]= $ID;
	$_SESSION["Credit"]=$Credit;
	$_SESSION["Panier"]=0;
	$_SESSION['expire']=time()+(24*3600);
	header("Location:".$url);
	}
else { //Mot de pass (et/ou login) incorrect: rejet de l'utilisateur
	echo '<body onLoad="alert(\'Membre non reconnu...\')">';
		// puis on le redirige vers la page d'accueil
	echo '<meta http-equiv="refresh" content="0;URL=Session_Start.php?url='.$url.'">';
	//header("Location: Connexion.php?error=1&url=".$url);
	
	}
?>