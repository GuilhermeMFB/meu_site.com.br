<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio da Rifa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>🎉 Rifa do GB 🎉</h1>

        <form method="POST" action="">
            <label for="premio">Digite o prêmio:</label>
            <input type="text" name="premio" id="premio" placeholder="Ex: Smart TV 50''" required>

            <button type="submit" name="sortear">Sortear</button>
        </form>

        <?php
        date_default_timezone_set('America/Sao_Paulo');
        echo "<p class='data'>🕒 Data e hora: " . date('d/m/Y H:i:s') . "</p>";

        if (isset($_POST['sortear'])) {
            $premio = htmlspecialchars($_POST['premio']);
            $numeroSorteado = rand(1, 1000);

            echo "<div class='resultado'>";
            echo "<h2>🏆 Prêmio: <span>$premio</span></h2>";
            echo "<h3>🎫 Número sorteado: <span>$numeroSorteado</span></h3>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
