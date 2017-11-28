<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    $select = "SELECT BAI_CODIGO, BAI_BAIRRO, CID_CIDADE FROM TB_BAIRROS ".
              "INNER JOIN TB_CIDADES ON BAI_CID_CODIGO = CID_CODIGO";
    $query = $conexao->query($select);
?>

<div class="card">
    <div class="card-header">
        Cadastro de bairros
    </div>
    <table class="table table-hover table-striped table-bordered">
        <thead>
            <tr>
                <th>Código</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php while($bairro = $query->fetch(PDO::FETCH_ASSOC)){ ?>
                <tr>
                    <td>
                        <?php echo $bairro['BAI_CODIGO']; ?>
                    </td>
                    <td>
                        <?php echo $bairro['BAI_BAIRRO']; ?>
                    </td>
                    <td>
                        <?php echo $bairro['CID_CIDADE']; ?>
                    </td>
                    <td>
                        <a href=<?php echo "/locadora/?pagina=app/paginas/bairros/exclusao.php&bai_codigo={$bairro['BAI_CODIGO']}"; ?> class="btn btn-danger btn-sm">Excluir</a>
                        <a href=<?php echo "/locadora/?pagina=app/paginas/bairros/edicao.php&bai_codigo={$bairro['BAI_CODIGO']}"; ?> class="btn btn-primary btn-sm">Editar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="card-footer">
        <a href=<?php echo "/locadora/?pagina=app/paginas/bairros/cadastro.php"; ?> class="btn btn-primary btn-sm">Cadastrar novo bairro</a>
    </div>
</div>