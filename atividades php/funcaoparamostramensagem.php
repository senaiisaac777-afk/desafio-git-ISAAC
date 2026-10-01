<?php

function mensagem(){
    echo "Olá mundo <br>";
}

mensagem();
mensagem();
mensagem();
mensagem();
mensagem();

//2
function nomedoaluno($nome){
    echo "Olá $nome <br>";
}
nomedoaluno("Isaac");
//3
echo "<br>";
function soma ($nota1, $nota2){
    return $nota1 + $nota2;
}
echo soma(10, 3);

//4
echo "<br>";
function media ($nota1, $nota2, $nota3){
    $media = ($nota1 + $nota2 + $nota3)/3;
    if ($media >= 7){
    return "<br> aluno aprovado"; 
    }
    else{
        return "<br> aluno reprovado";
    }
}
echo media(10, 3, 5);

//desafio funçao para calcular 

echo "Desafio 01"; echo "<br>"; echo "<br>";
echo "Calculadora desconto"; echo "<br>";
function calculadoraDesconto($preco, $desconto) {
    $valorDesconto = $preco * ($desconto / 100);
    $precoFinal = $preco - $valorDesconto;
    return $precoFinal;
}
$precoFinal = calculadoraDesconto(100, 50);
echo "O preço final com desconto de 50% sobre R$100,00 é: R$" . number_format($precoFinal, 2, ',', '.');
echo "<br>"; echo "<br>";
echo "Desafio 02"; echo "<br>"; echo "<br>";

    ?>