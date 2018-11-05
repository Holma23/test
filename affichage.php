<?php
$nom="Sam";
$anneeNaissance = 2000;
$d=date('Y');
$age=$d-$anneeNaissance;
echo 'Bonjour Mr '.$nom.' vous avez '.$age.' ans'.'<br>';
echo "Bonjour Mr {$nom} vous avez {$age} ans<br> <hr>"
?>