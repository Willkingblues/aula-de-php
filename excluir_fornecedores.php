<?php
// excluir_fornecedores.php
include 'conexao.php'; // conectamos ao banco de  dados

$id_fornecedor = $_GET ['id_fornecedor'];

$sql = "DELETE FROM fornecedores WHERE id_fornecedor=:id_fornecedor";

$stmt = $pdo->prepare($sql); // prepara a declaração SQL 
$stmt->bindParam(':id_fornecedor' , $id_fornecedor, PDO::PARAM_INT);

if ($stmt->execute()) {
    header("location: fornecedores_main.php");
}
?>