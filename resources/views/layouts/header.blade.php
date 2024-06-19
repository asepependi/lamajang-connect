<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="C624-PS052">
<meta name="description" content="Aplikasi Lamajang Connect">
<meta name="dicoding:email" content="asepependi142@ubs.ac.id">
<link rel="icon" href="/img/Logo.png" type="image/x-icon">
<title>Lamajang Connect</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Custom fonts for this template-->
@vite(['vendor/fontawesome-free/css/all.min.css'])
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
    <!-- DataTable -->
<link rel="stylesheet" href="{{ asset('datatables/css/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('sweetalert2/sweetalert2.min.css')}}" type="text/css">
<!-- Custom styles for this template-->
@vite(['resources/css/sb-admin-2.min.css', 'resources/js/sb-admin-2.min.js'])
@yield('css')
