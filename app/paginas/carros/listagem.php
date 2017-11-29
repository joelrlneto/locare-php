<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    $query = $conexao->query("SELECT CAR_CODIGO, CAR_MODELO, CAR_ALUGUEL, CAR_KM, CAR_DISPONIVEL, COR_COR, MAR_MARCA, EST_ESTADO FROM VW_CARROS");
?>

<div class="card">
    <div class="card-header">
        Cadastro de carros
    </div>
    <table class="table table-hover table-striped table-bordered">
        <thead>
            <tr>
                <th>Código</th>
                <th>Modelo</th>
                <th>Aluguel</th>
                <th>Quilometragem</th>
                <th>Cor</th>
                <th>Marca</th>
                <th>Estado</th>                
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php while($carro = $query->fetch(PDO::FETCH_ASSOC)){ ?>
                <tr class="<?php echo $carro['CAR_DISPONIVEL'] == 's' ? 'text-success':'text-danger'; ?>">
                    <td>
                        <?php echo $carro['CAR_CODIGO']; ?>
                    </td>
                    <td>
                        <?php echo $carro['CAR_MODELO']; ?>
                    </td>
                    <td>
                        R$ <?php echo $carro['CAR_ALUGUEL']; ?>
                    </td>
                    <td>
                        <?php echo $carro['CAR_KM']; ?>
                    </td>
                    <td>
                        <?php echo $carro['COR_COR']; ?>
                    </td>
                    <td>
                        <?php echo $carro['MAR_MARCA']; ?>
                    </td>
                    <td>
                        <?php echo $carro['EST_ESTADO']; ?>
                    </td>
                    <td>
                        <a href=<?php echo "/locadora/?pagina=app/paginas/carros/exclusao.php&car_codigo={$carro['CAR_CODIGO']}"; ?> class="btn btn-danger btn-sm">Excluir</a>
                        <a href=<?php echo "/locadora/?pagina=app/paginas/carros/edicao.php&car_codigo={$carro['CAR_CODIGO']}"; ?> class="btn btn-primary btn-sm">Editar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="card-footer">
        <a href=<?php echo "/locadora/?pagina=app/paginas/carros/cadastro.php"; ?> class="btn btn-primary btn-sm">Cadastrar novo carro</a>
    </div>
</div>