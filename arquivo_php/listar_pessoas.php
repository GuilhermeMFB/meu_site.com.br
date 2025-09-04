<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="listar_pessoas.php"method="post">
        <label>Nome da pessoa a ser antendida</label>
        <input type="text" name="CLIENTE">>
        <input type="submit" value="Atender">
    </form>
    <?php
    $nome_atendimento = $_POST ['CLIENTE'] ?? '';
   $arquivo = fopen("atendimento.txt", "a"); 
    fwrite($arquivo, "Primeira linha de texto\n");
    fclose($arquivo);
    //listar os nomes cadastrados no arquivo.txt
        $arquivo = fopen("atendimento.txt", "r"); 
    while(!feof($arquivo)) {
        echo fgets($arquivo) . "<br>";
    }
    fclose($arquivo);
?>


    ?>
</body>
</html>