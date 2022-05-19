<?php

echo "<hr style='height: 20px; background-color: yellow'>";

echo '<h1>Hello Alvorada!</h1>';
echo '<br>';
print("<i>Feitooooo!</i>");

echo "<hr>";
//Declaração e atribuição de variáveis
$num1 = 55;
$num2 = 33.3;
$nome = "Paulo";
$sobrenome = 'Donini';

//Concatenando textos
echo 'Nome: '.$nome.'<br>Sobrenome: '.$sobrenome.'<br>';

var_dump($num1);
var_dump($num2);

echo "<hr>";
//Operadores aritméticos
// + - * /
echo ($num1 + $num2) . "<br>";
echo ($num1 - $num2) . "<br>";
echo ($num1 * $num2) . "<br>";
echo ($num1 / $num2) . "<br>";

$n1 = "4.9";
$n2 = "7.8";
$media = ($n1 + $n2) / 2;
echo "Média = " . $media . "<br>";

//Operadores relacionais (de comparação)
/*
igual           ==
diferente       !=
maior           >
menor           <
maior igual     >=
menor igual     <=
*/
echo "<hr>";

var_dump(
    ($num1 > $num2)
);

var_dump(
    (strlen($nome) >= 5)
);

//Operadores lógicos
/*
AND     &&
OR      ||
NOT     !
*/
echo "<hr>";

$email = "dentinho@bol.com";
$pass = "1234";

var_dump(
    ($email == "dentinho@bol.com") &&
    ($pass == "1234")
);

var_dump(
    ($pass == "1234") &&
    (strlen($nome) > 3) ||
    (strlen($sobrenome) > 10)
);

//Constantes
echo "<hr>";

define('NOME_EMPRESA', 'DevTudo Software House I.T');

echo NOME_EMPRESA;

//Listas (Array = Vetor)
$cores = [
    "VERDE",
    "VERMELHO",
    "AMARELO",
    "AZUL"
];

echo "<hr>";
var_dump($cores);
echo $cores[3];

//Condicionais (if/elseif/else)
echo "<hr>";
//Php é case sensitive, ou seja
//diferencia maiúsculas de minúsculas
$sinaleira = $cores[random_int(0, 3)];

if($sinaleira == "VERDE") {
    echo "<h4 style='background-color: green'>
            Siga em frente.</h4>";
} elseif($sinaleira == "AMARELO") {
    echo "<h4 style='background-color: yellow'>
            Atenção!</h4>";
} elseif($sinaleira == "AZUL") {
    echo "<h4 style='background-color: blue'>
            Só conversão à direita!</h4>";
} else {
    echo "<h4 style='background-color: red'>
            Pare!!!</h4>";
}

echo "<hr>";

$diaDaSemana = "sexta";

switch($diaDaSemana) {
    case "segunda": echo "Dia de tela quente";
    break;
    case "terça": echo "Dia de Libertadores";
    break;
    case "quarta": echo "Dia de feira nos mercado";
    break;
    case "quinta": echo "Dia de ir na casa da sogra";
    break;
    case "sexta": echo "Dia de pular em poças de lama";
    break;
    default: echo "Dia de folga!";
}

echo "<hr>";

$carros = array(
    "Fusca",
    "Variant",
    "Chevette",
    "Belina",
    "Opala",
    "Brasília",
    "Fiat 147",
    "Veraneio"
);
//Laços de repetição
//FOR => início; condição; incremento
for($i = 0; $i < count($carros); $i++) {
    echo $carros[$i] . " / ";
}

echo "<hr>";
//WHILE => condição
$count = 10;
while($count > 0) {
    echo $count . " - ";
    $count--;
}


//rsort($carros); //Ordem decrescente
sort($carros); //Ordem crescente

echo "<hr>";
//FOREACH => lista "as" referência
foreach($carros as $car) {
    echo $car . " | ";
}