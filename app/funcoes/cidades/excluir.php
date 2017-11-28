<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';

    $cid_codigo = $_POST['cid_codigo'];

    $comando = $conexao->prepare("DELETE FROM TB_CIDADES WHERE CID_CODIGO = {$cid_codigo}");
    $comando->execute();

    header('Location: /locadora?pagina=app/paginas/cidades/listagem.php');