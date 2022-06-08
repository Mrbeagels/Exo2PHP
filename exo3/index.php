<link rel="stylesheet" href="public/css/style.css">

<p class="titre"> Exo3. Créer deux variables age et gender. La variable gender peut prendre comme valeur :
Homme
Femme

En fonction de l'âge et du genre afficher la phrase correspondante :
Vous êtes un homme et vous êtes majeur
Vous êtes un homme et vous êtes mineur
Vous êtes une femme et vous êtes majeure
Vous êtes une femme et vous êtes mineur 

Gérer tous les cas. </p>

    <p class="exo">
    <?php
    $age = 19;
    $gender = false;

    if($age >= 18 && $gender == 1) {
        echo "Vous êtes un homme majeur";
    }
    if ($age >= 18 && $gender == 0){
        echo "Vous êtes une femme majeure";
    }
    if($age < 18 && $gender == 1) {
        echo "Vous êtes un homme mineur";
    }
    if($age < 18 && $gender == 0) {
        echo "Vous êtes une femme mineure";
    }
    
    ?>

</p>