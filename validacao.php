<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nota = $_POST['nota'];

    if ($nota >= 7) {
        echo "<h2>Resultado: Aprovado ✅</h2>";
    } elseif ($nota >= 5 && $nota < 7) {
        echo "<h2>Resultado: Recuperação ⚠️</h2>";
    } else {
        echo "<h2>Resultado: Reprovado ❌</h2>";
    }
} else {
    echo "Método de envio inválido.";
}
?>
