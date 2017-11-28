<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    
    $fun_codigo = $_GET['fun_codigo'];

    $query = $conexao->query("SELECT FUN_CODIGO, FUN_FUNCIONARIO, FUN_DATA_ADMISSAO, FUN_DATA_DEMISSAO FROM TB_FUNCIONARIOS WHERE FUN_CODIGO = {$fun_codigo}");
    
    $funcionario = $query->fetch(PDO::FETCH_ASSOC);
?>

<form action="/locadora/app/funcoes/funcionarios/editar.php" method="post">
    <div class="card">
        <div class="card-header">
            Editar funcionário
        </div>
        <div class="card-body">
            <input type="hidden" value="<?php echo $funcionario['FUN_CODIGO']; ?>" name="fun_codigo">
            <div class="row">
                <div class="col">
                    <label for="fun_funcionario">Nome do funcionário</label>
                    <input type="text" value="<?php echo $funcionario['FUN_FUNCIONARIO']; ?>" class="form-control" name="fun_funcionario" autofocus> 
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="fun_data_admissao">Data de admissão</label>
                    <input type="date" value="<?php echo $funcionario['FUN_DATA_ADMISSAO']; ?>" class="form-control" name="fun_data_admissao" required> 
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="fun_data_demissao">Data de demissão</label>
                    <input type="date" value="<?php echo $funcionario['FUN_DATA_DEMISSAO']; ?>" class="form-control" name="fun_data_demissao"> 
                </div>
            </div>
        </div>
        <div class="card-footer">
            <input type="submit" class="btn btn-primary" value="Editar">
        </div>
    </div>
</form>