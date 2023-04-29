<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>El Zar del mar</title>
    <link rel="icon" href="./../public/img/fav.png">
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="./../public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./../public/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="./../public/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="./../public/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="./../public/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="./../public/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="./../public/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="./../public/css/mainAdmin.css" rel="stylesheet">
  <link href="./../public/css/styleadmin.css" rel="stylesheet">
  <link href="./../public/fontawesome/css/all.css" rel="stylesheet" >

    <!--  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <!-- SELECT2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- SWAL -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- MASK -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <!-- MORRIS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <!-- BUTTONS DATATABLE  -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"/>
 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <!--  -->
    <!--  -->
    <script src="{{ url('js/funciones.js')}}"></script>
    <!--  -->
</head>

<body class="toggle-sidebar">

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
    <i class="bi bi-list toggle-sidebar-btn"></i>
    &nbsp;&nbsp;
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            
            <span class="d-none d-md-block dropdown-toggle ps-2">Administrador</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>El Zar del mar</h6>
              <span>Administracion</span>
            </li>


            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('closesesion') }}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Cerrar Sesión</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('inicioAdmin') }}">
          {{-- <i class="bi bi-grid"></i> --}}
          <span>Productos</span>
        </a>
      </li>

      {{-- <li class="nav-heading">Pages</li> --}}

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('categorias') }}">
          {{-- <i class="bi bi-person"></i> --}}
          <span>Categorias</span>
        </a>
      </li><!-- End Profile Page Nav -->

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('promociones') }}">
          <span>Promociones</span>
        </a>
      </li> --}}

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

      <section class="section">
        <div class="row">
          <div class="col-lg-12">
  
            <div class="card">
              <div class="card-body">
                
                <!-- Table with stripped rows -->
                @yield('contenido')
                <!-- End Table with stripped rows -->
  
              </div>
            </div>
  
          </div>
        </div>
      </section>

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="./../public/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="./../public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./../public/vendor/chart.js/chart.min.js"></script>
  <script src="./../public/vendor/echarts/echarts.min.js"></script>
  <script src="./../public/vendor/quill/quill.min.js"></script>
  {{-- <script src="./../public/vendor/simple-datatables/simple-datatables.js"></script> --}}
  <script src="./../public/vendor/tinymce/tinymce.min.js"></script>
  <script src="./../public/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="./../public/js/mainAdmin.js"></script>

</body>

</html>