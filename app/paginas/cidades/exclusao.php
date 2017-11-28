<div class="card">
    <div class="card-body">
        <h4 class="card-title">Excluir cidade</h4>
        <p class="card-text">Deseja realmente excluir essa cidade?</p>
        <form action="/locadora/app/funcoes/cidades/excluir.php" method="post">
            <input type="hidden" value="<?php echo $_GET['cid_codigo']?>" name="cid_codigo">
            <input type="submit" class="btn btn-danger" value="Excluir">
        </form>
    </div>
</div>