<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css"/>

    <title>Cadastrar usuário</title>
</head>
<body>
    <div class="container">

        <form action="php_action/criar_usuario.php" method="post">

        <h2>Cadastro</h2>

            <label class="form-label" for="nome">Nome:</label>
            <input class="form-control" type="text" name="nome" id="Nome">
            
            <label class="form-label" for="sobrenome">Sobrenome:</label>
            <input class="form-control" type="text" name="sobrenome" id="Sobrenome">

            <label class="form-label" for="cpf">CPF:</label>
            <input class="form-control" type="number" name="cpf" id="Cpf">
            <br>

            <label class="form-label" for="assalariado">Assalariado:</label><br>
            <label class="form-label" for="salario">Salário:</label>
            <input class="form-control" type="number" name="salario" id="Salario">
            <br><br>

            <label class="form-label" for="comissionado">Comissionado:</label><br>
            <label class="form-label" for="comissionado">Taxa de comissão:</label>
            <input class="form-control" type="number" name="taxaComissao" id="TaxaComissao">
            <label class="form-label" for="comissionado">Total de vendas:</label>
            <input class="form-control" type="number" name="totalVendas" id="TotalVendas">
            <br><br>

            <label class="form-label" for="horista">Horista:</label><br>
            <label class="form-label" for="horista">Preço por hora:</label>
            <input class="form-control" type="number" name="precoHoras" id="PrecoHoras">
            <label class="form-label" for="horista">Horas trabalhadas:</label>
            <input class="form-control" type="number" name="horasTrabalhadas" id="HorasTrabalhadas">
            <br><br>
            
        <button type="submit" name="btn-cadastro" class="btn btn-danger">Cadastrar</button>

        </form>
        
    <div class="container">
</body>
</html>