<?php
//https://www.phpfacile.com/apprendre_le_php/formulaire
//https://g-rossolini.developpez.com/tutoriels/php/formulaires/?page=pratique

//Récupération des données de chaque variable
$nom = $_GET['agnom'];
$ville = $_GET['agville']; 
$tel = $_GET['agtel'];
$mail = $_GET['agmail'];

//Affichage des données
echo "Nom: ".$_GET['agnom']."<br />";
echo "Ville: ".$_GET['agville']."<br />";
echo "Tel: ".$_GET['agtel']."<br />";
echo "Mail: ".$_GET['agmail']."<br />";

echo "Type de projet : ".$_GET['agtype']."<br />";

//Affichage des données des checkbox
echo '<b>Options :</b><ul>';
foreach($_GET['agoption'] as $option){
    echo '<li>'.$option.'</li>';
}
echo '</ul>';

$prix = 0;

if($option == 'Formulaire de contact avancé'){
    $prix = 60;
}
elseif ($option == 'Adaptations mobile spécifiques'){
    $prix = 80;
}
elseif ($option == 'Design personnalisé'){
    $prix = 70;
}
elseif ($option == 'Formulaire de contact avancé' && $option == 'Adaptations mobile spécifiques'){
    $prix = 140;
}
elseif ($option == 'Adaptations mobile spécifiques'&& $option == 'Design personnalisé'){
    $prix = 150;
}
elseif($option == 'Formulaire de contact avancé' && $option == 'Adaptations mobile spécifiques' && $option == 'Design personnalisé' ){
    $prix = 210;
}

echo "Le tarif est de : ".$prix.' €';


?>