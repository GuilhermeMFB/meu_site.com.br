<?php
    $Feriado = false;
    $FimDeSemana = true;

    if ($Feriado || $FimDeSemana) {
        echo "Você pode descansar.";
    } else {
        echo "Você não pode descansar, é dia útil e não é feriado.";
    }

?>