<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>Venta de HardWare</title>
</head>
<body>
    <?php
        //Array asociativo.
        //key => valor

        $Hardware = array(
            "torre01"=>array("nombreP"=>"ATX GAMER AEROCOOL CYLON", "precio"=>255000, "img"=>"https://res.cloudinary.com/cdnco/image/upload/b_white,c_pad,g_center,h_435,q_90,w_635/v1/omarberrio/imgs/c8e3DdCK7frDKhjo4jCW8FcL.jpg","Descripcion"=>"Cylon Tempered Glass es una caja de media torre con un panel lateral de vidrio templado completo y soporte de refrigeración líquida. Su panel frontal LED RGB con barra invertida"),
            
            "torre02"=>array("nombreP"=>"CAJA ATX ICEBERG GLACIUS", "precio"=>480000, "img"=>"https://res.cloudinary.com/cdnco/image/upload/b_white,c_pad,g_center,h_435,q_90,w_635/v1/omarberrio/imgs/rjGuu9CCX9y7YT1mK4946oW6.jpg","Descripcion"=>"GLACIUS es un chasis gamer compacto y minimalista que se hace ideal para transportarse donde tus amigos o eventos Lan. Esta torre soporta Boards ATX. Aunque tiene un tamaño pequeño, "),
            
            
            "torre03"=>array("nombreP"=>"ATX ICEBERG SPIDER VIDRIO", "precio"=>359000, "img"=>"https://res.cloudinary.com/cdnco/image/upload/b_white,c_pad,g_center,h_435,q_90,w_635/v1/omarberrio/imgs/ATa6v7DCCWvYgUAfdrfq2F2u.jpg","Descripcion"=>"Gabinete para Computador Gamer Iceberg Spider con seis 6 ventiladores de 120mm Iceberg Eklipse Rojo con iluminación de anillo - Vidrio Templado Lateral y espacio separado para fuente"),

            "torre04"=>array("nombreP"=>"ATX ICEBERTG TURBO Z8", "precio"=>359000, "img"=>"https://res.cloudinary.com/cdnco/image/upload/b_white,c_pad,g_center,h_435,q_90,w_635/v1/omarberrio/imgs/C4f6Tf79tSSu4RFpnTYQLfEm.jpg","Descripcion"=>"Gabinete 
            para Computador Gamer Iceberg Spider con seis 6 ventiladores de 120mm Iceberg Eklipse Rojo con iluminación de anillo - 
            Vidrio Templado Lateral y espacio separado para fuente")
        );          
    ?>

    <div class="container">
        <div class="row row-cols-md-3 g-4">    
        
            <?php foreach($Hardware as $indice):?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo($indice["img"])?>" class="card-img-top" alt="foto">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo($indice["nombreP"]) ?></h5>                            
                            <h5 class="card-text"> <?php echo($indice ["precio"]) ?></h5>
                            <p class="card-text"><?php echo($indice ["Descripcion"])?></p>                            
                        </div>    
                    </div>
                </div> 
            <?php endforeach ?> 
        </div>          
              
                                                                     
         
    
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>  
</body>
</html>