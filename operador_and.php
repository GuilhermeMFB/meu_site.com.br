<?php
    $idade = 17;
    $TemCarteira = true;

    if ($idade >= 18 && $TemCarteira) {
        echo "Você tem $idade anos, então pode dirigir.";
    } else {
        echo "Você não pode dirigir pois tem $idade anos, que é menor que 18.";
    }

?>