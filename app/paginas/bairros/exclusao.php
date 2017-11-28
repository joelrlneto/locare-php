<div class="card">
    <div class="card-body">
        <h4 class="card-title">Excluir bairro</h4>
        <p class="card-text">Deseja realmente excluir esse bairro?</p>
        <form action="/locadora/app/funcoes/bairros/excluir.php" method="post">
            <input type="hidden" value="<?php echo $_GET['bai_codigo']?>" name="bai_codigo">
            <input type="submit" class="btn btn-danger" value="Excluir">
        </form>
    </div>
</div>