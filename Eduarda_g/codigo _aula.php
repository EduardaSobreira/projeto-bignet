<?php

echo "<h1> Hello php</h1>";

echo"<hr style='height:40px; background-color: blue'>";

//declaração e atribuição de variáveis

$nome = "Daniel";

$sobrenome = "Lopes Rodrigues";

//declaração e atribuição de constantes
define('NOME' , 'DANIEL');
define('SOBRENOME' , 'LOPES RODRIGUES');

//contatenando dados
echo $nome .' '. $sobrenome . "<br>";

//operadores aritiméticos
echo '<hr>';
$num1 = 88.88;
$num2 = 77;

echo ($num1 + $num2) . '<br>';
echo ($num1 - $num2) . '<br>';
echo ($num1 * $num2). '<br>';
echo ($num1 / $num2) . '<br>';

$n1 = 6.5;
$n2 = 8.9;
$media = ($n1 + $n2) /2;
echo $media;

echo '<hr>';
//peradores relacionais

/*
igual     ==
diferente  !=
maior     >
menor     <
maior igual    >=
menoror igual     <=
*/

var_dump($nome);
var_dump($num1);
var_dump($num2);

echo'<hr>';

var_dump(

    ($n1 != $n2)
);

var_dump(

    (strlen($sobrenome) <5)
);

//operadores logicos
//and         &&
//or       ||
//not     !

$login = 'daniel';
$pass = 'eu + eu= EU';

if($login == "daniel" && $pass == "eu + eu= EU") 
{
    echo "<h2>  seja bem vindo </h2>";
}else{
    echo "<h2>uma falha na segurança!</h2>";
}

$cores = [
    "verde",
    "amarelo",
    "vermelho"
];

echo $cores[0] . "<br>";

echo $cores[1] . "<br>";

echo $cores[2] . "<br>";


$sinaleira = $cores[random_int(0, 2)];

if($sinaleira == 'verde'){
        echo "<h1 style='background-color: green'> prossiga</h1>";
} elseif($sinaleira == "amarelo") {
     echo "<h1 style='background-color: yellow'> redusa</h1>";
}else {
    echo"<h1 style='background-color: red'> pare</h1>";
}

echo"<hr>";

//switch ==> analisa casos com base numa referência

$reference = 2;

switch($reference){
    case 0: header("location:http://www.pudim.com.br/");
        break;
        case 1: header("https://www.youtube.com/");
            break;
            default: echo "não escolheu nenhum site";
}

//laços de repetição
//FOR => início; condição; incremento
echo "<hr>";

for($i = 1; $i <=100; $i++){
    echo "6 x $i = " . ($i * 6) . "<br>";
}


//waile => condição
echo"<hr>";
$count = 0;
while($count < 10){
    echo $count . " - ";
    $count++;
}

//foreach => lista "as" referência

echo"<hr>";
$carros = array(
    "fusca",
    "monza",
    "opala",
    "brasília",
    "gol bx",
    
);
for($i = 0; $i < sizeof($carros); $i++){
    echo $carros[$i] . " - ";
}
rsort($carros);
echo"<hr>";

foreach($carros as $c){
    echo $c . " / ";
}