<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">

    <title>Reserva</title>
</head>
<body>
<header><h1 class="text-center">HOTEL EN SUEÑOS</h1></header>
<main>
    <div class="container">
        <form action="reservaHotel.php" method="POST">
            <label for="">Fecha de Ingreso</label><br>
            <input type="date"> <br>
            <label for="">Nro Días</label><br>
            <input type="number" name="nroDias" ><br>
            <label for="">Nro de Personas</label><br>
            <input type="number" name="nroPers" id=""><br>
            <label for="">Valor Persona</label><br>
            <input type="number" name="vlrPers" id=""><br><br>
            <button type="submit" name="btnCalcular" class="btn btn-primary">Calcular Hospedaje</button><br>            
            <?php
                if(isset($_POST["btnCalcular"]))
                {
                    $dias=$_POST["nroDias"];
                    $personas = $_POST["nroPers"];
                    $valorPer = $_POST["vlrPers"];
                    $total = $dias * $personas * $valorPer;
                    echo "Las cotización de ".$dias. " días, para ". $personas. " personas Tiene un valor día de ".$valorPer. " y El total a pagar es de ".$total;
                }
            ?>
        </form>
    </div>

    

</main>
<footer></footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>