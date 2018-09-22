<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color:aqua;">
<div class="container">
<div class="jumbotron">
<h1>Bienvenu sur notre plateform </h1>
<p>Pour reviser votre table de mulitplication veillez cliquez sur cetteb bouton.</p>
<p><a class="btn btn-primary btn-lg" role="button" href="niveau1.php">
apprendre la table de multiplication</a>
</p>
</div>
</div>
<form action="trait_niv3.php" method="post" style="position:relative;top:100px;left:400px;">
  <input type="number" name="numeric1" class="form-control" id="name" placeholder="donner un chiffre"style="width:500px;">
  <input type="submit" value="afficher" class="btn btn-default" style="position:relative;top:10px;">
</form>
    <?php
     $_SESSION['nombre']=$_POST['numeric1'];
     if(isset($_SESSION['nombre']))
     {
       echo "test".$_SESSION['nombre'];
     }
    ?>
</body>
</html>