<?php
    $numero1 = 10;
    $numero2 = 3;
    $resto = $numero1 % $numero2;
    $divisao02 = $numero1 / $numero2;

    echo number_format($divisao02, 2) . "<br>";
//-------------------------------------------
    echo $resto . "<br>"; //Saida: 1 (pois 10 dividido por 3 tem resto 1)
//-------------------------------------------
    echo "O resto da divisão de " . $numero1 . " por " . $numero2 . " é: " . $resto . "<br>";
//-------------------------------------------

?>