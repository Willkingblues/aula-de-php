<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>swich case</title>
</head>
<body>
    <?php
$dia_da_semana = "quarta";
switch ($dia_da_semana) {
    case "segunda": // : obrigatório na sintaxe
        echo "hoje é segunda-feira!";
    break; // Interrompe o processo
    case "terça":
    echo "Hoje é terça-feira!";
break;
case "quarta":
echo "Hoje é quarta-feira!";
break;
case"Quinta":
echo "hoje é quinta feira!";
break;
case "Sexta-feira";
echo "Hoje e Sexta-feira!";
break;
case "Sabado":
    echo "Hoje é Sabado!";
    break;
    case "domingo";
    echo "Hoje e Domingo!";
    break;
    default:
    echo "dia inválido";
}
    ?>    
</body>
</html>