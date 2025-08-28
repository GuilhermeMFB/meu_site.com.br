<?php
    $pessoa = ["Nome" => "João", "Idade" => 30];
    echo $pessoa["Nome"];

?>
<p> Olá aqui é um HTML</p>
<?php
    $aluno=["Nome" => "Guilherme", "Idade" => 16, "Nota" => 100];
    echo ("Olá " . $aluno["Nome"] . ", você tem " . $aluno["Idade"] . " anos, sua nota é " . $aluno["Nota"] . ", ");
    $ano= ["idade" => 2025-$aluno["Idade"]];
    echo (" E você nasceu em " . $ano["idade"] . ".");

    $hoje = date("Y");
    echo ("<p>Estamos em " . $hoje . ".</p>");

    $dia = date (' j ');
    echo ("<p>Hoje é " . $dia . " de " . date('F') . " de " . $hoje . ".</p>");
    $horas = date('H:i');
     echo ("<p>Agora são " . $horas . ".</p>");

    //Olá Guilherme, você tem 16 anos e sua nota é 100

?>