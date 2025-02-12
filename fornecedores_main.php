<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedores</title>
    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?php
    include 'conexao.php'; // Inclui o arquivo de conexão
?>    
<a href="incluir_fornecedores.php" class="btn btn-primary">Novo Fornecedor</a>
<br><br>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome Fornecedor</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $sql = "SELECT * FROM fornecedores"; // Consulta a tabela
        $stmt = $pdo->query($sql); // Executa a consulta usando PDO
        // Laço para trazer os dados da consulta
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $id_fornecedor = $row['id_fornecedor'];
            $nome_fornecedor = $row['nome_fornecedor'];
   ?>
    <tr>
      <td><?php echo htmlspecialchars($id_fornecedor); ?></td>
      <td><?php echo htmlspecialchars($nome_fornecedor); ?></td>
      <td><a href="editar_fornecedores.php?id_fornecedor=<?php echo htmlspecialchars($id_fornecedor); ?>"
      class="btn btn-primary">Editar</a></td>
      <td><a href="excluir_fornecedores.php?id_fornecedor=<?php echo htmlspecialchars($id_fornecedor); ?>"
      class="btn btn-danger">Excluir</a></td>
    </tr>
    <?php
        }
    ?>
  </tbody>
</table>
   
</body>
</html>