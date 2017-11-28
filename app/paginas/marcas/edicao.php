<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    $mar_codigo = $_GET['mar_codigo'];
    $query = $conexao->query("SELECT MAR_CODIGO, MAR_MARCA FROM TB_MARCAS WHERE MAR_CODIGO = {$mar_codigo}");
    $marca = $query->fetch(PDO::FETCH_ASSOC);
?>

<form action="/locadora/app/funcoes/marcas/editar.php" method="post">
    <div class="card">
        <div class="card-header">
            Editar marca
        </div>
        <div class="card-body">
            <input type="hidden" value="<?php echo $marca['MAR_CODIGO']?>" name="mar_codigo">

            <label for="cor_cor">Nome da marca</label>
            <input type="text" value="<?php echo $marca['MAR_MARCA']; ?>" class="form-control" name="mar_marca" autofocus> 
        </div>
        <div class="card-footer">
            <input type="submit" class="btn btn-primary" value="Editar">
        </div>
    </div>
</form>