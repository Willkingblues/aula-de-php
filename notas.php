<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>
<body>
    <?php
    echo ("<h1>resultado</h1>");
    echo("<br/>");
    $nota = 6.5;
    if ($nota < 5) { // if = se (sempre entre parentesis)
        echo("aluno reprovado");
        } elseif ($nota < 7) { //caso contrario (pode ter varios
          echo("aluno em recuperação");
        } else { // Caso contrario final ( não tem outra alternativa
            echo("aluno aprovado");
            }
            



    ?>
    
</body>
</html>