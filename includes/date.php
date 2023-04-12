<?php

// Date en français
$jour = getdate();
$semaine = array(" Dimanche ", " Lundi ", " Mardi ", " Mercredi ", " Jeudi ",
    " vendredi ", " samedi ");
$mois = array(1 => " janvier ", " février ", " mars ", " avril ", " mai ", " juin ",
    " juillet ", " août ", " septembre ", " octobre ", " novembre ", " décembre ");
// Avec getdate()
echo "Page chargée le ", $semaine[$jour['wday']]
, $jour['mday'], $mois[$jour['mon']], $jour['year'], " a
", date("H:i");
