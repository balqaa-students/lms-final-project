<!DOCTYPE html>
<html lang="en">
    @include('dashboard.layouts.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Navbar + preloader -->
    @include('dashboard.layouts.navbar')

    <!-- Main Sidebar Container -->
    @include('dashboard.layouts.sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Breadcrumb -->
        @include('dashboard.layouts.breadcrumb')

        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>
    </div>



    <!-- /.content-wrapper -->
    @include('dashboard.layouts.footer')

    <!-- Control Sidebar -->
    @include('dashboard.layouts.sidebar-controll')
</div>
<!-- ./wrapper -->

    @include('dashboard.layouts.scripts')
    @stack('scripts')
</body>
</html>
