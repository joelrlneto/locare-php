<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    $query = $conexao->query("SELECT EST_CODIGO, EST_ESTADO FROM TB_ESTADOS_CONSERVACAO");
?>

<div class="card">
    <div class="card-header">
        Estados de Conservação
    </div>
    <table class="table table-hover table-striped table-bordered">
        <thead>
            <tr>
                <th>Código</th>
                <th>Estado</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php while($estado = $query->fetch(PDO::FETCH_ASSOC)){ ?>
                <tr>
                    <td>
                        <?php echo $estado['EST_CODIGO']; ?>
                    </td>
                    <td>
                        <?php echo $estado['EST_ESTADO']; ?>
                    </td>
                    <td>
                        <a href=<?php echo "/locadora/?pagina=app/paginas/estados/exclusao.php&est_codigo={$estado['EST_CODIGO']}"; ?> class="btn btn-danger btn-sm">Excluir</a>
                        <a href=<?php echo "/locadora/?pagina=app/paginas/estados/edicao.php&est_codigo={$estado['EST_CODIGO']}"; ?> class="btn btn-primary btn-sm">Editar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="card-footer">
        <a href=<?php echo "/locadora/?pagina=app/paginas/estados/cadastro.php"; ?> class="btn btn-primary btn-sm">Cadastrar novo estado de conservação</a>
    </div>
</div>