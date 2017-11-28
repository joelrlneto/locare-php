<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    
    $est_estado    = $_POST['est_estado'];
    
    $comando = $conexao->prepare("INSERT INTO TB_ESTADOS_CONSERVACAO (EST_ESTADO) VALUES ('{$est_estado}')");
    $comando->execute();
    
    header('Location: /locadora?pagina=app/paginas/estados/listagem.php');