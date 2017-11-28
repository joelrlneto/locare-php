<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    
    $cid_cidade    = $_POST['cid_cidade'];
    
    $comando = $conexao->prepare("INSERT INTO TB_CIDADES (CID_CIDADE) VALUES ('{$cid_cidade}')");
    $comando->execute();
    
    header('Location: /locadora?pagina=app/paginas/cidades/listagem.php');