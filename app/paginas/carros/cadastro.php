<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    
    $queryCores   = $conexao->query("SELECT COR_CODIGO, COR_COR FROM TB_CORES");
    $queryEstados = $conexao->query("SELECT EST_CODIGO, EST_ESTADO FROM TB_ESTADOS_CONSERVACAO");
    $queryMarcas  = $conexao->query("SELECT MAR_CODIGO, MAR_MARCA FROM TB_MARCAS");
?>

<form action="/locadora/app/funcoes/carros/cadastrar.php" method="post">
    <div class="card">
        <div class="card-header">
            Cadastrar carro
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <label for="car_modelo">Modelo</label>
                    <input type="text" value="" class="form-control" name="car_modelo" autofocus required> 
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="car_ano">Ano</label>
                    <input type="number" value="" class="form-control" name="car_ano" required> 
                </div>
                <div class="col">
                    <label for="car_aluguel">Valor do aluguel (R$)</label>
                    <input type="text" value="" class="form-control" name="car_aluguel" required> 
                </div>
                <div class="col">
                    <label for="car_km">Quilometragem</label>
                    <input type="number" value="" class="form-control" name="car_km" required> 
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="car_disponivel">Disponível?</label>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" value="s" name="car_disponivel" checked> Sim
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" value="n" name="car_disponivel"> Não
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="car_cor_codigo">Cor </label>
                    <select class="form-control" name="car_cor_codigo">
                    <?php while($cor = $queryCores->fetch(PDO::FETCH_ASSOC)){ ?>
                        <option value="<?php echo $cor['COR_CODIGO']; ?>">
                            <?php echo $cor['COR_COR']; ?>
                        </option>
                    <?php } ?>
                    </select> 
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="car_mar_codigo">Marca </label>
                    <select class="form-control" name="car_mar_codigo">
                    <?php while($marca = $queryMarcas->fetch(PDO::FETCH_ASSOC)){ ?>
                        <option value="<?php echo $marca['MAR_CODIGO']; ?>">
                            <?php echo $marca['MAR_MARCA']; ?>
                        </option>
                    <?php } ?>
                    </select> 
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="car_est_codigo">Estado de conservação </label>
                    <select class="form-control" name="car_est_codigo">
                    <?php while($estado = $queryEstados->fetch(PDO::FETCH_ASSOC)){ ?>
                        <option value="<?php echo $estado['EST_CODIGO']; ?>">
                            <?php echo $estado['EST_ESTADO']; ?>
                        </option>
                    <?php } ?>
                    </select> 
                </div>
            </div>
        </div>
        <div class="card-footer">
            <input type="submit" class="btn btn-primary" value="Cadastrar">
        </div>
    </div>
</form>