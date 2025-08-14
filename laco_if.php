<?php
    $resposta ="sim";
    $pergunta ="Sua mãe deixou você ir ao MCdonald?";

    if($resposta == "sim"){
    echo "o rolê ta on";
    }else{
         echo"Hoje não terá rolê";
    }

    echo "<br>";

    $numero1 = 100;
    $numero2 = 200;

    if ($numero1 > $numero2) {
        echo "O $numero1 é maior que o $numero2";
    } elseif ($numero1 < $numero2) {
        echo "O $numero1 é menor que o $numero2";
    } else {
        echo "Os números são iguais";
    }

    ?>