<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Animais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>

<div id="principal">
    
    <form method="GET" action="../action/CadastraAnimalAction.php">

    <h1>Cadastro do Animais</h1> 

        <div class="form-group">
            <label for="nome">Nome do animal</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Informe o nome do animal" name="nome">
            
        </div>

        <div class="form-group">
            <label for="data">Data de nascimento do animal</label>
            <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Informe a data de nascimento do animal" name="data">
        </div>
        
        <select class="form-select" aria-label="Default select example" name="situacao">
            <option selected>Selecione a situação do animal</option>
            <option value="Saudável">Saudável</option>
            <option value="Doente">Doente</option>
            <option value="Morto">Morto</option>
        </select>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

</body>
</html>