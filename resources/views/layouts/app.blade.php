<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- Google Font -->
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>LTE</span>
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i>
                <span class="label label-success">4</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 4 messages</li>
                <li>
                  <!-- inner menu: contains the messages -->
                  <ul class="menu">
                    <li><!-- start message -->
                      <a href="#">
                        <div class="pull-left">
                          <!-- User Image -->
                          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <!-- Message title and timestamp -->
                        <h4>
                          Support Team
                          <small><i class="fa fa-clock-o"></i> 5 mins</small>
                        </h4>
                        <!-- The message -->
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                    <!-- end message -->
                  </ul>
                  <!-- /.menu -->
                </li>
                <li class="footer"><a href="#">See All Messages</a></li>
              </ul>
            </li>
            <!-- /.messages-menu -->

            <!-- Notifications Menu -->
            <li class="dropdown notifications-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <!-- Inner Menu: contains the notifications -->
                  <ul class="menu">
                    <li><!-- start notification -->
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                    <!-- end notification -->
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- Tasks Menu -->
            <li class="dropdown tasks-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-flag-o"></i>
                <span class="label label-danger">9</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 9 tasks</li>
                <li>
                  <!-- Inner menu: contains the tasks -->
                  <ul class="menu">
                    <li><!-- Task item -->
                      <a href="#">
                        <!-- Task title and progress text -->
                        <h3>
                          Design some buttons
                          <small class="pull-right">20%</small>
                        </h3>
                        <!-- The progress bar -->
                        <div class="progress xs">
                          <!-- Change the css width attribute to simulate progress -->
                          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                          aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ 'asset(public/images/'.Auth::user()->foto) }}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="{{ 'asset(public/images/'.Auth::user()->foto) }}" class="img-circle" alt="User Image">

                <p>
                  {{ Auth::user()->name}}
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{ route('user.profil') }}" class="btn btn-default btn-flat">Edit Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Log out</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- End Header -->

  <!-- Sidebar -->
  <aside class="main-header">
    <section class="sidebar">
      <ul class="siderbar-menu">
        <li class="header">Menu Navigasi</li>
        <li>
          <a href="{{ route('home') }}">
            <i class="fa fa-dashboard"></i> 
            <span>Dashboard</span>
          </a>
        </li>
        <!-- Untuk Memberi Batas Hak Akses -->
        @if( Auth::user()->level == 1)
        <li>
          <a href="{{ route('kategori.index') }}"> 
            <i class="fa fa-cube"></i>
            <span>Kategori</span>
          </a>
        </li>

        <li>
          <a href="{{ route('produk.index') }}"> 
            <i class="fa fa-cubes"></i>
            <span>Produk</span>
          </a>
        </li>

        <li>
          <a href="{{ route('member.index') }}"> 
            <i class="fa fa-credit-card"></i>
            <span>Member</span>
          </a>
        </li>

        <li>
          <a href="{{ route('supplier.index') }}"> 
            <i class="fa fa-truck"></i>
            <span>Supplier</span>
          </a>
        </li>

        <li>
          <a href="{{ route('pengeluaran.index') }}"> 
            <i class="fa fa-money"></i>
            <span>Pengeluaran</span>
          </a>
        </li>

        <li>
          <a href="{{ route('kategori.index') }}"> 
            <i class="fa fa-cube"></i>
            <span>Kategori</span>
          </a>
        </li>

        <li>
          <a href="{{ route('user.index') }}"> 
            <i class="fa fa-user"></i>
            <span>User</span>
          </a>
        </li>

        <li>
          <a href="{{ route('penjualan.index') }}"> 
            <i class="fa fa-upload"></i>
            <span>Penjualan</span>
          </a>
        </li>

        <li>
          <a href="{{ route('pembelian.index') }}"> 
            <i class="fa fa-download"></i>
            <span>Pembelian</span>
          </a>
        </li>

        <li>
          <a href="{{ route('laporan.index') }}"> 
            <i class="fa fa-file-pdf-o"></i>
            <span>Laporan</span>
          </a>
        </li>

        <li>
          <a href="{{ route('setting.index') }}"> 
            <i class="fa fa-gears"></i>
            <span>Setting</span>
          </a>
        </li>

        @else
        <li>
          <a href="{{ route('transaksi.index') }}"> 
            <i class="fa fa-shopping-cart"></i>
            <span>Transaksi</span>
          </a>
        </li>

        <li>
          <a href="{{ route('transaksi.new') }}"> 
            <i class="fa fa-cart-plus"></i>
            <span>Transaksi</span>
          </a>
        </li>
        @endif
      </ul>
    </section>
  </aside>
  <!-- End Sidebar -->

  <!-- Content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        @yield('title')
      </h1>
      <ol class="breadcrumb">
        @section('breadcrumb')
        <li>
          <a href="#">
            <i class="fa fa-home"></i>
            Home
          </a>
          @show
        </li>
      </ol>
    </section>

    <section class="content">
      @yield('content')
    </section>
  </div>
  <!-- End Content -->

  <!-- Footer -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      Raka Fajar Salinggih
    </div>   
  </footer>

  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="dist/js/adminlte.min.js"></script>

  @yield('script')
</body>
</html>