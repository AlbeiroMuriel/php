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
        <form action="multip.php" method = "POST">
            <input type="number" name="nroMul" id="nroMul" required>
            <input type="submit" value="Multiplicando">
        
            <?php
        header('Location: .//tablamultPost.php');
        // exit();
        ?>
               
        </form>
        

    </main>    
</body>
</html>