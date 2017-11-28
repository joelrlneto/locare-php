<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';

    $bai_codigo = $_POST['bai_codigo'];

    $comando = $conexao->prepare("DELETE FROM TB_BAIRROS WHERE BAI_CODIGO = {$bai_codigo}");
    $comando->execute();

    header('Location: /locadora?pagina=app/paginas/bairros/listagem.php');