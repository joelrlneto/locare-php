<div class="card">
    <div class="card-body">
        <h4 class="card-title">Excluir marca</h4>
        <p class="card-text">Deseja realmente excluir esse funcionário?</p>
        <form action="/locadora/app/funcoes/funcionarios/excluir.php" method="post">
            <input type="hidden" value="<?php echo $_GET['fun_codigo']?>" name="fun_codigo">
            <input type="submit" class="btn btn-danger" value="Excluir">
        </form>
    </div>
</div>