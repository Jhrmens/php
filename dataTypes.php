<?php

$nome = "G1";
$site = 'www.g1.com';

$ano = 2019;
$salario = 2500.99;
$bloqueado = false;
/////////////////////////////////

$frutas = array("Kiwi", "Acerola", "Abacate");

foreach ($frutas as $fruta){
    echo $fruta;
}
echo '<br>' . join(', ', $frutas);
echo '<br>' . $frutas[2] . '<br>';

$nascimento = new DateTime();

var_dump($nascimento);

$arquivo = fopen("dataTypes.php", "r");

var_dump($arquivo);

?>