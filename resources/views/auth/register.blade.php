<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lamajang Connect</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="sweetalert2/sweetalert2.min.css" type="text/css">
    <!-- Custom  sCss -->
    {{-- <link rel="stylesheet" type="text/css" href="css/style.css" /> --}}
    <script src="sweetalert2/sweetalert2.min.js"></script>
    @vite(['resources/css/bootstrap.min.css','resources/css/style.css'])
</head>
<body>
    <div class="LoginV1">
        <img class="BgCover1" src="images/bg-cover 2.png" alt="Background Cover" />
        <div class="Rectangle28"></div>
        <div class="Rectangle27"></div>
        <form method="POST" action="{{ route('register.store') }}">
            @csrf
            <button type="submit">
                <div class="Group20">
                    <div class="Rectangle3"></div>
                    <div class="Masuk">DAFTAR</div>
                </div>
            </button>
            <div class="Login">Daftar</div>
            <div class="Username">Nama</div>
            <div>
                <input type="text" id="name" class="Rectangle651" name="name" autocomplete="off">
            </div>
            <div>
                <input type="password" id="password" class="Rectangle646" name="password" autocomplete="off">
            </div>
            <div class="Password">Kata Sandi</div>
            <a href="{{ route('login') }}">
                <div class="AccountLink">
                    <span>Sudah punya akun ? </span><span class="Highlight">Masuk disini</span>
                </div>
            </a>
        </form>
    </div>
    <script type="module">
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
</body>
</html>
