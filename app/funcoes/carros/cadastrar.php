<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    
    $car_modelo     = $_POST['car_modelo'];
    $car_ano        = $_POST['car_ano'];
    $car_km         = $_POST['car_km'];
    $car_aluguel    = $_POST['car_aluguel'];
    $car_disponivel = $_POST['car_disponivel'];
    $car_cor_codigo = $_POST['car_cor_codigo'];
    $car_est_codigo = $_POST['car_est_codigo'];
    $car_mar_codigo = $_POST['car_mar_codigo'];
    
    $comando = $conexao->prepare("INSERT INTO TB_CARROS (CAR_MODELO, CAR_ANO, CAR_KM, CAR_ALUGUEL, CAR_DISPONIVEL, CAR_COR_CODIGO, CAR_EST_CODIGO, CAR_MAR_CODIGO) ".
                                 "VALUES ('{$car_modelo}', {$car_ano}, {$car_km}, {$car_aluguel}, '{$car_disponivel}', {$car_cor_codigo}, {$car_est_codigo}, {$car_mar_codigo})");
    $comando->execute();
    
    header('Location: /locadora?pagina=app/paginas/carros/listagem.php');