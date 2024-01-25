<?php
    require_once("conecta.php");
    
    $nome = $_GET['nome'];
    $data = $_GET['data'];
    $situacao = $_GET['situacao'];

    pg_query($conexao,"insert into animais (nome,data_nascimento,situacao) values('$nome','$data','$situacao')") or die("Erro no cadastro do animal");

    header("location:../index.php");
?>