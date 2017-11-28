<div class="card">
    <div class="card-body">
        <h4 class="card-title">Excluir cliente</h4>
        <p class="card-text">Deseja realmente excluir esse cliente?</p>
        <form action="/locadora/app/funcoes/clientes/excluir.php" method="post">
            <input type="hidden" value="<?php echo $_GET['cli_codigo']?>" name="cli_codigo">
            <input type="submit" class="btn btn-danger" value="Excluir">
        </form>
    </div>
</div>