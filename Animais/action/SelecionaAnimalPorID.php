<?php
    require_once("conecta.php");

    if(!isset($_GET['id'])){
        die("Id do animal não recebido");
    }
    $id = $_GET['id'];
    $consulta = pg_query($conexao,"SELECT * FROM public.ANIMAIS WHERE id_animal = '$id'") or die("Erro ao selecionar o animal");
?>