<?php
  header("Content-Type: audio/32kadpcm");

  $pdo_audio = new PDO("sqlsrv:Server=INFO-SIMPLET;Database=Classique_Web", "ETD", "ETD");
  $stmt = $pdo_audio->prepare("Select Extrait FROM Enregistrement WHERE Code_Morceau=?");
  $stmt->execute(array($_GET['Code_Morceau']));
  $stmt->bindColumn(1, $lob, PDO::PARAM_LOB);
  $stmt->fetch(PDO::FETCH_BOUND);
  $audio = pack("H*", $lob);
  echo $audio;
?>