<?php
    session_start();
     $_SESSION['nombre'];
      $_SESSION['aleatoire'];
    $_SESSION['solution'] = $_SESSION['aleatoire'] * $_SESSION['nombre'];
    $solution=$_SESSION['solution'];
    echo $_SESSION['solution'];
    $_SESSION['question']=$_POST['question'];
    $valeur_recup=$_SESSION['question'];
    
    
    if($valeur_recup == $_SESSION['solution'])
    {

    echo "<br>bravo tu as trouve";
    }
    else {
            echo "<br>tu as fausse veillez ressayez svp";
    }
?>