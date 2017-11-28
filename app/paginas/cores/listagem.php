<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    $query = $conexao->query("SELECT COR_CODIGO, COR_COR FROM TB_CORES");
?>

<div class="card">
    <div class="card-header">
        Cadastro de cores
    </div>
    <table class="table table-hover table-striped table-bordered">
        <thead>
            <tr>
                <th>Código</th>
                <th>Cor</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php while($cor = $query->fetch(PDO::FETCH_ASSOC)){ ?>
                <tr>
                    <td>
                        <?php echo $cor['COR_CODIGO']; ?>
                    </td>
                    <td>
                        <?php echo $cor['COR_COR']; ?>
                    </td>
                    <td>
                        <a href=<?php echo "/locadora/?pagina=app/paginas/cores/exclusao.php&cor_codigo={$cor['COR_CODIGO']}"; ?> class="btn btn-danger btn-sm">Excluir</a>
                        <a href=<?php echo "/locadora/?pagina=app/paginas/cores/edicao.php&cor_codigo={$cor['COR_CODIGO']}"; ?> class="btn btn-primary btn-sm">Editar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="card-footer">
        <a href=<?php echo "/locadora/?pagina=app/paginas/cores/cadastro.php"; ?> class="btn btn-primary btn-sm">Cadastrar nova cor</a>
    </div>
</div>