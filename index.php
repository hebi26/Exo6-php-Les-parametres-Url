<!DOCTYPE HTML>
<html lang="fr">
<head>
  <meta charset="utf-8"/>

</head>
<body>

<!-- <a href="index.php?nom=Nemare&amp;prenom=Jean"> -->

<?php

if (isset($_GET['dateDebut']) AND isset($_GET['dateFin'])){

echo 'Date de début : ' .$_GET['dateDebut'].'</br>Date de fin : ' .$_GET['dateFin'];
}
else{
  echo 'précisez un champ...';
}


// if (isset($_GET['nom']) AND isset($_GET['prenom'])){
//   echo 'Bonjour ' .$_GET['prenom'].' '.$_GET['nom'].'!</br>';
//
// if (isset($_GET['age'])){
//   echo 'votre age :' .$_GET['age'];
// }
// else{
//   echo 'précisez votre age...';
// }
// }
/////////////////////////////////////////////////////////////////

// function number($nbr1,$nbr2){
//
// if ($nbr1 > $nbr2){
//   echo 'Le premier nombre est plus grand';
// }
// elseif ($nbr1 == $nbr2){
//   echo 'les deux nombres sont identiques';
// }
// else{
//   echo 'le premier nombre est plus petit';
// }
// }
// number(20, 20);

/////////////////////////////////////////////////////////////////

// $nbr1= 1;
// $nbr2= 14;
// $nbr3= 15;
//
//
// function calcul($nbr1, $nbr2, $nbr3){
//
// $result= ($nbr1+$nbr2+$nbr3);
// echo 'la somme des trois nombres est égal à : '.$result.'';
// }
//
// calcul($nbr1, $nbr2, $nbr3);

/////////////////////////////////////////////////////////////////////


?>


</body>
</html>
