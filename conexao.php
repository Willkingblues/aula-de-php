<?php
$servername = "localhost"; // padrão - Local
$database   = "financeiro";
$username   = "root";
$password   = "";
// Criar conexão -> Padrão para qualquer conexão
// Função nativa do php para fazer a conexão com o banco mysql
// Porém temos a conexão PDO que é mais segura
# Esse sinal é comentário
$conexao= mysqli_connect($servername, $username, $password, $database);
?>