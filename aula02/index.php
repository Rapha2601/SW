<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA02</title>
</head>
<body>
<h1>AULA02 PHP + HTML<h1>
    
    <?php
        $nome = "Raphael";
        echo "<p style='color: red';>Bem-vindo...$nome</p>";
        //Laços de repetição - Contar de 1 a 5
        
        echo "<ul>";
        for ($i=1; $i <=5 ; $i++) { 
            
            echo "<li> $i </li>";
        } 
        echo "</ul>";
    ?>

</body>
</html>
