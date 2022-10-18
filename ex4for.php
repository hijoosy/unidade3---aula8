<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><!--Ler um valor N e imprimir todos os valores inteiros entre 1 (inclusive) e N (inclusive).
 Considere que o N será sempre maior que ZERO.-->
    

    <form action="ex4for.php" method= "get">
    Digite um valor:
    <input type="number" name="numero"/>
    <br/></br>
    <input type="submit" value="verificar"/>
    <br/></br>
    </form>

    <?php
    if(isset($_GET["numero"])) {
    $numero = $_GET ["numero"];
    for ($i=1; $i <= $numero; $i++) { 
        echo $i. ", ";
    }
    }





  ?>



</body>
</html>