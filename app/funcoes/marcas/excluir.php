<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';

    $mar_codigo = $_POST['mar_codigo'];

    $comando = $conexao->prepare("DELETE FROM TB_MARCAS WHERE MAR_CODIGO = {$mar_codigo}");
    $comando->execute();

    header('Location: /locadora?pagina=app/paginas/marcas/listagem.php');