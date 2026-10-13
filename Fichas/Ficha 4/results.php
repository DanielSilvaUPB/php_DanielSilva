<?php
    echo"<h2>Listagem de Resultados</h2>";
    $n=$_POST['nome'];
    echo"Nome: $n<br>";
    $a=$_POST['apelido'];
    echo"Apelido: $a<br>";
    $aluno=$_POST['aluno'];
    echo"Aluno do CTESP de Informática? $aluno<br>";
    $i=$_POST['idade'];
    echo"Idade: $i<br>";
    $l=$_POST['localidade'];
    echo"Localidade: $l<br>";
    $s=$_POST['sugestoes'];
    echo"Sugestões: $s<br>";
?>