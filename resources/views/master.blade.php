<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.head')
@yield('css')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
@include('includes.navbar')
  <!-- /.navbar -->

@include('includes.sidebar')


  <!-- Content Wrapper. Contains page content -->

@yield('content')
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2022 <a href="https://adminlte.io">Direktorat Penindakan</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('includes.footscript')
@yield('scripts')
</body>
</html>
