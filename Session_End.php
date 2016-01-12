<?php
session_start();
session_unset();
session_destroy();
setcookie("Code_Morceau", "", time()-3600);
header("Location: ".$_REQUEST["url"]);
?>