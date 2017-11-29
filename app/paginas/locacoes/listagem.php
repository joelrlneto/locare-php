<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    $query = $conexao->query("SELECT LOC_CODIGO, LOC_DATA_LOCACAO, CAR_MODELO, LOC_ODOMETRO_INICIAL, CLI_NOME, FUN_FUNCIONARIO FROM VW_LOCACOES WHERE LOC_DATA_ENTREGA IS NULL");
?>

<div class="card">
    <div class="card-header">
        Locações em andamento
    </div>
    <table class="table table-hover table-striped table-bordered">
        <thead>
            <tr>
                <th>Código</th>
                <th>Data da locação</th>
                <th>Carro</th>
                <th>Odômetro inicial</th>
                <th>Cliente</th>
                <th>Funcionário</th>                
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php while($locacao = $query->fetch(PDO::FETCH_ASSOC)){ ?>
                <tr>
                    <td>
                        <?php echo $locacao['LOC_CODIGO']; ?>
                    </td>
                    <td>
                        <?php echo $locacao['LOC_DATA_LOCACAO']; ?>
                    </td>
                    <td>
                        <?php echo $locacao['CAR_MODELO']; ?>
                    </td>
                    <td>
                        <?php echo $locacao['LOC_ODOMETRO_INICIAL']; ?>
                    </td>
                    <td>
                        <?php echo $locacao['CLI_NOME']; ?>
                    </td>
                    <td>
                        <?php echo $locacao['FUN_FUNCIONARIO']; ?>
                    </td>
                    <td>
                        <a href=<?php echo "/locadora/?pagina=app/paginas/locacoes/exclusao.php&loc_codigo={$locacao['LOC_CODIGO']}"; ?> class="btn btn-danger btn-sm">Excluir</a>
                        <a href=<?php echo "/locadora/?pagina=app/paginas/locacoes/edicao.php&loc_codigo={$locacao['LOC_CODIGO']}"; ?> class="btn btn-primary btn-sm">Editar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="card-footer">
        <a href=<?php echo "/locadora/?pagina=app/paginas/locacoes/cadastro.php"; ?> class="btn btn-primary btn-sm">Nova locação</a>
    </div>
</div>