<link rel="stylesheet" href="public/css/style.css">

<p class="titre"> Exo6. Traduire ce code avec des if et des else :

    <?php
    echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
    ?>


<p class="exo">
    <?php
    $age = 18 ;

    if ($age >= 18) {
        echo "Tu es majeur !!!";
    } else {
        echo "Tu n'es pas majeur !!! ";
    }

    ?>

</p>