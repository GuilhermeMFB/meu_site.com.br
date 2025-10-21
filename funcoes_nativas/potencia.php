<?php
    $numero = $_POST['numero']; ?? '';
    $potencia = $_POST['potencia']; ?? '';
    $n = 5;
    echo 'Potencia: ' .pow($numero,$potencia 2);
?>

<form method="post">
    <label> digite um numero:</label>
    <input type="text" name="numero">
    <label> digite a potencia a ser elevada: </label>
    <input type="text" name="potencia">
    <input type="submit" value="Calcular">
</form>