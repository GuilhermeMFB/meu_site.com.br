<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(120deg, #e0f7fa 0%, #74ebd5 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
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
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px 14px;
            margin: 10px 0;
            border: 1px solid #b2dfdb;
            border-radius: 8px;
            font-size: 1rem;
        }
        input[type="submit"] {
            padding: 12px 28px;
            border: none;
            border-radius: 8px;
            background-color: #4CAF50;
            color: white;
            font-size: 1.1rem;
            cursor: pointer;
            margin-top: 10px;
            transition: background 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #388e3c;
        }
        p {
            color: #555;
            margin-top: 15px;
        }
        .msg {
            color: #ff4500;
            margin-bottom: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>🔒 Login do Sistema</h1>
        <?php if (isset($_GET['msg'])): ?>
            <div class="msg"><?php echo htmlspecialchars(urldecode($_GET['msg'])); ?></div>
        <?php endif; ?>
        <form action="login.php" method="post">
            <input type="text" id="usuario" name="usuario" placeholder="Usuário" required>
            <input type="password" id="senha" name="senha" placeholder="Senha" required>
            <input type="submit" value="Entrar">
        </form>
        <p>Informe seu usuário e senha para acessar o painel</p>
    </div>
</body>
</html>