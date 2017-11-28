<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    
    $bai_codigo = $_POST['bai_codigo'];
    $bai_bairro = $_POST['bai_bairro'];
    $bai_cid_codigo = $_POST['bai_cid_codigo'];
    
    $comando = $conexao->prepare("UPDATE TB_BAIRROS SET BAI_BAIRRO = '{$bai_bairro}', BAI_CID_CODIGO = {$bai_cid_codigo} WHERE BAI_CODIGO = {$bai_codigo}");
    $comando->execute();
    
    header('Location: /locadora?pagina=app/paginas/bairros/listagem.php');