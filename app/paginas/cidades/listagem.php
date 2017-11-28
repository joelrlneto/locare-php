<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    $query = $conexao->query("SELECT CID_CODIGO, CID_CIDADE FROM TB_CIDADES");
?>

<div class="card">
    <div class="card-header">
        Cadastro de cidades
    </div>
    <table class="table table-hover table-striped table-bordered">
        <thead>
            <tr>
                <th>Código</th>
                <th>Cidade</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php while($cidade = $query->fetch(PDO::FETCH_ASSOC)){ ?>
                <tr>
                    <td>
                        <?php echo $cidade['CID_CODIGO']; ?>
                    </td>
                    <td>
                        <?php echo $cidade['CID_CIDADE']; ?>
                    </td>
                    <td>
                        <a href=<?php echo "/locadora/?pagina=app/paginas/cidades/exclusao.php&cid_codigo={$cidade['CID_CODIGO']}"; ?> class="btn btn-danger btn-sm">Excluir</a>
                        <a href=<?php echo "/locadora/?pagina=app/paginas/cidades/edicao.php&cid_codigo={$cidade['CID_CODIGO']}"; ?> class="btn btn-primary btn-sm">Editar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="card-footer">
        <a href=<?php echo "/locadora/?pagina=app/paginas/cidades/cadastro.php"; ?> class="btn btn-primary btn-sm">Cadastrar nova cidade</a>
    </div>
</div>