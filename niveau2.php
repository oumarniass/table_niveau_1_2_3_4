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
<div class=container >
<div class=class="alert alert-info">
<h1>Table de multiplication</h1>
    <h2>veillez choisr la table que voulez afficher</h2>
    <form action="niveau2.php" method="post">
    <label><input type="checkbox" name="check_0" class="checkbox" /> Table de 0</label>
			<label><input type="checkbox" class="checkbox" name="check_1" value="1" class="checkbox" /> Table de 1</label>
			<label><input type="checkbox" name="check_2" value="2" class="checkbox" /> Table de 2</label>
			<label><input type="checkbox" name="check_3" value="3" class="checkbox" /> Table de 3</label>
			<label><input type="checkbox" name="check_4" value="4" class="checkbox" /> Table de 4</label>
			<label><input type="checkbox" name="check_5" value="5" class="checkbox" /> Table de 5</label>
		
        <br> <br>
        	<label><input type="checkbox" name="check_6" value="6" class="checkbox" /> Table de 6</label>
			<label><input type="checkbox" name="check_7" value="7" class="checkbox" /> Table de 7</label>
			<label><input type="checkbox" name="check_8" value="8" class="checkbox" /> Table de 8</label>
			<label><input type="checkbox" name="check_9" value="9" class="checkbox" /> Table de 9</label>
			<label><input type="checkbox" name="check_10" value="10" class="checkbox" /> Table de 10</label>
            <br>
            <input type="submit" value="affichez la table" class="btn btn-success">
            </div>

<div class="alert alert-warning">

<h1>la table de multiplication</h1>
            <?php
            for($i=0;$i<=10;$i++)
            {
                $table =$_POST['check_'.$i];
                if(isset($table))
                {
                echo "<br>la table de multiplication de".$table;
                
                for($j=0;$j<=10;$j++)
                {
                    echo "<br>".$table."X".$j."=".$table*$j;
                }
                }
            }
            ?>
            </div>
