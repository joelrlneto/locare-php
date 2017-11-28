<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    
    $cid_codigo = $_POST['cid_codigo'];
    $cid_cidade = $_POST['cid_cidade'];

    $comando = $conexao->prepare("UPDATE TB_CIDADES SET CID_CIDADE = '{$cid_cidade}' WHERE CID_CODIGO = {$cid_codigo}");
    $comando->execute();
    
    header('Location: /locadora?pagina=app/paginas/cidades/listagem.php');