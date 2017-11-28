<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    $query = $conexao->query("SELECT BAI_CODIGO, BAI_BAIRRO FROM TB_BAIRROS");
?>

<form action="/locadora/app/funcoes/clientes/cadastrar.php" method="post">
    <div class="card">
        <div class="card-header">
            Cadastrar cliente
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <label for="cli_nome">Nome do cliente</label>
                    <input type="text" value="" class="form-control" name="cli_nome" autofocus> 
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="cli_documento">Documento</label>
                    <input type="text" value="" class="form-control" name="cli_documento"> 
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="cli_email">Email</label>
                    <input type="text" value="" class="form-control" name="cli_email"> 
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="cli_endereco">Endereço</label>
                    <input type="text" value="" class="form-control" name="cli_endereco"> 
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="cli_bai_codigo">Bairro</label>
                    <select class="form-control" name="cli_bai_codigo">
                    <?php while($bairro = $query->fetch(PDO::FETCH_ASSOC)){ ?>
                        <option value="<?php echo $bairro['BAI_CODIGO']; ?>">
                            <?php echo $bairro['BAI_BAIRRO']; ?>
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