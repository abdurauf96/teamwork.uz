
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Окно Администратора</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin/fontawesome/css/all.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="/admin/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin/css/my.css" rel="stylesheet" type="text/css" />
    
    <link href="/admin/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    {{-- <link href="/admin/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" /> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/css/fileinput.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/themes/explorer/theme.min.css" rel="stylesheet" type="text/css" />
    @yield('css')
  </head>
  <body class="skin-blue">
    <!-- Site wrapper -->
    <div class="wrapper">
      
      <header class="main-header">
        <a href="/dashboard" class="logo">
            <img src="/img/logo.svg" style="width:33px;" alt="">
            <b>Admin Panel</b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">      
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="/img/logo.svg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs">Teamwork.uz</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="/img/logo.svg" class="img-circle" alt="User Image" />
                    <p>
                        Teamwork.uz
                      <small>2021</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Профиль</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{ route('logout') }}" class="btn btn-default btn-flat"   onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">Выйти</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="/admin/images/admin.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Абдурауф Сайдалиев</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online </a>
            </div>
          </div>
          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          
          <ul class="sidebar-menu "> 
            @foreach($laravelAdminMenus->menus as $section)
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>{{ $section->section }}</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              @if($section->items)
              <ul class="treeview-menu" >
                @foreach($section->items as $menu)
                <li><a class="menu-url" href="{{ url($menu->url) }}"><i class="fa fa-circle-o"></i> {{ $menu->title }}</a></li>
                @endforeach
              </ul>
              @endif
            </li>
            @endforeach
          </ul>
          
         
      </aside>

      <!-- =============================================== -->

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <main class="py-4">
          @if (Session::has('flash_message'))
              <div class="container">
                  <div class=" col-lg-4 alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      {{ Session::get('flash_message') }}
                  </div>
              </div>
          @endif
        </main>
        <!-- Main content -->
        <section class="content">
             @yield('content')
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
       
      </footer>
    </div><!-- ./wrapper -->
    
    <!-- jQuery 2.1.3 -->
    <script src="/admin/js/jquery.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="/admin/js/bootstrap.min.js" type="text/javascript"></script>
    
    <!-- AdminLTE App -->
    <script src="/admin/js/app.min.js" type="text/javascript"></script>
    <script src="/admin/js/my.js" type="text/javascript"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/js/fileinput.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/themes/explorer/theme.min.css'></script>
    {{-- <script src="/js/jquery.dataTables.js" type="text/javascript"></script>
    <script src="/js/dataTables.bootstrap.js" type="text/javascript"></script> --}}
  

   
   
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.8.1/tinymce.min.js"></script>
   <script type="text/javascript">
       tinymce.init({
           selector: '.crud-richtext'
       });
   </script>
   <script type="text/javascript">
       $(function () {
           // Navigation active
           $('ul.navbar-nav a[href="{{ "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" }}"]').closest('li').addClass('active');
       });
   </script>
    @yield('js')
    
  </body>
</html>

{{-- <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li><a href="{{ url('/dashboard') }}">Dashboard <span class="sr-only">(current)</span></a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
                            <li><a class="nav-link" href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @if (Session::has('flash_message'))
                <div class="container">
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ Session::get('flash_message') }}
                    </div>
                </div>
            @endif

            @yield('content')
        </main>

        <hr/>

        <div class="container">
            &copy; {{ date('Y') }}. Created by <a href="http://www.appzcoder.com">AppzCoder</a>
            <br/>
        </div>

    </div>

    <!-- Scripts -->
    
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.8.1/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '.crud-richtext'
        });
    </script>
    <script type="text/javascript">
        $(function () {
            // Navigation active
            $('ul.navbar-nav a[href="{{ "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" }}"]').closest('li').addClass('active');
        });
    </script>

    @yield('scripts')
</body>
</html> --}}
