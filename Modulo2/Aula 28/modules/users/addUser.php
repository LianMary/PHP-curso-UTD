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
            <!-- Conteúdo real da página -->
            <form action="<?= $GLOBALS['urlBase']; ?>/modules/users/users.php" method="POST" class="form-horizontal mt-4" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="wpf:name" style="color: #198754;"></span> Nome Completo </label>
                            <input name="fullName" type="text" class="form-control" id="exampleFormControlInput1" placeholder1="Nome do Cliente">
                        </div>

                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="ic:twotone-email" style="color: #198754;"></span> Email </label>
                            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder1="Nome do Produto">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="fa6-solid:key" style="color: #198754;"></span> Senha </label>
                            <input name="password" type="password" class="form-control" id="exampleFormControlInput1" placeholder1="Nome do Produto">
                        </div>
                    </div>


                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="fa6-solid:address-card" style="color: #198754;"></span> CPF </label>
                            <input name="document" type="text" class="form-control cpf" id="exampleFormControlInput1" placeholder1="Nome do Produto">
                        </div>
                    </div>



                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="ph:phone-fill" style="color: #198754;"></span> Contato </label>
                            <input name="phone" type="text" class="form-control telefone" id="exampleFormControlInput1" placeholder1="Nome do Produto">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="fa6-solid:image" style="color: #198754;"></span> Foto de Perfil </label>
                            <input id="file_upload" name="file" type="file" class="form-control" id="exampleFormControlInput1" placeholder1="Nome do Produto" accept="image/*" onblur="validate2();">
                        </div>
                    </div>

                    <input type="hidden" value="insert" name="action">

                    <div class="col-12 mt-3">
                        <p class="text-end">
                            <button class="btn btn-outline-success">
                                <span class="iconify" data-icon="material-symbols:save-sharp" style="color: #198754;"></span>
                                Salvar Dados
                            </button>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function validate() {
        var size = 20715; //20.xx kb
        var file_size = document.getElementById('file_upload').files[0].size;
        if (file_size >= size) {
            alert('Tamanho máximo de 20 kb');
            document.getElementById('file_upload').value='';
            return false;
        }
        
        // var type = 'image/*';
        // var file_type = document.getElementById('file_upload').files[0].type;
        // if (file_type != type) {
        //     alert('Format not supported,Only .jpeg images are accepted');
        //     document.getElementById('file_upload').value='';
        //     return false;
        // }
    }
</script>