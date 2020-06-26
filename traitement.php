<?php
//https://www.phpfacile.com/apprendre_le_php/formulaire

$nom = $_GET['agnom'];
$ville = $_GET['agville']; 
$tel = $_GET['agtel'];
$mail = $_GET['agmail'];

echo "Nom: ".$_GET["agnom"]."<br />";
echo "Ville: ".$_GET["agville"]."<br />";
echo "Tel: ".$_GET["agtel"]."<br />";
echo "Mail: ".$_GET["agmail"]."<br />";

?>