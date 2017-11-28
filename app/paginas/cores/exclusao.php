<div class="card">
    <div class="card-body">
        <h4 class="card-title">Excluir cor</h4>
        <p class="card-text">Deseja realmente excluir essa cor?</p>
        <form action="/locadora/app/funcoes/cores/excluir.php" method="post">
            <input type="hidden" value="<?php echo $_GET['cor_codigo']?>" name="cor_codigo">
            <input type="submit" class="btn btn-danger" value="Excluir">
        </form>
    </div>
</div>