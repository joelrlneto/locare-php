<div class="card">
    <div class="card-body">
        <h4 class="card-title">Excluir carro</h4>
        <p class="card-text">Deseja realmente excluir esse carro?</p>
        <form action="/locadora/app/funcoes/carros/excluir.php" method="post">
            <input type="hidden" value="<?php echo $_GET['car_codigo']?>" name="car_codigo">
            <input type="submit" class="btn btn-danger" value="Excluir">
        </form>
    </div>
</div>