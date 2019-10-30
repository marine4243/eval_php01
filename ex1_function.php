<?php

function isVoyelle ($lettre) {

   if (($lettre == 'a')||($lettre == 'e')||($lettre == 'i')||($lettre == 'o')
   ||($lettre == 'u')||($lettre == 'y')||($lettre == 'A')||($lettre == 'E')
   ||($lettre == 'I')||($lettre == 'O')
   ||($lettre == 'U')||($lettre == 'Y')) {

       echo $lettre." True";

   } else {

       echo $lettre." False";
   }
}
