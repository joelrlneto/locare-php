<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';

    $cor_codigo = $_POST['cor_codigo'];

    $comando = $conexao->prepare("DELETE FROM TB_CORES WHERE COR_CODIGO = {$cor_codigo}");
    $comando->execute();

    header('Location: /locadora?pagina=app/paginas/cores/listagem.php');