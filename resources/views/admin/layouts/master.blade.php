<!DOCTYPE html>
<html lang="en">

@include('admin.includes.head')

@yield('stylesheets')

<body>
<!-- ============================================================== -->
<!-- Preloader -->
<!-- ============================================================== -->
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
@include('admin.includes.navbar')

    <div class="app-main">
<!-- End Top Navigation -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
@include('admin.includes.sidebar')
<!-- ============================================================== -->
    <!-- End Left Sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page Content -->
    <!-- ============================================================== -->


    @yield('content')
    <!-- /.container-fluid -->
        @include('admin.includes.footer')
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- jQuery -->
@include('admin.includes.footer-scripts')

@yield('scripts')

</body>
</html>

