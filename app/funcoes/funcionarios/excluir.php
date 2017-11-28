<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';

    $fun_codigo = $_POST['fun_codigo'];

    $comando = $conexao->prepare("DELETE FROM TB_FUNCIONARIOS WHERE FUN_CODIGO = {$fun_codigo}");
    $comando->execute();

    header('Location: /locadora?pagina=app/paginas/funcionarios/listagem.php');