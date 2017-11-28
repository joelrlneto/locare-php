<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    
    $cor_cor    = $_POST['cor_cor'];
    
    $comando = $conexao->prepare("INSERT INTO TB_CORES (COR_COR) VALUES ('{$cor_cor}')");
    $comando->execute();
    
    header('Location: /locadora?pagina=app/paginas/cores/listagem.php');