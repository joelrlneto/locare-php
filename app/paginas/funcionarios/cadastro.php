<form action="/locadora/app/funcoes/funcionarios/cadastrar.php" method="post">
    <div class="card">
        <div class="card-header">
            Cadastrar funcionário
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <label for="fun_funcionario">Nome do funcionário</label>
                    <input type="text" value="" class="form-control" name="fun_funcionario" autofocus> 
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="fun_data_admissao">Data de admissão</label>
                    <input type="date" value="" class="form-control" name="fun_data_admissao" required> 
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="fun_data_demissao">Data de demissão</label>
                    <input type="date" value="" class="form-control" name="fun_data_demissao"> 
                </div>
            </div>
        </div>
        <div class="card-footer">
            <input type="submit" class="btn btn-primary" value="Cadastrar">
        </div>
    </div>
</form>