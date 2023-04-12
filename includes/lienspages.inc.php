<?php

function linkIndex() {
    $pages = array("index.php", "pages/route.php", "pages/cross.php", "pages/piste.php", "pages/enfants.php", "pages/nous-contacter.php");
    $noms = array("Accueil", "Route", "Cross", "Piste", "Enfants", "Nous contacter");
    $nbLiens = count($pages);
    for ($i = 0; $i < $nbLiens; $i++) {
        if ($pages === "index.php") {
            echo '<li><a href=',$pages[$i],'>', $noms[$i], '</a></li>';
        } else {
            echo '<li><a href="', $pages[$i], '">', $noms[$i], '</a></li>';
        }
    }
}

function linkOther() {
    $pages = array("../index.php", "route.php", "cross.php", "piste.php", "enfants.php", "nous-contacter.php");
    $noms = array("Accueil", "Route", "Cross", "Piste", "Enfants", "Nous contacter");
    $nbLiens = count($pages);
    for ($i = 0; $i < $nbLiens; $i++) {
        echo '<li><a href="', $pages[$i], '">', $noms[$i], '</a></li>';
    }
}
