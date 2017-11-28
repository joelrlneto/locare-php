<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    $cid_codigo = $_GET['cid_codigo'];
    $query = $conexao->query("SELECT CID_CODIGO, CID_CIDADE FROM TB_CIDADES WHERE CID_CODIGO = {$cid_codigo}");
    $cidade = $query->fetch(PDO::FETCH_ASSOC);
?>

<form action="/locadora/app/funcoes/cidades/editar.php" method="post">
    <div class="card">
        <div class="card-header">
            Editar cidade
        </div>
        <div class="card-body">
            <input type="hidden" value="<?php echo $cidade['CID_CODIGO']?>" name="cid_codigo">

            <label for="cor_cor">Nome da cidade</label>
            <input type="text" value="<?php echo $cidade['CID_CIDADE']; ?>" class="form-control" name="cid_cidade" autofocus> 
        </div>
        <div class="card-footer">
            <input type="submit" class="btn btn-primary" value="Editar">
        </div>
    </div>
</form>