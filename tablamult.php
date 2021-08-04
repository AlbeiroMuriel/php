<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/multip.css">
    <title>Document</title>
</head>
<body>
    <nav><h1>TABLA DE MULTIPLICAR</h1></nav>
    <main>
        <form action="tablamult.php" method = "GET">
            <input type="number" name="nroMul" id="nroMul" required>
            <input type="submit" value="Multiplicar">
        </form>

        <?php
            if(isset($_GET['nroMul'])){
                $nro = $_GET['nroMul'];
                echo "<table border='1'> <br>";
                echo "<p> Tabla del Nro $nro </p>";

                for($i=1; $i<=10; $i++){
                    $resultado = $i*$nro;
                    echo "<tr>";
                        echo "<td> $i </td>";
                        echo "<td>  *  </td>";
                        echo "<td> $nro </td>";
                        echo "<td> $resultado </td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
        ?>
    </main>    
</body>
</html>