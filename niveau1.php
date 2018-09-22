<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>table de multiplication</title>
</head>
<body>
<div class=container>
<h1>Table de multiplication</h1>
    <h2>veillez choisr la table que voulez afficher</h2>
    <form action="table_multiplication.php" method="post">
    <select class="form-control" name="table">
                <option value="0">Table de 0</option>
				<option value="1">Table de 1</option>
				<option value="2">Table de 2</option>
				<option value="3">Table de 3</option>
				<option value="4">Table de 4</option>
				<option value="5">Table de 5</option>
				<option value="6">Table de 6</option>
				<option value="7">Table de 7</option>
				<option value="8">Table de 8</option>
				<option value="9">Table de 9</option>
				<option value="10">Table de 10</option>
                </select>
                <input type="submit" value="afficher la table" class="btn btn-success">
</form>


<?php
    $table=$_POST['table'];

    if(isset($table))
    {   
        
          echo "<br>la table de multiplication de:".$table;
        for($i=0;$i<=10;$i++)
        {
          
            echo "<br>".$table."X".$i."=".$table * $i;
        }
    }
?>
</table>

</div>
</body>
</html>
<?php

?>