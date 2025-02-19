<!-- incluir_fornecedores.php -->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedores - Inclusão</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <?php
        include 'menu.php';  // incluímos o menu nesse PHP
    ?> 
    <div class="container">
    <form action="processa_incluir_fornecedores.php" method="post">
        <label for="cpfcnpj">CPF/CNPJ</label>
        <input type="text" id="cpf_cnpj" name="cpf_cnpj" class="form-control cpfOuCnpj" 
        placeholder="Entre com o CPF/CNPJ" required> 
        
        <label for="nome_fornecedor">Nome Fornecedor</label>
        <input type="text" id="nome_fornecedor" name="nome_fornecedor" class="form-control" 
        placeholder="Entre com o nome" required>

        <label for="celular">Celular</label>
        <input type="text" id="celular" name="celular" class="form-control" 
        placeholder="Entre com o Celular"> 

        <label for="email">E-mail</label> 
        <input type="text" id="email" name="email" class="form-control" 
        placeholder="Entre com o E-mail">     

        <label for="cep">CEP</label> 
        <input type="text" id="cep" name="cep" class="form-control" 
        placeholder="Entre com o CEP">

        <label for="logradouro">Endereço</label> 
        <input type="text" id="logradouro" name="logradouro" class="form-control" 
        placeholder="Entre com o Endereço">

        <label for="numero">Número</label> 
        <input type="text" id="numero" name="numero" class="form-control" 
        placeholder="Entre com o Número"> 

        <label for="complemento">Complemento</label> 
        <input type="text" id="complemento" name="complemento" class="form-control" 
        placeholder="Entre com o Complemento"> 

        <label for="bairro">Bairro</label> 
        <input type="text" id="bairro" name="bairro" class="form-control" 
        placeholder="Entre com o Bairro"> 

        <label for="cidade">Cidade</label>    
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
    </div>
    <!-- Carregando bibliotecas corretamente -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js">

    </script>

    <script type="text/javascript">
        var options = {
    onKeyPress: function (cpf, ev, el, op) {
        var masks = ['000.000.000-000', '00.000.000/0000-00'];
        $('.cpfOuCnpj').mask((cpf.length > 14) ? masks[1] : masks[0], op);
        }
    }

    $('.cpfOuCnpj').length > 11 ? $('.cpfOuCnpj').mask('00.000.000/0000-00', options) : $('.cpfOuCnpj').mask('000.000.000-00#', options);
    </script>
   
</body>
</html>
