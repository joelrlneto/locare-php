<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    
    $mar_codigo = $_POST['mar_codigo'];
    $mar_marca    = $_POST['mar_marca'];
    
    $comando = $conexao->prepare("UPDATE TB_MARCAS SET MAR_MARCA = '{$mar_marca}' WHERE MAR_CODIGO = {$mar_codigo}");
    $comando->execute();
    
    header('Location: /locadora?pagina=app/paginas/marcas/listagem.php'); 