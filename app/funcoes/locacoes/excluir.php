<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';

    $loc_codigo = $_POST['loc_codigo'];

    $comando = $conexao->prepare("DELETE FROM TB_LOCACOES WHERE LOC_CODIGO = {$loc_codigo}");
    $comando->execute();

    header('Location: /locadora?pagina=app/paginas/locacoes/listagem.php');