<link rel="stylesheet" href="public/css/style.css">

<p class="titre"> Exo5. Traduire ce code avec des if et des else : 

<?php
echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';


?> </p>


    <p class="exo">
    <?php
$gender = 'femme';

if($gender != "Homme"){
    echo "C'est une développeuse !!!";
}
else {
    echo "C'est un développeur !!! ";
}

    ?>

</p>