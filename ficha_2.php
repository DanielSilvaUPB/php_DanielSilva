<?php


function retangulo($altura)
{
for($i=1;$i <=$altura;$i++)
    echo"*********<br>";
}

echo"GRUPO I";
echo"<br><br>EXERCICIO 1<br><br>";
retangulo(5);

echo"<br>EXERCICIO 2<br><br>";

function trocar($a,$b)
{
    echo "Recebi em A=$a e em B=$b.";

    $aux =$a;
    $a = $b;
    $b = $aux;

    echo "<br>Depois de trocar A=$a e B=$b.";
}
trocar(5,7);

echo"<br><br>EXERCICIO 3<br>";

echo"<br>Grupo II<br>";
echo"<br>Exercicio 1<br><br>";

function invertida($string)
{
    $tamanho=strlen($string);

    for($i=$tamanho-1;$i>=00;$i--)
        echo $string[$i];
}

invertida("David");

echo"<br><br>GRUPO 3<br>";
echo"<br>EXERCICIO 1<br><br>";

$vetor=array(1,2,3,4,5,6,7);

echo "O valor mínimo é ".min($vetor);

$media= array_sum($vetor)/7;

echo "<br>O valor médio é ".$media;

~$somap=0;$soman=0;

foreach($vetor as $p)
{
    if($p>0)
        $somap=$somap+$p;
    if($p<0)
        $soman=$soman+$p;
}

echo"<br>Soma dos positivos:".$somap;
echo"<br>Soma dos negativos:".$soman;

echo"<br>EXERCICIO 2<br><br>";

$chave=array();
for($t=0;$t<=5;$t++)
{
    $num=rand(1,50);

    if(in_array($num,$chave)==0){
        $chave[$t]=$num;echo($chave[$t] .", ");
    }else{
        $t--;
    }
}

echo"<br><br>EXERCICIO 3<br><br>";

$cavalos=array("Flash"=>88,"Faísca"=>28,"Foguetão"=>18,"Docinho"=>8,"Pipoca"=>36,"Bolinhas"=>12,"Martim"=>98,"Slug"=>108,"Craque"=>58,"Vinho do Porto"=>18);
asort($cavalos); $y=1;
foreach($cavalos as $chave=>$valor)
    if($y==1)
{echo "O vencedor é: $chave com $valor segundos.";break;}

?>