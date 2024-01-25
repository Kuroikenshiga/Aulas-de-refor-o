<?php
    require_once("../action/ListaDeAnimaisAction.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Animais</title>
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div id="principal">
        <h1>Listagem de Animais</h1> 
        <table class="table">
            <thead>
                <tr>
                    
                    <th scope="col">ID</th>
                    <th scope="col">Nome do animal</th>
                    <th scope="col">Data de nascimento</th>
                    <th scope="col">Situação do animal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($linha = pg_fetch_array($consulta)){

                    
                ?>
                <tr> 
                    <td><?=$linha['id_animal']?></td>
                    <td><?=$linha['nome']?></td>
                    <td><?=date('d-m-Y',strtotime($linha['data_nascimento']))?></td>
                    <td><?=$linha['situacao']?></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>

</body>

</html>