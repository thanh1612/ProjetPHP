<?php
	header("Content-Type: image/jpeg");

	$pdo_image = new PDO("sqlsrv:Server=INFO-SIMPLET;Database=Classique_Web", "ETD", "ETD");
	$stmt = $pdo_image->prepare("Select Photo FROM Musicien WHERE Code_Musicien=?");
	$stmt->execute(array($_GET['Code_Musicien']));
	$stmt->bindColumn(1, $lob, PDO::PARAM_LOB);
	$stmt->fetch(PDO::FETCH_BOUND);
	$image = pack("H*", $lob);
	echo $image;
?>