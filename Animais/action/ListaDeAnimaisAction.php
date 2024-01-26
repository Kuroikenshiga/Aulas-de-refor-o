<?php 
    require_once("conecta.php");

    $consulta = pg_query($conexao,"SELECT * FROM ANIMAIS") or die("Erro na listagem");
    
    // $vetor = ["PrimeiroDado"=>2,"SegundoDado"=>3,"TerceiroDado"=>4,"QuintoDado"=>5];
    // $vetor["PrimeiroDado"];
?>