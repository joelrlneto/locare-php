<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';

    $est_codigo = $_POST['est_codigo'];

    $comando = $conexao->prepare("DELETE FROM TB_ESTADOS_CONSERVACAO WHERE EST_CODIGO = {$est_codigo}");
    $comando->execute();

    header('Location: /locadora?pagina=app/paginas/estados/listagem.php');