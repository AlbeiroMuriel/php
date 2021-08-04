<?php
    // Variables PHP es un lenguaje NO TIPADO  
    $nombre = '<p>Albeiro Muriel</p>';
    echo $nombre;
    $salario = 2800000;
    echo '<p>su "Salario": '.$salario.'</p>';
    $vlrdia = $salario / 30;
    echo 'su valor del dia:' .$vlrdia. '</p>';    
    $hora = $vlrdia / 8;
    echo '<p> su día vale : ' .   $vlrdia  . ' su hora vale: ' .$hora.  '</p>' ;
    /* condicionales IF
    if (condicion)
    {valor lado verdadero}
    else
    {valor lado falso}
    */
    // Si el salario es mayor de 2 millones retener el 5%, sino sumar el 5%
    $porc= $salario*5/100;
  
    if($salario>2000000){      
        $salario=$salario-$porc;
        echo 'su salario es : ' . $salario . 'porque se le retuvo' .$porc ;
    }
    else{
       $salario=$salario+$porc;
       echo 'su salario es : ' . $salario . 'porque se le sumo' .$porc ;
    }
?>