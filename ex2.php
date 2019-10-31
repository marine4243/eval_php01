<?php
require_once("function.php");

$chaine_test  ="bonjour";
echo "chaine ".$chaine_test." = ".supprimerVoyelles($chaine_test)."\n";

$chaine_test  ="hello world";
echo "chaine ".$chaine_test." = ".supprimerVoyelles($chaine_test)."\n";

$chaine_test  ="eau";
echo "chaine " .$chaine_test." = ".supprimerVoyelles($chaine_test)."\n";

$chaine_test  ="0";
echo "chaine ".$chaine_test." = ".supprimerVoyelles($chaine_test)."\n";

$chaine_test  ="1";
echo "chaine ".$chaine_test." = ".supprimerVoyelles($chaine_test)."\n";

$chaine_test  ="2";
echo "chaine ".$chaine_test." = ".supprimerVoyelles($chaine_test)."\n";

$chaine_test  ="42";
echo "chaine ".$chaine_test." = ".supprimerVoyelles($chaine_test)."\n";

$chaine_test  ="true";
echo "chaine ".$chaine_test." = ".supprimerVoyelles($chaine_test)."\n";

$chaine_test  ="false";
echo "chaine ".$chaine_test." = ".supprimerVoyelles($chaine_test)."\n";
