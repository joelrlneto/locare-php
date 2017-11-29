<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    
    $loc_data_locacao     = $_POST['loc_data_locacao'];
    $loc_odometro_inicial = $_POST['loc_odometro_inicial'];
    $loc_car_codigo       = $_POST['loc_car_codigo'];
    $loc_cli_codigo       = $_POST['loc_cli_codigo'];
    $loc_fun_codigo       = $_POST['loc_fun_codigo'];
    
    $comando = $conexao->prepare("INSERT INTO TB_LOCACOES (LOC_DATA_LOCACAO, LOC_ODOMETRO_INICIAL, LOC_ODOMETRO_FINAL, LOC_CAR_CODIGO, LOC_CLI_CODIGO, LOC_FUN_CODIGO) VALUES ('{$loc_data_locacao}', {$loc_odometro_inicial}, 0, {$loc_car_codigo}, {$loc_cli_codigo}, {$loc_fun_codigo})");
    $comando->execute();
    
    header('Location: /locadora?pagina=app/paginas/locacoes/listagem.php');