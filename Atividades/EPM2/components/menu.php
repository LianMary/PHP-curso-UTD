<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading"> Paineis </div>
            <a class="nav-link" href="index.html">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Página Inicial
            </a>

            <div class="sb-sidenav-menu-heading">Indice</div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProducts" aria-expanded="false" aria-controls="collapseProducts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Produtos
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <!--Adicionar ou listar produtos a serem comprados -->
            <div class="collapse" id="collapseProducts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="?page=listProducts">Lista de Produtos</a>
                    <a class="nav-link" href="?page=addProducts"> Adicionar Produto</a>
                </nav>
            </div>

            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseClients" aria-expanded="false" aria-controls="collapseClients">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Clientes
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
           <!-- Cadastro de usuários que irão participar da lista colaborativa-->
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseUsers" aria-expanded="false" aria-controls="collapseUsers">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Usuários
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <!-- Listar ou Adicionar Pessoas a lista -->
            <div class="collapse" id="collapseUsers" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="?page=listPeople">Lista de Pessoass</a>
                    <a class="nav-link" href="?page=addPeople">Adicionar Pessoas</a>
                </nav>
            </div>
            <!-- FIM -->
           
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Start Bootstrap
    </div>
</nav>