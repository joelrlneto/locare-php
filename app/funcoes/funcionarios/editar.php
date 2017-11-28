<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    
    $fun_codigo = $_POST['fun_codigo'];
    $fun_funcionario    = $_POST['fun_funcionario'];
    $fun_data_admissao    = $_POST['fun_data_admissao'];
    $fun_data_demissao    = $_POST['fun_data_demissao'];

    $demissao = $fun_data_demissao != '' ? "'{$fun_data_demissao}'" : 'NULL';
    
    $comando = $conexao->prepare("UPDATE TB_FUNCIONARIOS SET FUN_FUNCIONARIO = '{$fun_funcionario}', FUN_DATA_ADMISSAO = '{$fun_data_admissao}', FUN_DATA_DEMISSAO = {$demissao} WHERE FUN_CODIGO = {$fun_codigo}");
    $comando->execute();
    
    header('Location: /locadora?pagina=app/paginas/funcionarios/listagem.php'); 