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

    <h2>Exemplos</h2>
    <hr>
    <h4>Validando Numero de Telefone</h4>
    <?PHP
    $telefone1 = "11-96285-1513";
    $telefone2 = "11-2467-1907";
    $telefone3 = "11962851513";
    $telefone4 = "1124671907";
    $telefone5 = "125s848i55a7";

    $patern = "/\d{2}[-]?\d{4,5}[-]?\d{4}/";

    echo "O Padrão é: <strong>$patern</strong><br>";
    echo "A regra acima:<br>";
    echo "1. Precisa ter 2 Numeros Iniciais<br>";
    echo "2. (pode ter ou não o - )<br>";
    echo "3. Precisa ter 4 ou 5 Numeros<br>";
    echo "4. (pode ter ou não o - )<br>";
    echo "5. Precisa ter 4 digitos<p>";

    if(preg_match($patern,$telefone1) == true){ echo "<font color=green>Tel Valido</font> $telefone1<br>"; } else { echo "<font color=red>Tel Invalido</font> $telefone1"; }
    if(preg_match($patern,$telefone2) == true){ echo "<font color=green>Tel Valido</font> $telefone2<br>"; } else { echo "<font color=red>Tel Invalido</font> $telefone2"; }
    if(preg_match($patern,$telefone3) == true){ echo "<font color=green>Tel Valido</font> $telefone3<br>"; } else { echo "<font color=red>Tel Invalido</font> $telefone3"; }
    if(preg_match($patern,$telefone4) == true){ echo "<font color=green>Tel Valido</font> $telefone4<br>"; } else { echo "<font color=red>Tel Invalido</font> $telefone4"; }
    if(preg_match($patern,$telefone5) == true){ echo "<font color=green>Tel Valido</font> $telefone5<br>"; } else { echo "<font color=red>Tel Invalido</font> $telefone5"; }
    ?>
    <hr>
    <h4>Validando Numero de Telefone</h4>
    <?PHP
    $telefone1 = "11-96285-1513";
    $telefone2 = "11-2467-1907";
    $telefone3 = "11962851513";
    $telefone4 = "1124671907";
    $telefone5 = "125s848i55a7";

    $patern = "/\d{2}[-]?\d{4,5}[-]?\d{4}/";

    echo "O Padrão é: <strong>$patern</strong><br>";
    echo "A regra acima:<br>";
    echo "1. Precisa ter 2 Numeros Iniciais<br>";
    echo "2. (pode ter ou não o - )<br>";
    echo "3. Precisa ter 4 ou 5 Numeros<br>";
    echo "4. (pode ter ou não o - )<br>";
    echo "5. Precisa ter 4 digitos<p>";

    if(preg_match($patern,$telefone1) == true){ echo "<font color=green>Tel Valido</font> $telefone1<br>"; } else { echo "<font color=red>Tel Invalido</font> $telefone1"; }
    if(preg_match($patern,$telefone2) == true){ echo "<font color=green>Tel Valido</font> $telefone2<br>"; } else { echo "<font color=red>Tel Invalido</font> $telefone2"; }
    if(preg_match($patern,$telefone3) == true){ echo "<font color=green>Tel Valido</font> $telefone3<br>"; } else { echo "<font color=red>Tel Invalido</font> $telefone3"; }
    if(preg_match($patern,$telefone4) == true){ echo "<font color=green>Tel Valido</font> $telefone4<br>"; } else { echo "<font color=red>Tel Invalido</font> $telefone4"; }
    if(preg_match($patern,$telefone5) == true){ echo "<font color=green>Tel Valido</font> $telefone5<br>"; } else { echo "<font color=red>Tel Invalido</font> $telefone5"; }
    ?>
    <hr>










    </body>
</html>
