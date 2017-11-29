<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    
    $loc_codigo           = $_POST['loc_codigo'];
    $loc_data_locacao     = $_POST['loc_data_locacao'];
    $loc_data_entrega     = $_POST['loc_data_entrega'] != '' ? "'{$_POST['loc_data_entrega']}'" : 'NULL';
    $loc_odometro_inicial = $_POST['loc_odometro_inicial'];
    $loc_odometro_final   = $_POST['loc_odometro_final'];
    $loc_car_codigo       = $_POST['loc_car_codigo'];
    $loc_cli_codigo       = $_POST['loc_cli_codigo'];
    $loc_fun_codigo       = $_POST['loc_fun_codigo'];

    $comando = $conexao->prepare("UPDATE TB_LOCACOES SET LOC_DATA_LOCACAO = '{$loc_data_locacao}', ".
                                 "LOC_DATA_ENTREGA = {$loc_data_entrega}, ".
                                 "LOC_ODOMETRO_INICIAL = {$loc_odometro_inicial}, ".
                                 "LOC_ODOMETRO_FINAL = {$loc_odometro_final}, ".
                                 "LOC_CAR_CODIGO = {$loc_car_codigo}, ".
                                 "LOC_CLI_CODIGO = {$loc_cli_codigo}, ".
                                 "LOC_FUN_CODIGO = {$loc_fun_codigo} WHERE LOC_CODIGO = {$loc_codigo}");
    $comando->execute();
    
    header('Location: /locadora?pagina=app/paginas/locacoes/listagem.php'); 