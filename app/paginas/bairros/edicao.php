<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';

    $bai_codigo = $_GET['bai_codigo'];

    $queryCidades = $conexao->query("SELECT CID_CODIGO, CID_CIDADE FROM TB_CIDADES");
    $queryBairro = $conexao->query("SELECT BAI_CODIGO, BAI_BAIRRO, BAI_CID_CODIGO FROM TB_BAIRROS WHERE BAI_CODIGO = {$bai_codigo}");

    $bairro = $queryBairro->fetch(PDO::FETCH_ASSOC);
?>

<form action="/locadora/app/funcoes/bairros/editar.php" method="post">
    <div class="card">
        <div class="card-header">
            Editar bairro
        </div>
        <div class="card-body">
            <input type="hidden" name="bai_codigo" value="<?php echo $bairro['BAI_CODIGO']; ?>">
            <div class="row">
                <div class="col">
                    <label for="bai_bairro">Nome do bairro</label>
                    <input type="text" value="<?php echo $bairro['BAI_BAIRRO']; ?>" class="form-control" name="bai_bairro" autofocus> 
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="bai_cid_codigo">Cidade</label>
                    <select class="form-control" name="bai_cid_codigo">
                    <?php while($cidade = $queryCidades->fetch(PDO::FETCH_ASSOC)){ ?>
                        <option value="<?php echo $cidade['CID_CODIGO']; ?>" <?php if($cidade['CID_CODIGO'] == $bairro['BAI_CID_CODIGO']) echo 'selected=true'; ?>>
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