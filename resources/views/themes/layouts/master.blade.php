<!DOCTYPE html>
<html lang="en">
@include('themes.includes.header')

<body>

<div id="wrapper">

<!-- Page Content -->
    <div id="page-wrapper">

    @yield('content')

    <!-- /.container-fluid -->
    @include('themes.includes.footer')

    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->


<!-- jQuery -->
@include('themes.includes.scripts')
</body>

</html>
