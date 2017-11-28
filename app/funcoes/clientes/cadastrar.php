<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    
    $cli_nome       = $_POST['cli_nome'];
    $cli_documento  = $_POST['cli_documento'];
    $cli_email      = $_POST['cli_email'];
    $cli_endereco   = $_POST['cli_endereco'];
    $cli_bai_codigo = $_POST['cli_bai_codigo'];
    
    $comando = $conexao->prepare("INSERT INTO TB_CLIENTES (CLI_NOME, CLI_DOCUMENTO, CLI_EMAIL, CLI_ENDERECO, CLI_BAI_CODIGO) VALUES ('{$cli_nome}', '{$cli_documento}','{$cli_email}','{$cli_endereco}', {$cli_bai_codigo})");
    $comando->execute();
    
    header('Location: /locadora?pagina=app/paginas/clientes/listagem.php');