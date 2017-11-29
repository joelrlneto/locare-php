<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    
    $car_codigo     = $_POST['car_codigo'];
    $car_modelo     = $_POST['car_modelo'];
    $car_ano        = $_POST['car_ano'];
    $car_km         = $_POST['car_km'];
    $car_aluguel    = $_POST['car_aluguel'];
    $car_disponivel = $_POST['car_disponivel'];
    $car_cor_codigo = $_POST['car_cor_codigo'];
    $car_est_codigo = $_POST['car_est_codigo'];
    $car_mar_codigo = $_POST['car_mar_codigo'];
    
    $comando = $conexao->prepare("UPDATE TB_CARROS SET CAR_MODELO = '{$car_modelo}', ".
                                                      "CAR_ANO = {$car_ano}, ".
                                                      "CAR_KM = {$car_km}, ".
                                                      "CAR_ALUGUEL = {$car_aluguel}, ".
                                                      "CAR_DISPONIVEL = '{$car_disponivel}', ".
                                                      "CAR_COR_CODIGO = {$car_cor_codigo}, ".
                                                      "CAR_EST_CODIGO = {$car_est_codigo}, ".
                                                      "CAR_MAR_CODIGO = {$car_mar_codigo} WHERE CAR_CODIGO = {$car_codigo}");
    $comando->execute();
    
    header('Location: /locadora?pagina=app/paginas/carros/listagem.php'); 