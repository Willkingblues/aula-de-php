<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedores</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <?php
    Include 'conexao.php';
    ?>
    <a href="incluir_fornecedores.php" class="btn btn-primary"> Novo Fornecedor</a>
    <br><br>
    <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nome fornecedor</th>
        <th scope="col">editar</th>
        <th scope="col">excluir</th>
      </tr>
    </thead>
    <tbody>
        <?php
        $sql = "select * from fornecedores";
        $busca_fornecedor = mysqli_query($conexao,$sql);
        while ($array = mysqli_fetch_array($busca_fornecedor)) {
            $id_fornecedor = $array['id_fornecedor'];
            $nome_fornecedor = $array['nome_fornecedor'];
        
        ?>
      <tr>
        <th <?php echo($id_fornecedor);?>></th>
        <td><?php echo($nome_fornecedor);?></td>
        <td><button type="button" class="btn btn-primary">Editar</button> </td>
        <td><button type="button" class="btn btn-primary">Excluir</button> </td>
      </tr>
      <?php
        }
        ?>

      <tr>
        <td scope="row">2</td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
<?php




    ?>
    
</body>
</html>