<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/public/Css_custom/Css_login.css') }}">
</head>

<body>
    {{-- ----- Halaman Konten Login dan Register -------}}
    @yield('content')
    {{-- ----- Halaman Konten Login dan Register -------}}


    <script src="https://kit.fontawesome.com/5b3710b119.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if ($gagal = Session::get('gagal'))
        <script>
            Swal.fire({
                title: "Gagal",
                text: "{{ $gagal }}",
                icon: "error"
            });
        </script>
    @endif
</body>

</html>
