<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    
    $bai_bairro    = $_POST['bai_bairro'];
    $bai_cid_codigo    = $_POST['bai_cid_codigo'];
    
    $comando = $conexao->prepare("INSERT INTO TB_BAIRROS (BAI_BAIRRO, BAI_CID_CODIGO) VALUES ('{$bai_bairro}', {$bai_cid_codigo})");
    $comando->execute();
    
    header('Location: /locadora?pagina=app/paginas/bairros/listagem.php');