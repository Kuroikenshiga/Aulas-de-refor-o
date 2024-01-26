<?php
    require_once("conecta.php");

    if(!isset($_GET["id"])){
        die("Id do animal não recebido");
    }

    $id = $_GET["id"];

    pg_query($conexao,"DELETE FROM ANIMAIS WHERE id_animal = '$id'") or die("Erro na exclusão do animal");

    header("location: ../pags/ListaDeAnimaisPag.php");

?>