<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('setting.name') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dataTables.bootstrap.css') }}" rel="stylesheet">

    <!-- elements wizard -->
    <link href="{{ asset('css/wizard.css') }}" rel="stylesheet">


     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">

     <style>
         html,body{
            font-family: 'Abel', sans-serif;
             font-weight: 200;
         }
     </style>
</head>

<body id="page-top">

        <nav class=" navbar navbar-expand navbar-dark bg-info static-top">

        <a class="navbar-brand mr-1" href="{{ url('/home') }}">{{ config('setting.name') }}</a>

          <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
          </button>

          <!-- Navbar Search -->
          <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Rechercher ..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-outline-light" type="button">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Navbar -->
          <ul class="bg-info navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i> {{ Auth::user()->name }}
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                {{-- <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Activity Log</a>
                <div class="dropdown-divider"></div> --}}
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Déconnexion</a>
              </div>
            </li>
          </ul>

        </nav>

        <div id="wrapper">

          <!-- Sidebar -->
          <ul class="bg-dark sidebar navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/home') }}">
                <i class="fas fa-fw fa-home"></i>
                <span>Accueil</span>
              </a>
            </li>
            {{-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Pages</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <h6 class="dropdown-header">Login Screens:</h6>
                <a class="dropdown-item" href="login.html">Login</a>
                <a class="dropdown-item" href="register.html">Register</a>
                <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                <div class="dropdown-divider"></div>
                <h6 class="dropdown-header">Other Pages:</h6>
                <a class="dropdown-item" href="404.html">404 Page</a>
                <a class="dropdown-item active" href="blank.html">Blank Page</a>
              </div>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/new') }}">
                <i class="fas fa-fw fa-map-marked-alt"></i>
                <span>Ajouter un point</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/list') }}">
                <i class="fas fa-fw fa-list-ul"></i>
                <span>Mes points</span></a>
            </li>
          </ul>

          <div id="content-wrapper">

            <div class="container-fluid">



              <!-- Page Content -->
              @yield('content')

            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <footer class="sticky-footer">
              <div class="container my-auto">
                <div class="copyright text-center my-auto">
                  <span>Copyright ©  2018 - </span>
                  <span>Observatoire National de l'Environnement et du Développement Durable</span>
                </div>
              </div>
            </footer>

          </div>
          <!-- /.content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Déconnexion ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">Sélectionnez "Déconnexion" ci-dessous si vous êtes prêt à terminer votre session en cours.</div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf

                </form>
                <a class="btn btn-info" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    Déconnexion
                </a>

              </div>
            </div>
          </div>
        </div>





 <!-- Bootstrap core JavaScript-->
 <script src="{{ asset('js/jquery.min.js') }}"></script>
 <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>



 <!-- Core plugin JavaScript-->
 <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
 <!-- Custom scripts for all pages-->
 <script src="{{ asset('js/sb-admin.min.js') }}"></script>
 <script src="{{ asset('js/wizard.js') }}"></script>


</body>
</html>
