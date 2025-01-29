<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funçõe string</title>
</head>
<body>
    <?php
$nomecompleto="Joaquim Mendes da Silva";
// Objetivo: Exibir  o Primeiro Nome
// No navegador, pesquisar: php funções string (primeiro link)
//substr = função  que  busca  parte de uma  string
// stripos = localizar  alguma coisa na  string
//
$primeironome=substr($nomecompleto,0,stripos($nomecompleto," "));
echo("<h1>" . $nomecompleto . "</h1>");
echo("<h2>" . $primeironome . "</h2>");
$email="joaquimms@hotmail.com";
// para  mostrar o primeiro nome pego posição 0 até encontrar 
// o primeiro espaço em branco 
$nomeemail=substr($email,0,stripos($email,"@"));
echo("<h1>" . $nomeemail . "</h1>");
// retornou: joaquimms, pois encontrou o primeiro arroba
// strlen -  retorna o tamanho da string (quantas letras tem)
Echo(strlen($email));
$dominio=substr($email,stripos($email,"@"),strlen($email));
// retornou: @hotmail.com, pois  pegou do primeiro arroba até o tamanho da
//string
echo("<h1>" . $dominio . "</h1>");
// Aqui pegamos o sobrenome: mostramos do ultimo espaço em branco ate  o tamanho da string
$sobrenome=substr($nomecompleto,strripos($nomecompleto," "),strlen($nomecompleto));
echo("<h1>" . $sobrenome . "</h1>");
// função strrchr - encontra a  última ocorrência de  um caractere em uma string
$ultimosobrenome2=strrchr($nomecompleto, " ");
echo("<h2>".$ultimosobrenome2."</h2>");
//em nomes de pastas ou arquivos evitar espaços e pontos

    ?>
    
</body>
</html>