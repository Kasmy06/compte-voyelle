<?php
    $nom = "kouadio amani samuel";
    
    //calcule le nombre de caractères de la variable nom
    $max = strlen($nom);

    //compte le nombre de voyelles contenu dansla chaine nom
    $nombre_voyelles = preg_match_all('/[AEIOUY]/i',$nom);
    // declaration d'une constante 15
    define("constt",15);

        if ($max <= 15) {
            echo "Erreur";
            echo $max;
        } else 
            echo "Votre nom comporte $nombre_voyelles voyelles.<br/>";
?>