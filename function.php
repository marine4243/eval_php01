<?php

//exercice 1

function isVoyelle ($lettre) {

$voyelle = false;

if (
   (is_string($lettre)==true) &&
   (strlen($lettre)==1)) {

     if (
        ($lettre == 'a')||
        ($lettre == 'e')||
        ($lettre == 'i')||
        ($lettre == 'o')||
        ($lettre == 'u')||
        ($lettre == 'A')||
        ($lettre == 'E')||
        ($lettre == 'I')||
        ($lettre == 'O')||
        ($lettre == 'U')) {


  $voyelle = true;
  } else {
  $voyelle = false;
  }

  return($voyelle);
}

}


function testerLettre($lettre)
{

  if (isVoyelle($lettre)) {
    echo $lettre." est bien une voyelle\n";
  } else {
    echo $lettre." n'est pas une voyelle\n";
  }
  
}

/*----------------------------------------------------------------------------*/

//exercice 2

function supprimerVoyelles($chaine) {

  $chaine_reponse = "";

  for ($i = 0; $i < strlen($chaine); $i++) {
    $lettre = $chaine[$i];

  if (!isVoyelle($lettre)) {
    $chaine_reponse = $chaine_reponse . $lettre;
  }
  }

return($chaine_reponse);

}


/*----------------------------------------------------------------------------*/

//exercice 3
