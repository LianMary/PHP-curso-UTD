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
            <table class="table table-bordered table-hover table-stripped" id="datatablesSimple">
                <thead class="text-center">
                    <th>Foto</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>CPF</th>
                    <th>Contato</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    <?php foreach ($data as $key => $dt) : ?>
                        <?php $token = base64_encode($dt); ?>
                        <?php $dt = explode(" - ", $dt); ?>
                        <tr>
                            <td class="text-center"><img src='<?= $GLOBALS['urlBase']."/uploads/users/profile-pictures/".$dt[5]; ?>' class="img-fluid" width="50"></td>
                            <td><?= $dt[0]; ?></td>
                            <td><?= $dt[1]; ?></td>
                            <td><?= $dt[3]; ?></td>
                            <td><?= $dt[4]; ?></td>                                                        
                            <td>

                                <a href="?page=editUsers&id=<?= $key; ?>&token=<?= $token; ?>" class="btn btn-sm btn-secondary">
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
                                    <form action="users.php" method="POST">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                    Excluir Usuário
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Tem certeza que deseja excluir o usuário
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


        </div>
    </div>
</div>