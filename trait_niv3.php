<?php
    session_start();
     $_SESSION['nombre']=$_POST['numeric1'];
    //echo $_SESSION['nombre'];
    $_SESSION['aleatoire']=rand(1,10);
    $_SESSION['solution'] = $_SESSION['aleatoire'] * $_SESSION['nombre'];
//    echo $_SESSION['solution'];
    

?>
<div class="jumbotron">
<h1>Questionnaire</h1>
<h1>
<?php 
   echo "<br> Combien vaut:".$_SESSION['aleatoire']."X".$_SESSION['nombre'];
 
?>
</h1>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
       crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<form action="resultat.php" method="post">
<div class="container">
<input type="number" name="question" id="" class="form-control" style="width:400px;">
<input type="submit" value="voir votre resultat" class="btn btn-success" style="position:relative;top:10px;">
</div>
</div>
</form>
<?php
    $_SESSION['question']=$_POST['question'];
?>