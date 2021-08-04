<?php 
    // Vectores o Arrays
    // Un vector es una variable, que puede contener varios elementos dentro de ella.
    // Un array debe tener nombre y nro de elementos, el primer elemento de un vector es el cero

    $Estudiantes = array('Sneider','Alexandra','Didier','Johana','Juan','Yesenia','Alejandro');

    // ver el dato de la posición de un elemento.
    echo ($Estudiantes[3].'<br>'); 
    echo ($Estudiantes[6]);

    echo ('<br>El Tamaño del verctor es de '.count($Estudiantes));

    

    //insertar dato nuevo, lo hace al final del vector
    $Estudiantes[]='Yuliana';
    $Estudiantes[0]='Alejandro Lopez'; //sobre escribe el dato

    // ordenar el vector
    sort($Estudiantes);


    echo '<br>**** Listado de Estudiantes *******<br>';
    for ($i=0; $i<count($Estudiantes); $i++)
    {
        echo ('<p>'.$i + 1 . ' '. $Estudiantes[$i].'</p>');        
    }
    echo in_array('Yesenia', $Estudiantes). 'Si ve el numero 1 es porque el dato existe, sino ve ningún nro, el datos no existe';
    //var_dump($Estudiantes);
?>