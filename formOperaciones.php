<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formOperaciones.php" method ="POST">
        <h1>OPERACIONES MATEMTICAS</h1>
        <label for="nr1">Digite un nro</label>
        <input type="number" step=any name="nr1"><br> <br>

        <label for="nr2">Digite un nro</label>
        <input type="number" step=any name="nr2"><br><br>

        <button type="Submit" name="btnCalcular">Calcular</button>    
    </form>

    <?php
    // aca comienza mi codigo php

    if(isset($_POST["btnCalcular"])){
        $nro1 =$_POST["nr1"];
        $nro2 =$_POST["nr2"];
        $suma = $nro1 + $nro2;
        $resta = $nro1 - $nro2;
        $multp = $nro1 * $nro2;
        
        echo "<br>La Suma = ".$suma;
        echo "<br>La Resta = ".$resta; 
        echo "<br>Multiplicación = ".$multp;
        //Validando... para que no ocurra un error
        if ($nro2== 0)
        {
            echo "<br>no se puede dividir por cero....";
        }
        else{
            $div = $nro1 / $nro2;
            echo "<br>División = ".$div;
        }        
    }
    ?>
</body>
</html>