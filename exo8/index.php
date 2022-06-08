<link rel="stylesheet" href="public/css/style.css">

<p class="titre"> Exo8.Traduire ce code avec des if et des else :  

<?php
  echo ($isOk) ? 'c\'est ok !!' : 'c\'est pas bon !!!';

?>


<p class="exo">
    <?php
    $isOk = true ;

    if ($isOk == 1) {
        echo "C'est ok  !!!";
    } else {
        echo "C'est pas bon  !!! ";
    }

    ?>

</p>