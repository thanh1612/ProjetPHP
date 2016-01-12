<?php
session_start();
if (isset($_REQUEST['delete']))
{
	$string="";
	$ID = explode(",", $_COOKIE["Code_Morceau"]);
	$nb=count($ID);
	if ($_REQUEST['delete']==$nb-1)
		$nb-=1;
	for ($i=0; $i < $nb; $i++) {
		if ($i==$_REQUEST['delete'])
			continue;
		if ($i==$nb-1) 
			$string=$string.$ID[$i];
		else $string=$string.$ID[$i].",";
	}
	setcookie('Code_Morceau',$string,time()+24*60*60);
	$panier = explode(",",$string);
  	$_SESSION["Panier"]=count($panier);
}
else {
	setcookie('Code_Morceau',"",time()+24*60*60);
	$_SESSION["Panier"]=0;
}
header("Location: Panier.php");
?>