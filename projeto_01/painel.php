<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Painel</title>
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
        .button-container {
            margin-top: 40px;
        }
        a {
            text-decoration: none;
            color: #fff;
            background-color: #4CAF50;
            padding: 12px 32px;
            border-radius: 8px;
            font-size: 1.2rem;
            font-weight: bold;
            transition: background 0.3s;
            box-shadow: 0 2px 8px rgba(76,175,80,0.08);
        }
        a:hover {
            background-color: #388e3c;
        }
    </style>
</head>
<body>
    <div class="center">
        <h1>Painel de Notas</h1>
        <hr>
        <div class="button-container">
            <a href="nota.php">Cadastrar Nota</a>
        </div>
    </div>
</body>
</html>