<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    $query = $conexao->query("SELECT MAR_CODIGO, MAR_MARCA FROM TB_MARCAS");
?>

<div class="card">
    <div class="card-header">
        Cadastro de marcas
    </div>
    <table class="table table-hover table-striped table-bordered">
        <thead>
            <tr>
                <th>Código</th>
                <th>Marca</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php while($marca = $query->fetch(PDO::FETCH_ASSOC)){ ?>
                <tr>
                    <td>
                        <?php echo $marca['MAR_CODIGO']; ?>
                    </td>
                    <td>
                        <?php echo $marca['MAR_MARCA']; ?>
                    </td>
                    <td>
                        <a href=<?php echo "/locadora/?pagina=app/paginas/marcas/exclusao.php&mar_codigo={$marca['MAR_CODIGO']}"; ?> class="btn btn-danger btn-sm">Excluir</a>
                        <a href=<?php echo "/locadora/?pagina=app/paginas/marcas/edicao.php&mar_codigo={$marca['MAR_CODIGO']}"; ?> class="btn btn-primary btn-sm">Editar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="card-footer">
        <a href=<?php echo "/locadora/?pagina=app/paginas/marcas/cadastro.php"; ?> class="btn btn-primary btn-sm">Cadastrar nova marca</a>
    </div>
</div>