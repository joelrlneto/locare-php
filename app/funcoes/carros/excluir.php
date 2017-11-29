<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';

    $car_codigo = $_POST['car_codigo'];

    $comando = $conexao->prepare("DELETE FROM TB_CARROS WHERE CAR_CODIGO = {$car_codigo}");
    $comando->execute();

    header('Location: /locadora?pagina=app/paginas/carros/listagem.php');