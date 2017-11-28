<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    
    $fun_funcionario   = $_POST['fun_funcionario'];
    $fun_data_admissao = $_POST['fun_data_admissao'];
    $fun_data_demissao = $_POST['fun_data_demissao'];
    
    $demissao = $fun_data_demissao != '' ? "'{$fun_data_demissao}'" : 'NULL';
    
    $comando = $conexao->prepare("INSERT INTO TB_FUNCIONARIOS (FUN_FUNCIONARIO, FUN_DATA_ADMISSAO, FUN_DATA_DEMISSAO) ".
                                 "VALUES ('{$fun_funcionario}', '{$fun_data_admissao}', {$demissao})");
    $comando->execute();
    
    header('Location: /locadora?pagina=app/paginas/funcionarios/listagem.php');