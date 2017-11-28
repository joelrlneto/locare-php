<div class="card">
    <div class="card-body">
        <h4 class="card-title">Excluir marca</h4>
        <p class="card-text">Deseja realmente excluir essa marca?</p>
        <form action="/locadora/app/funcoes/marcas/excluir.php" method="post">
            <input type="hidden" value="<?php echo $_GET['mar_codigo']?>" name="mar_codigo">
            <input type="submit" class="btn btn-danger" value="Excluir">
        </form>
    </div>
</div>