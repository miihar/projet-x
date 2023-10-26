<?php
include ("conn.php");

$connexionbdd = new MaConnexion ("Article","","root","localhost");
$connexionbdd->insertionUtilisateur($_POST['Nom'],$_POST['Prenom'],$_POST['Pseudo'], $_POST['AdresseEmail'],$_POST['Mot_De_Passe'],$_POST['ID_Role']);

header("Location: ../../index.php");


?>