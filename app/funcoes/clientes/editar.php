<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    
    $cli_codigo     = $_POST['cli_codigo'];
    $cli_nome       = $_POST['cli_nome'];
    $cli_documento  = $_POST['cli_documento'];
    $cli_email      = $_POST['cli_email'];
    $cli_endereco   = $_POST['cli_endereco'];
    $cli_bai_codigo = $_POST['cli_bai_codigo'];
    
    $comando = $conexao->prepare("UPDATE TB_CLIENTES SET CLI_NOME = '{$cli_nome}', CLI_DOCUMENTO = '{$cli_documento}', CLI_EMAIL = '{$cli_email}', CLI_ENDERECO = '{$cli_endereco}', CLI_BAI_CODIGO = {$cli_bai_codigo} WHERE CLI_CODIGO = {$cli_codigo}");
    $comando->execute();
    
    header('Location: /locadora?pagina=app/paginas/clientes/listagem.php'); 