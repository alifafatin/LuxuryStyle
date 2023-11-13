<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>D'Luxury</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="icon" type="image/png" sizes="100x100" href="{{ asset('img/logo.jpg') }}">

    <link rel="stylesheet" href="style.css" />
</head>
<body>
    @include('partials.navbar')
    <div class="container">
    @yield('container')
    </div>
    @include('partials.footer')
</body>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js "></script> --}}
</html>
