<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo do IMC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
<div class="container">
<h2>Calculadora de IMC</h2><br>
<!--
Através  do método POST, Fazemos uma requisição para o servidor
fazer alguma Atividade com os parametros, ou seja, os  valores digitados entro do form, após clicar no botão
-->

    <form method="post">
        <label> Peso (kg):</label>
        <input type="text" name="peso" class="form-control"
        placeholder= "informe seu peso" required><br>
        <label> Altura (m): </label>
        <input type="text" name="altura" class="form-control"
        placeholder="informe sua altura" required><br>
        <input type="submit" class="btn btn-primary"  value="Calcular IMC">
        <br>
    </form>
    <br>

<?php
    // Aqui, o servidor vai reconhecer o método post e executar a ação
    // Existe if está condicionando se existe uma requisição feita pelo 
    //metodo post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // str_replase, troca virgula por ponto
        $peso = str_replace(',', '.', $_POST["peso"]);
        $altura = str_replace(',', '.', $_POST["altura"]);
        // floatval, converte de string para  float (numero com casa decimal)
        $peso = floatval($peso);
        $altura = floatval($altura);
 
 
        if ($altura > 0) {
            $imc = $peso / ($altura * $altura); // $altura ** 2
            $imc = number_format($imc, 2); // transforma em numero com 2 casas 
 
            echo "<h4 style= 'color:rgb(40, 19, 233);'>Seu IMC é: " . $imc . "</h4>"; 
            if ($imc < 18.5) {
                echo "<h4 style= 'color:rgb(247, 19, 19);'>Classificação: Abaixo do peso</h4>";
            } elseif ($imc >= 18.5 && $imc < 24.9) {
                echo "<h4 style= 'color:rgb(4, 250, 37);'>Classificação: Peso normal</h4>";
            } elseif ($imc >= 25 && $imc < 29.9) {
                echo "<h4 style= 'color:rgb(250, 94, 4);'>Classificação: Sobrepeso</h4>";
            } else {
                echo "<h4 style= 'color:rgb(250, 4, 4);'>Classificação: Obesidade</h4>";
            }
        } else { // o else é a  ultima opção
            echo "<h4>Altura deve ser maior que zero.</h4>";
        }
    }
    ?>
</body>
</div>
</html>

</título>
</cabeçalho>
<corpo>
</corpo>
</html>
    
    ?>
    
</body>
</html>