<?php
// filepath: c:\xampp\htdocs\meu_site.com.br\projeto_01\calcula_nota.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $disciplina = $_POST['disciplina'];
    $nota = floatval($_POST['nota']);
    if ($nota >= 7) {
        $resultado = "Aprovado ✅";
        $cor = "#32cd32"; // verde
    } elseif ($nota >= 5) {
        $resultado = "Recuperação ⚠️";
        $cor = "#ffa500"; // laranja
    } else {
        $resultado = "Reprovado ❌";
        $cor = "#ff4500"; // vermelho
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(120deg, #e0f7fa 0%, #74ebd5 100%);
            color: #333;
            line-height: 1.6;
            margin: 0;
        }
        .center {
            text-align: center;
            margin-top: 80px;
        }
        h1 {
            color: #4CAF50;
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        hr {
            border: 0;
            height: 2px;
            background-color: #b2dfdb;
            margin: 20px auto;
            width: 50%;
        }
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #ffffffcc;
            box-shadow: 0 2px 8px rgba(76,175,80,0.08);
            border-radius: 12px;
        }
        td {
            padding: 14px;
            text-align: left;
            font-size: 1.1rem;
        }
        td strong {
            color: #333;
        }
        .status {
            font-weight: bold;
            font-size: 1.2rem;
        }
        a {
            text-decoration: none;
            color: #fff;
            background-color: #ff4500;
            font-size: 1.1rem;
            display: block;
            text-align: center;
            margin-top: 30px;
            padding: 10px 28px;
            border-radius: 8px;
            font-weight: bold;
            transition: background 0.3s;
        }
        a:hover {
            background-color: #e60000;
        }
    </style>
</head>
<body>
    <div class="center">
        <h1>Resultado da Nota</h1>
        <hr>
        <table border="0">
            <tr>
                <td><strong>Disciplina:</strong></td>
                <td><?php echo htmlspecialchars($disciplina); ?></td>
            </tr>
            <tr>
                <td><strong>Nota:</strong></td>
                <td><?php echo number_format($nota, 2); ?></td>
            </tr>
            <tr>
                <td><strong>Status:</strong></td>
                <td><span class="status" style="color:<?php echo $cor; ?>"><strong><?php echo $resultado; ?></strong></span></td>
            </tr>
        </table>
        <a href="painel.php">Voltar ao Painel</a>
    </div>
</body>
</html>