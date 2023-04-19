<!DOCTYPE html>
<html lang="en">
@include('elements.head')
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  @yield('navbar')

  @yield('sidebar')

  @yield('content')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  @include('elements.footer')
</div>
<!-- ./wrapper -->

@include('elements.scripts')
@yield('scripts')
</body>
</html>
