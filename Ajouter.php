<?php
session_start();
if (empty($_SESSION["NOM_USER"])){
	header("Location: Connexion.php?url=".$_REQUEST["url"]);
}
else
{
	if (time()>$_SESSION['expire']){
		session_destroy();
		setcookie("Code_Morceau", "", time()-3600);
		header("Location: Connexion.php?url=".$_REQUEST["url"]);
	}
	else
	{
		if (!is_null($_COOKIE['Code_Morceau']))
		{ 
			$val = $_COOKIE['Code_Morceau'];
			setcookie('Code_Morceau',$val . "," . $_REQUEST['Code_Morceau'],time()+24*60*60);
			$string=$val.",".$_REQUEST['Code_Morceau'];
		}
		else {
			setcookie('Code_Morceau',$_REQUEST['Code_Morceau'],time()+24*60*60);
			$string=$_REQUEST['Code_Morceau'];
		}
	  	$ID = explode(",",$string);
	  	$_SESSION["Panier"]=count($ID);
		header("Location: " .$_REQUEST["url"]);
	}
}

?>