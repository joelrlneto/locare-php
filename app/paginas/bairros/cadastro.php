<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    $query = $conexao->query("SELECT CID_CODIGO, CID_CIDADE FROM TB_CIDADES");
?>

<form action="/locadora/app/funcoes/bairros/cadastrar.php" method="post">
    <div class="card">
        <div class="card-header">
            Cadastrar bairro
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <label for="bai_bairro">Nome do bairro</label>
                    <input type="text" value="" class="form-control" name="bai_bairro" autofocus> 
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="bai_cid_codigo">Cidade</label>
                    <select class="form-control" name="bai_cid_codigo">
                    <?php while($cidade = $query->fetch(PDO::FETCH_ASSOC)){ ?>
                        <option value="<?php echo $cidade['CID_CODIGO']; ?>">
                            <?php echo $cidade['CID_CIDADE']; ?>
                        </option>
                    <?php } ?>
                    </select> 
                </div>
            </div>
        </div>
        <div class="card-footer">
            <input type="submit" class="btn btn-primary" value="Cadastrar">
        </div>
    </div>
</form>