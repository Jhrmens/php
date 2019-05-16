<?php

    $nome = "Sir While";
    echo $nome, "<br>";
    $sobrenome = "Shabolo";
    $nomeCompleto = $nome . " " . $sobrenome;

    if(isset($nome)){
        var_dump($nome);
    }

    echo "<br> Nome Completo " . $nomeCompleto;
    unset($sobrenome);

    echo $sobrenome;

    $ip = $_SERVER['SERVER_ADDR'];
    echo $ip . "<br>";

    $hostName = $_SERVER["SERVER_NAME"];
    echo $hostName . "<br>";

    $script = $_SERVER['SCRIPT_NAME'];
    echo $script;
?>