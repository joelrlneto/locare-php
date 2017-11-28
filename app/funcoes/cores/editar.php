<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    
    $cor_codigo = $_POST['cor_codigo'];
    $cor_cor    = $_POST['cor_cor'];
    
    $comando = $conexao->prepare("UPDATE TB_CORES SET COR_COR = '{$cor_cor}' WHERE COR_CODIGO = {$cor_codigo}");
    $comando->execute();
    
    header('Location: /locadora?pagina=app/paginas/cores/listagem.php');