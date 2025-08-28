<?php
    $n1 = $_POST['numero'];

    function parOuImpar($numero) {
        if ($numero % 2 == 0) {
            return "Par";
        } else {
            return "Ímpar";
        }
    }

    echo "O número $n1 é " . parOuImpar($n1);

?>
