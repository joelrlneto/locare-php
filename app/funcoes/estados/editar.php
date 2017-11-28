<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    
    $est_codigo = $_POST['est_codigo'];
    $est_estado = $_POST['est_estado'];
    
    $comando = $conexao->prepare("UPDATE TB_ESTADOS_CONSERVACAO SET EST_ESTADO = '{$est_estado}' WHERE EST_CODIGO = {$est_codigo}");
    $comando->execute();
    
    header('Location: /locadora?pagina=app/paginas/estados/listagem.php');