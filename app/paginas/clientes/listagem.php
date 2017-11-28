<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    $query = $conexao->query("SELECT CLI_CODIGO, CLI_NOME, CLI_DOCUMENTO, CLI_EMAIL FROM TB_CLIENTES");
?>

<div class="card">
    <div class="card-header">
        Cadastro de clientes
    </div>
    <table class="table table-hover table-striped table-bordered">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Documento</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php while($cliente = $query->fetch(PDO::FETCH_ASSOC)){ ?>
                <tr>
                    <td>
                        <?php echo $cliente['CLI_CODIGO']; ?>
                    </td>
                    <td>
                        <?php echo $cliente['CLI_NOME']; ?>
                    </td>
                    <td>
                        <?php echo $cliente['CLI_DOCUMENTO']; ?>
                    </td>
                    <td>
                        <?php echo $cliente['CLI_EMAIL']; ?>
                    </td>
                    <td>
                        <a href=<?php echo "/locadora/?pagina=app/paginas/clientes/exclusao.php&cli_codigo={$cliente['CLI_CODIGO']}"; ?> class="btn btn-danger btn-sm">Excluir</a>
                        <a href=<?php echo "/locadora/?pagina=app/paginas/clientes/edicao.php&cli_codigo={$cliente['CLI_CODIGO']}"; ?> class="btn btn-primary btn-sm">Editar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="card-footer">
        <a href=<?php echo "/locadora/?pagina=app/paginas/clientes/cadastro.php"; ?> class="btn btn-primary btn-sm">Cadastrar novo cliente</a>
    </div>
</div>