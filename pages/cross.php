<!DOCTYPE html>
<!-- 
     Page web créé dans le cadre du cours de web Dev le 01/09/2018
     Auteur : José GIL
     Email : jgil83000@gmail.com
-->

<html lang="fr-FR">
    <head>
        <title>Casques Nolark : Sécurité et confort, nos priorités !</title>
        <meta charset="UTF-8">
        <meta name="author" content="José GIL">
        <meta name="description" content="Découvrez des casques moto dépassant même les exigences des tests de sécurité. Tous les casques Nolark au meilleur prix et avec en prime la livraison gratuite !">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/styles.css" rel="stylesheet" type="text/css">
        <link href="../css/casques.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="../favicon.ico">
    </head>
    <body>
        <header>
            <picture>
                <source media="(max-width: 576px)" srcset="../images/banniere_small.png">
                <source srcset="../images/banniere.png">
                <img src="../images/banniere.png" alt="Nolark : Protect your minds ! Cette bannière montre un 
                     coucher de soleil avec une femme embrassant un homme réalisant en stoppie sur sa
                     moto.">
                <!-- Image basée sur la création originale de ShiftGraphiX sur Pixabay : 
                    https://pixabay.com/fr/couple-stoppie-sportive-vélomoteur-3156613/ -->
            </picture>
            <nav>
                <input type="checkbox">
                <span></span>
                <span></span>
                <span></span>
                <ul>
                    <?php
                    require '../includes/lienspages.inc.php';
                    linkOther();
                    ?>
                </ul>
            </nav>
        </header>
            <?php include('../includes/casques.inc'); 
            casqueAffichage(1)?>
        <footer>
            <p>&copy;2018 Nolark - Créé par <a href="mailto:jose.gil@ac-nice.fr">José GIL</a><p>
        </footer>
    </body>
</html>
