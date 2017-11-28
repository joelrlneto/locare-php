<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    $query = $conexao->query("SELECT FUN_CODIGO, FUN_FUNCIONARIO, FUN_DATA_ADMISSAO, FUN_DATA_DEMISSAO FROM TB_FUNCIONARIOS");
?>

<div class="card">
    <div class="card-header">
        Cadastro de funcionários
    </div>
    <table class="table table-hover table-striped table-bordered">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Admissão</th>
                <th>Demissão</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php while($funcionario = $query->fetch(PDO::FETCH_ASSOC)){ ?>
                <tr <?php if ($funcionario['FUN_DATA_DEMISSAO'] != '') echo 'class="text-danger"'; ?>>
                    <td>
                        <?php echo $funcionario['FUN_CODIGO']; ?>
                    </td>
                    <td>
                        <?php echo $funcionario['FUN_FUNCIONARIO']; ?>
                    </td>
                    <td>
                        <?php echo (new DateTime($funcionario['FUN_DATA_ADMISSAO']))->format('d/m/Y'); ?>
                    </td>
                    <td>
                        <?php if ($funcionario['FUN_DATA_DEMISSAO'] != '') echo (new DateTime($funcionario['FUN_DATA_DEMISSAO']))->format('d/m/Y'); ?>
                    </td>
                    <td>
                        <a href=<?php echo "/locadora/?pagina=app/paginas/funcionarios/exclusao.php&fun_codigo={$funcionario['FUN_CODIGO']}"; ?> class="btn btn-danger btn-sm">Excluir</a>
                        <a href=<?php echo "/locadora/?pagina=app/paginas/funcionarios/edicao.php&fun_codigo={$funcionario['FUN_CODIGO']}"; ?> class="btn btn-primary btn-sm">Editar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="card-footer">
        <a href=<?php echo "/locadora/?pagina=app/paginas/funcionarios/cadastro.php"; ?> class="btn btn-primary btn-sm">Cadastrar novo funcionário</a>
    </div>
</div>