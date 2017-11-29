<div class="card">
    <div class="card-body">
        <h4 class="card-title">Excluir locação</h4>
        <p class="card-text">Deseja realmente excluir essa locação?</p>
        <form action="/locadora/app/funcoes/locacoes/excluir.php" method="post">
            <input type="hidden" value="<?php echo $_GET['loc_codigo']?>" name="loc_codigo">
            <input type="submit" class="btn btn-danger" value="Excluir">
        </form>
    </div>
</div>