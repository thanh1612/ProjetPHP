<?php
session_start();
if (empty($_SESSION["NOM_USER"])){
	header("Location: Connexion.php?url=".$_REQUEST["url"]);
}
if (time()>$_SESSION['expire']){
	session_destroy();
	setcookie("Code_Morceau", "", time()-3600);
	header("Location: Connexion.php?url=".$_REQUEST["url"]);
}
?>