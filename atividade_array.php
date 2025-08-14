<?php
    $Frutas = [
        "Maçã,",
        "Pera,",
        "Morango,",
        "Banana,",
        "Limão,",
        "Laranja,"
    ];

    for ($i = 0; $i < 6; $i++) {
        echo $Frutas[$i] . " Número: " . ($i + 1) . "<br>";
    }
?>