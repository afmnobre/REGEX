<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="REGEX exemplos">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Regex - Exemplo 1</title>
    </head>
    <body>

        <h1>Expressões Regulares<h1>
        <hr>
        <h4>1. Usada para Buscas em texto.</h4>
        <h4>2. Validações em campos.</h4>
        <h4>3. Substituição de padrões em textos ou campos.</h4>
        <hr>
<?php
    $texto = "Lorem ipsum dolor sit amet, consetetur sadipscing 4 elitr, sed diam 3 nonuimy eirmod tempor invidunt ut labore et dolore magna 1 aliquyam erat, 0 sed diam voluptua 1. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.";

    $numeros = "646 646 61648178 449 A16461644 316 A12D 31646164684 216 6464671 646 616 646 791 6473312 65184843 131646873 6497616181 63168684321 6898791 993164741 3841267992 68741618744 1649797131687 198719191";
?>
   <h2>Exemplos de Preg_Match_All</h2>
    <h4>Buscando Numeros e Retornando a quantidade de numeros encontrados</h4>
<?
<?php
    $patern = "/[0-9]/";

    echo "Variavel texto = ".$texto."<p>";
    echo "Variavel patern = ".$patern."<p>";
    echo "Retrona a quantidade de numeros encontrados no texto: ".preg_match_all($patern, $texto);
?>

        <h4>Buscando uma validação numerica e retornando a quantidade encontrada.</h4>
<?php
    $patern = "/[0][0]/";

    echo "Variavel texto = ".$texto."<p>";
    echo "Variavel patern = ".$patern."<p>";
    echo "Retrona a quantidade de numeros encontrados no texto: ".preg_match_all($patern, $texto);
?>

        <h4>Verifica se os seis primeiros caracteres são numeros e retorna a quantidade que passou na validação</h4>
<?php
        $patern = "/[0-9]{6}/";

    echo "Variavel texto = ".$numeros."<p>";
    echo "Variavel patern = ".$patern."<p>";
    echo "Retrona a quantidade de numeros encontrados no texto: ".preg_match_all($patern, $numeros);

?>

        <h4>Verifica se começa com numérico e os 6 primeiros caracteres são numeros e possue o tamanho de 6 caracteres e retorna a quantidade que passou na validação</h4>
<?php

       $patern = "/^[0-9]{6}$/";

    echo "Variavel texto = ".$numeros."<p>";
    echo "Variavel patern = ".$patern."<p>";
    echo "Retrona a quantidade de numeros encontrados no texto: ".preg_match_all($patern, $numeros);
?>

    </body>
</html>
