<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Portofolio Admin</title>
  <link rel="stylesheet" href="{{asset('admin')}}/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{asset('admin')}}/vendors/base/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="{{asset('admin')}}/css/style.css">
  <link rel="shortcut icon" href="{{asset('admin')}}/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
          <a class="navbar-brand brand-logo" href="{{ url('dashboard') }}" style="font-weight: 800">ELo</a>
          <a class="navbar-brand brand-logo-mini" href="{{ url('dashboard') }}"><img src="{{asset('admin')}}/images/logo-mini.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="{{asset('admin')}}/images/faces/{{ Auth::user()->avatar}}" alt="profile"/>
              <span class="nav-profile-name">{{ Auth::user()->name}}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="{{ url('auth/logout')}}" >
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('status.index')}}">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Status</span>
            </a>
            <h3 style="text-align: center; padding-top: 15px">About Me</h3>
            <a class="nav-link" href="{{route('currentStatus.index')}}">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Current Status</span>
            </a>
            <a class="nav-link" href="{{route('background.index')}}">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Background</span>
            </a>
            <a class="nav-link" href="{{route('education.index')}}">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Education</span>
            </a>
            <a class="nav-link" href="{{route('experience.index')}}">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Experience</span>
            </a>
            <a class="nav-link" href="{{route('sosials.index')}}">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Socials</span>
            </a>
            <a class="nav-link" href="{{route('jams.index')}}">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Favorite Jams</span>
            </a>
            <h3 style="text-align: center; padding-top: 15px">Skills</h3>
            <a class="nav-link" href="{{route('interest.index')}}">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Interest</span>
            </a>
            <a class="nav-link" href="{{route('otherskill.index')}}">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Other Skills</span>
            </a>
          </li>
        </ul>
      </nav>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  @yield('konten')
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">ELo</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Admin Dashboard</span>
        </div>
        </footer>
      </div>
    </div>
  </div>
  <script src="{{asset('admin')}}/vendors/base/vendor.bundle.base.js"></script>

  <script src="{{asset('admin')}}/vendors/chart.js/Chart.min.js"></script>
  <script src="{{asset('admin')}}/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="{{asset('admin')}}/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>

  <script src="{{asset('admin')}}/js/off-canvas.js"></script>
  <script src="{{asset('admin')}}/js/hoverable-collapse.js"></script>
  <script src="{{asset('admin')}}/js/template.js"></script>

  <script src="{{asset('admin')}}/js/dashboard.js"></script>
  <script src="{{asset('admin')}}/js/data-table.js"></script>
  <script src="{{asset('admin')}}/js/jquery.dataTables.js"></script>
  <script src="{{asset('admin')}}/js/dataTables.bootstrap4.js"></script>

  <script src="{{asset('admin')}}/js/jquery.cookie.js" type="text/javascript"></script>
</body>

</html>
