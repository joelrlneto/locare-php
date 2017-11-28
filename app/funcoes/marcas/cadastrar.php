<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    
    $mar_marca    = $_POST['mar_marca'];
    
    $comando = $conexao->prepare("INSERT INTO TB_MARCAS (MAR_MARCA) VALUES ('{$mar_marca}')");
    $comando->execute();
    
    header('Location: /locadora?pagina=app/paginas/marcas/listagem.php');