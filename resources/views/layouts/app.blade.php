<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.header')
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                @include('layouts.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <!-- jQuery 3 -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('sweetalert2/sweetalert2.min.js')}}"></script>
    {{-- DataTable --}}
    <script src="{{ asset('datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('datatables/dataTables.bootstrap.min.js') }}"></script>
    {{-- Mask Money --}}
    <script src="{{ asset('js/jquery.maskMoney.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}" type="text/javascript"></script>
    <script>
        @if (Session::has('success'))
            swal({
                title: 'Sukses !',
                text: "{{ Session::get('success')}}",
                type: 'success',
                showCancelButton: false,
                confirmButtonColor: '#30419b',
                confirmButtonText: 'OK',
                allowOutsideClick: false
            });
        @endif
        @if (Session::has('error'))
            swal({
                title: 'Error !',
                text: "{{ Session::get('error')}}",
                type: 'error',
                showCancelButton: false,
                confirmButtonColor: '#30419b',
                confirmButtonText: 'OK',
                allowOutsideClick: false
            });
        @endif
    </script>

    @yield('script')
</body>
</html>
