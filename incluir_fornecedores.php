<!-- incluir_fornecedores.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedores - Inclusão</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
</head>
<body>
    <form action="_incluir_fornecedores.php" method="post">
        <label for="cpfcnpj">CPF/CNPJ</label>
        <input type="text" id="cpf_cnpj" name="cpf_cnpj" class="form-control"
        placeholder="Entre com o CPF/CNPJ" required>        
        <label for="nomefornecedor">Nome Fornecedor</label>
        <input type="text" id="nomefornecedor"
        name="nomefornecedor" class="form-control" placeholder="Entre com o nome"
        required>
        <label for="celular">Celular</label>
        <input type="text" id="celular" name="celular" class="form-control"
        placeholder="Entre com o Celular">
        <label for="celular">E-mail</label>
        <input type="text" id="email" name="email" class="form-control"
        placeholder="Entre com o E-mail">    
        <label for="cep">CEP</label>
        <input type="text" id="cep" name="cep" class="form-control"
        placeholder="Entre com o CEP">
        <label for="logradouto">Endereço</label>
        <input type="text" id="logradouro" name="logradouro" class="form-control"
        placeholder="Entre com o Endereço">
        <label for="numero">numero</label>
        <input type="text" id="numero" name="numero" class="form-control"
        placeholder="Entre com o Número">
        <label for="complemento">Complemento</label>
        <input type="text" id="complemento" name="complemento" class="form-control"
        placeholder="Entre com o Complemento">
        <label for="complemento">Cidade</label>    
        <input type="text" id="cidade" name="cidade" class="form-control"
        placeholder="Entre com a Cidade">
        <label for="estado">Estado</label>
        <input type="text" id="estado" name="estado" class="form-control"
        placeholder="Entre com o Estado">
        <label for="contato">Nome do Contato</label>
        <input type="text" id="contato" name="contato" class="form-control"
        placeholder="Entre com o nome do Contato">                                          
 
        <button type="submit" id="botao" class="btn btn-primary">Incluir</button>        
    </form>
 
</body>
</html>