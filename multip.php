<?php
    if(isset($_POST['nroMul'])){
        $nro = $_POST['nroMul'];
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