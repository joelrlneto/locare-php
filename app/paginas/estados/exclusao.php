<div class="card">
    <div class="card-body">
        <h4 class="card-title">Excluir estado de conservação</h4>
        <p class="card-text">Deseja realmente excluir esse estado de conservação?</p>
        <form action="/locadora/app/funcoes/estados/excluir.php" method="post">
            <input type="hidden" value="<?php echo $_GET['est_codigo']?>" name="est_codigo">
            <input type="submit" class="btn btn-danger" value="Excluir">
        </form>
    </div>
</div>