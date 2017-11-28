<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';

    $cli_codigo = $_POST['cli_codigo'];

    $comando = $conexao->prepare("DELETE FROM TB_CLIENTES WHERE CLI_CODIGO = {$cli_codigo}");
    $comando->execute();

    header('Location: /locadora?pagina=app/paginas/clientes/listagem.php');