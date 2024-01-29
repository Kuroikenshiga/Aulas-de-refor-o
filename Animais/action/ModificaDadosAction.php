<?php
    require_once('conecta.php');

    if(!isset($_GET['nome']) || !isset($_GET['data']) || !isset($_GET['situacao']) || !isset($_GET['id'])){
        die("Faltam dados do animal");
    }

    $id = $_GET['id'];
    $nome = $_GET['nome'];
    $data = $_GET['data'];
    $situacao = $_GET['situacao'];

    pg_query($conexao, "UPDATE ANIMAIS SET nome='$nome', data_nascimento='$data',situacao='$situacao' WHERE id_animal = '$id'") or die("Erro ao alterar os dados do animal");

    header('location: ../pags/ListaDeAnimaisPag.php');
?>