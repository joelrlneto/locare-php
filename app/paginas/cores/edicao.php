<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    $cor_codigo = $_GET['cor_codigo'];
    $query = $conexao->query("SELECT COR_CODIGO, COR_COR FROM TB_CORES WHERE COR_CODIGO = {$cor_codigo}");
    $cor = $query->fetch(PDO::FETCH_ASSOC);
?>

<form action="/locadora/app/funcoes/cores/editar.php" method="post">
    <div class="card">
        <div class="card-header">
            Editar cor
        </div>
        <div class="card-body">
            <input type="hidden" value="<?php echo $cor['COR_CODIGO']?>" name="cor_codigo">

            <label for="cor_cor">Nome da cor</label>
            <input type="text" value="<?php echo $cor['COR_COR']; ?>" class="form-control" name="cor_cor" autofocus> 
        </div>
        <div class="card-footer">
            <input type="submit" class="btn btn-primary" value="Editar">
        </div>
    </div>
</form>