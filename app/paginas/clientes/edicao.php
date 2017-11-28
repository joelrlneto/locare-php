<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    $cli_codigo = $_GET['cli_codigo'];
    
    $queryCliente = $conexao->query("SELECT CLI_CODIGO, CLI_NOME, CLI_DOCUMENTO, CLI_EMAIL, CLI_ENDERECO, CLI_BAI_CODIGO FROM TB_CLIENTES WHERE CLI_CODIGO = {$cli_codigo}");
    $queryBairros = $conexao->query("SELECT BAI_CODIGO, BAI_BAIRRO FROM TB_BAIRROS");

    $cliente = $queryCliente->fetch(PDO::FETCH_ASSOC);
?>

<form action="/locadora/app/funcoes/clientes/editar.php" method="post">
<div class="card">
    <div class="card-header">
        Editar cliente
    </div>
    <div class="card-body">
        <input type="hidden" value="<?php echo $cliente['CLI_CODIGO']; ?>" name="cli_codigo">
        <div class="row">
            <div class="col">
                <label for="cli_nome">Nome do cliente</label>
                <input type="text" value="<?php echo $cliente['CLI_NOME']; ?>" class="form-control" name="cli_nome" autofocus> 
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="cli_documento">Documento</label>
                <input type="text" value="<?php echo $cliente['CLI_DOCUMENTO']; ?>" class="form-control" name="cli_documento"> 
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="cli_email">Email</label>
                <input type="text" value="<?php echo $cliente['CLI_EMAIL']; ?>" class="form-control" name="cli_email"> 
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="cli_endereco">Endereço</label>
                <input type="text" value="<?php echo $cliente['CLI_ENDERECO']; ?>" class="form-control" name="cli_endereco"> 
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="cli_bai_codigo">Bairro</label>
                <select class="form-control" name="cli_bai_codigo">
                <?php while($bairro = $queryBairros->fetch(PDO::FETCH_ASSOC)){ ?>
                    <option value="<?php echo $bairro['BAI_CODIGO']; ?>" <?php if($bairro['BAI_CODIGO'] == $cliente['CLI_BAI_CODIGO']) echo 'selected=true'; ?>>
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