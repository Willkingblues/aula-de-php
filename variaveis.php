<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>estudo de variáveis</title>
</head>
<body>
    <?php
    echo("<h1>Aula de variáveis</h1>");
echo("<br");
$nome = "wilson";
$sobrenome = "Galvão";
    echo("<p>$nome  $sobrenome</p>");
    $numero1 =10;
    $numero2 = 5;
    echo("<br");
    echo("<p>" .$numero1+$numero2 . "</p>");
    echo("<p>" .$numero1-$numero2 . "</p>");
    $pi=3.14569;
    echo("<p>" . $pi . "</p>");
    $adulto = TRUE;
    echo($adulto);

    // o sinal . irá concatenar varias expressões

?>
</body>
</html>