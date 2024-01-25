<?php 
    require_once("conecta.php");

    $consulta = pg_query($conexao,"SELECT * FROM ANIMAIS") or die("Erro na listagem");

    
?>