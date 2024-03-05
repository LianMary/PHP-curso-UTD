<div class="container-fluid px-4">
    <h1 class="mt-4"><?= $titleSection; ?></h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active"><?= $titleSection; ?></li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            <?= $titleSection; ?>
        </div>
        <div class="card-body">
            <?php /*
            <table class="table table-bordered table-hover table-stripped" id="datatablesSimple">
                <thead class="text-center">
                    <th>Imagem</th>
                    <th>Nome</th>
                    <th>Código</th>
                    <th>EAN</th>
                    <th>Preço Compra</th>
                    <th>Preço Venda</th>
                    <th>Estoque</th>
                    <th>Custo</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    <?php foreach ($data as $key => $dt) : ?>
                        <?php $token = base64_encode($dt); ?>
                        <?php $dt = explode(" - ", $dt); ?>
                        <tr>
                            <td class="text-center"><img src='<?= $dt[6]; ?>' class="img-fluid" width="50"></td>
                            <td><?= $dt[0]; ?></td>
                            <td><?= $dt[1]; ?></td>
                            <td><?= $dt[2]; ?></td>
                            <td><?= $dt[3]; ?></td>
                            <td><?= $dt[4]; ?></td>
                            <td><?= $dt[5]; ?></td>
                            <td>R$ <?= number_format((str_replace(",", ".", $dt[3]) * $dt[5]), 2); ?></td>
                            <td>

                                <a href="updateProduct.php?id=<?= $key; ?>&token=<?= $token; ?>" class="btn btn-sm btn-secondary">
                                    <span class="iconify" data-icon="ph:pencil-bold"></span>
                                </a>

                                <button class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal-<?= $key; ?>">
                                    <span class="iconify" data-icon="ph:trash-bold"></span>
                                </button>
                                <button class="btn btn-sm btn-secondary">
                                    <span class="iconify" data-icon="solar:printer-bold"></span>
                                </button>
                            </td>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal-<?= $key; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form action="product.php" method="POST">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                    Excluir Produto
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Tem certeza que deseja excluir o produto
                                                <strong><?= $dt[0]; ?></strong>?
                                            </div>
                                            <input type="hidden" name="action" value="delete">
                                            <input type="hidden" name="id" value="<?= $key; ?>">
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                <button type="submit" class="btn btn-danger">Sim, excluir! </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            */?>
            <?php LibHtml::criarTabela($lista, ["class"=>"table table-bordered table-responsive table-hover table-stripped","id"=>"datatablesSimple"], $links) ?>

        </div>
    </div>
</div>