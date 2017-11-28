<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    $est_codigo = $_GET['est_codigo'];
    $query = $conexao->query("SELECT EST_CODIGO, EST_ESTADO FROM TB_ESTADOS_CONSERVACAO WHERE EST_CODIGO = {$est_codigo}");
    $estado = $query->fetch(PDO::FETCH_ASSOC);
?>

<form action="/locadora/app/funcoes/estados/editar.php" method="post">
    <div class="card">
        <div class="card-header">
            Editar estado de conservação
        </div>
        <div class="card-body">
            <input type="hidden" value="<?php echo $estado['EST_CODIGO']?>" name="est_codigo">

            <label for="cor_cor">Nome do estado de conservação</label>
            <input type="text" value="<?php echo $estado['EST_ESTADO']; ?>" class="form-control" name="est_estado" autofocus> 
        </div>
        <div class="card-footer">
            <input type="submit" class="btn btn-primary" value="Editar">
        </div>
    </div>
</form>