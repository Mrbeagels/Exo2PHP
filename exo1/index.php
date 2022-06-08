<link rel="stylesheet" href="public/assets/css/style.css">

<p class="titre"> Exo1. Créer une variable age et l'initialiser avec une valeur.
    Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.</p>

<p class="exo">
    <?php
    $age = 19;
    if ($age === 0) {
        echo "bro, tu n'existes pas ?????!!??";
    }
    elseif ($age <= 17) {
        echo "Vous êtes mineur.";
    }else {
        echo "Vous êtes majeur.";
    }

    ?> </p>