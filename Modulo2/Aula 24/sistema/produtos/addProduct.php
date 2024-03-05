<?php

    $forn = file("../fornecedores/database.fornecedores.txt");

    foreach($forn as $f){
      $fornT[] = explode(" - ", $f);
    }

    var_dump($fornT);
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Nice lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Nice admin lite design, Nice admin lite dashboard bootstrap 5 dashboard template" />
  <meta name="description" content="Nice Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
  <meta name="robots" content="noindex,nofollow" />
  <title>Nice Admin Lite Template by WrapPixel</title>
  <link rel="canonical" href="https://www.wrappixel.com/templates/niceadmin-lite/" />
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png" />
  <!-- Custom CSS -->
  <link href="../../dist/css/style.min.css" rel="stylesheet" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin6">
      <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <div class="navbar-header" data-logobg="skin5">
          <!-- This is for the sidebar toggle which is visible on mobile only -->
          <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
            <i class="ti-menu ti-close"></i>
          </a>
          <!-- ============================================================== -->
          <!-- Logo -->
          <!-- ============================================================== -->
          <div class="navbar-brand">
            <a href="index.html" class="logo">
              <!-- Logo icon -->
              <b class="logo-icon">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img src="../../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                <!-- Light Logo icon -->
                <img src="../../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text">
                <!-- dark Logo text -->
                <img src="../../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                <!-- Light Logo text -->
                <img src="../../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
              </span>
            </a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Toggle which is visible on mobile only -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
          <!-- ============================================================== -->
          <!-- toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav float-start me-auto">
            <!-- ============================================================== -->
            <!-- Search -->
            <!-- ============================================================== -->
            <li class="nav-item search-box">
              <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                <div class="d-flex align-items-center">
                  <i class="mdi mdi-magnify font-20 me-1"></i>
                  <div class="ms-1 d-none d-sm-block">
                    <span>Search</span>
                  </div>
                </div>
              </a>
              <form class="app-search position-absolute">
                <input type="text" class="form-control" placeholder="Search &amp; enter" />
                <a class="srh-btn">
                  <i class="mdi mdi mdi-close"></i>
                </a>
              </form>
            </li>
          </ul>
          <!-- ============================================================== -->
          <!-- Right side toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav float-end">
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
              <a class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31" />
              </a>
              <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-account m-r-5 m-l-5"></i> My Profile</a>
                <a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-wallet m-r-5 m-l-5"></i> My Balance</a>
                <a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-email m-r-5 m-l-5"></i> Inbox</a>
              </ul>
            </li>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
          </ul>
        </div>
      </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar" data-sidebarbg="skin5">
      <!-- Sidebar scroll-->
      <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
          <ul id="sidebarnav">
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://localhost/aula24/sistema/dashboard/" aria-expanded="false">
                <i class="mdi mdi-av-timer"></i>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://localhost/aula24/sistema/produtos/" aria-expanded="false">
                <i class="mdi mdi-account-network"></i>
                <span class="hide-menu">Produtos</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://localhost/aula24/sistema/fornecedores/" aria-expanded="false">
                <i class="mdi mdi-arrange-bring-forward"></i>
                <span class="hide-menu">Fornecedores</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://localhost/aula24/sistema/clientes/" aria-expanded="false">
                <i class="mdi mdi-border-none"></i>
                <span class="hide-menu">Clientes</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://localhost/aula24/sistema/vendas/" aria-expanded="false">
                <i class="mdi mdi-face"></i>
                <span class="hide-menu">Vendas</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://localhost/aula24/" aria-expanded="false">
                <i class="mdi mdi-file"></i>
                <span class="hide-menu">Sair</span>
              </a>
            </li>

          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="page-breadcrumb">
        <div class="row">
          <div class="col-5 align-self-center">
            <h4 class="page-title">Adicionar Produto</h4>
          </div>
          <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="listProduct.php">Listagem de Produtos</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Adicionar Produto
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- End Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Container fluid  -->
      <!-- ============================================================== -->
      <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
          <div class="col-12">
            <div class="card card-body">
              <h4 class="card-title">Adição de Produtos</h4>
              <h5 class="card-subtitle">Preencha os dados conforme seus campos</h5>

              <form action="product.php" method="POST" class="form-horizontal mt-4">
                <div class="row">
                  <div class="col-6">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="wpf:name" style="color: #198754;"></span> Descriçao </label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder1="Nome do Produto" name="productDescription">
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="wpf:name" style="color: #198754;"></span> Fornecedor </label>
                      <select name="fornecedor" class="form-control" id="">
                        <option disabled >-- SELECIONE O FORNECEDOR -- </option>
                        <?php foreach($fornT as $f): ?>
                          <option value="<?=$f[0];?>"><?=$f[0];?> - <?=$f[1];?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="wpf:name" style="color: #198754;"></span> Código Interno </label>
                      <input type="text" class="form-control" placeholder1="Nome do Produto" name="productCode" id="internalCode">
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="wpf:name" style="color: #198754;"></span> Código de Barras (EAN) </label>
                      <input type="text" class="form-control" placeholder1="Nome do Produto" name="productBarcode" id="barcode">
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="wpf:name" style="color: #198754;"></span> Preço de Compra </label>
                      <input type="text" class="form-control" placeholder1="Nome do Produto" name="productBuyPrice" id="price1">
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="wpf:name" style="color: #198754;"></span> Preço de Venda </label>
                      <input type="text" class="form-control" placeholder1="Nome do Produto" name="productSalePrice" id="price2">
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="wpf:name" style="color: #198754;"></span> Estoque </label>
                      <input type="text" class="form-control" placeholder1="Nome do Produto" name="productInventory" id="stock">
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label"><span class="iconify" data-icon="wpf:name" style="color: #198754;"></span> Imagem (Link) </label>
                      <input type="text" class="form-control" placeholder1="Nome do Produto" name="productImage">
                    </div>
                  </div>

                  <input type="hidden" name="action" value="insert">

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
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Container fluid  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- footer -->
      <!-- ============================================================== -->
      <footer class="footer text-center">
        All Rights Reserved by Nice admin. Designed and Developed by
        <a href="https://www.wrappixel.com">WrapPixel</a>.
      </footer>
      <!-- ============================================================== -->
      <!-- End footer -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- All Jquery -->
  <!-- ============================================================== -->
  <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- slimscrollbar scrollbar JavaScript -->
  <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
  <!--Wave Effects -->
  <script src="../../dist/js/waves.js"></script>
  <!--Menu sidebar -->
  <script src="../../dist/js/sidebarmenu.js"></script>
  <!--Custom JavaScript -->
  <script src="../../dist/js/custom.min.js"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/0.9.0/jquery.mask.min.js"></script>
  <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#price1').mask('000.000,00', {
        reverse: true
      });
      $('#price2').mask('000.000,00', {
        reverse: true
      });
      $('#barcode').mask('0000000000000');
      $('#stock').mask('0000');
      //$('#internalCode').mask('00000000000000');
    });
  </script>
</body>

</html>