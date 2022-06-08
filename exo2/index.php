<link rel="stylesheet" href="public/assets/css/style.css">

<p class="titre"> Exo2. Créer une variable isEasy de type booléan et l'initialiser avec une valeur.  
    Afficher C'est facile !! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!. 
    
    Bonus : L'écrire de deux manières différentes.</p>

<p class="exo">
    <?php
    $isEasy = true;
    if ($isEasy == 1) {
        echo "C'est difficile";
    }
    else {
        echo "C'est facile";
    }

    ?>

</p>

