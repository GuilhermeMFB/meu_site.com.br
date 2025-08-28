<?php
//echo $_GET['nome];
$valor1= $_POST['valor1'];
$valor2= $_POST['valor2'];
$sinal= $_POST['sinal'];

//$resultado = $valor1.$sinal.$valor2;
//echo $resultado;
//o sinal de + tem o papel de preencher espaço na URL, para
//testarmos teremos que colocar em hexadecilam : sinal=%2b
if($sinal == '*'){
    echo $valor1 * $valor2;
}
if($sinal == '+'){
    echo $valor1 + $valor2;
}
if($sinal == '/'){
    echo $valor1 / $valor2;
}
if($sinal == '-'){
    echo $valor1 - $valor2;
}
//teste
//meu_site.com.br/get.php?valor1=15&valor2=33&sinal=*