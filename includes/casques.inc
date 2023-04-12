<?php

/**
 * Méthode principale, gère l'affichage des casques selon le type passé en
 * paramètre
 * @param type $type
 */
function casqueAffichage($type){
    $cnx = new PDO('mysql:host=127.0.0.1;port=3307;dbname=nolark', 'nolarkuser', 'nolarkpwd');

    $req = 'SELECT casque.id, nom, modele, libelle, prix, classement, image, stock, marque';
    $req .= ' FROM casque INNER JOIN type ON casque.type=type.id';
    $req .= ' INNER JOIN marque ON casque.marque=marque.id';
    $req .= (string)(sprintf(' WHERE type.id = %s', $type));

    $res = $cnx->query($req);

    echo '<section id="casques">';
    while ($ligne = $res->fetch(PDO::FETCH_OBJ)) {
     echo '<article>';

     echo '<img src="../images/casques/', $ligne->libelle, '/', $ligne->image,
     '" alt="', $ligne->modele, '">';

     echo '<p class="', stockcolor($ligne->stock), '"><abbr data-tip="', stockcalc($ligne->stock), '">stock</abbr></p>';
     echo '<p class="prix">', $ligne->prix, '€', '</p>';
     echo '<p class="marque">', $ligne->nom, '</p>';
     echo '<p class="modele">', $ligne->modele, '</p>';
     echo '<img class="classement classement', $ligne->classement, '" src="../images/casques/etoiles.gif" alt="Classement', $ligne->classement, 'sur 5">';

     echo '</article>';
    }
    echo '</section>';
}

/**
 * Renvoie une chaîne de caractères indiquant le nombre de casques disponibles
 * @param type $stock
 * @return string
 */
function stockcalc($stock){
    if($stock < 0){
        return 'Sur commande uniquement';
    }
    else if($stock == 0){
        return 'Indisponible';
    }
    else if($stock <= 10){
        if($stock >1){
            echo 'plus que ', $stock, ' casques en stock';
        }
        else{
            echo "plus qu'un casque en stock";
        }
    }
    else if($stock > 10){
        echo $stock, ' casques en stock';
    }
}

/**
 * Change la couleur du carré "Stock" selon le stock disponible
 * @param type $stock
 */
function stockcolor($stock){
    if($stock <=0){
        echo 'stockko';
    }
    else {
        echo 'stockok';
    }
}