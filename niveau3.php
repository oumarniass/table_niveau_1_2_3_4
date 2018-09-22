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
<form action="niveau3.php" method="post" style="position:relative;top:100px;left:400px;">
  <input type="number" class="form-control" id="name" placeholder="donner un chiffre"style="width:500px;">
</form>
    <?php
      
    ?>
</body>
</html>