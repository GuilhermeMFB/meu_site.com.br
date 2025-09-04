<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Nota</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(120deg, #e0f7fa 0%, #74ebd5 100%);
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffffcc;
            padding: 32px 40px;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.18);
            text-align: center;
        }
        h1 {
            margin-bottom: 18px;
            color: #4CAF50;
            font-size: 2.2rem;
        }
        form {
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            padding: 10px;
        }
        input[type="text"], input[type="number"] {
            width: 95%;
            padding: 10px 12px;
            border-radius: 8px;
            border: 1px solid #b2dfdb;
            font-size: 1rem;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 12px 32px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.1rem;
            transition: background 0.3s;
            margin-top: 10px;
        }
        input[type="submit"]:hover {
            background-color: #388e3c;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #fff;
            background-color: #ff4500;
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
    <div class="container">
        <h1>📄 Cadastro de Nota</h1>
        <form action="calcula_nota.php" method="post">
            <table>
                <tr>
                    <td><label for="disciplina">Disciplina:</label></td>
                    <td><input type="text" id="disciplina" name="disciplina" required></td>
                </tr>
                <tr>
                    <td><label for="nota">Nota:</label></td>
                    <td><input type="number" id="nota" name="nota" step="0.01" min="0" max="10" required></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="Calcular Resultado">
                    </td>
                </tr>
            </table>
        </form>
        <a href="painel.php">← Voltar ao Painel</a>
    </div>
</body>
</html>