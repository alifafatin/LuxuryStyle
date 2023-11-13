<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    @stack('addCss')
    <link rel="stylesheet" href="styleadmin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styleadmin.css" />

    <link rel="icon" type="image/png" sizes="100x100" href="{{ asset('img/logo.jpg') }}">
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="background-color: #fdbde2">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <br>
                    <a href="{{ route('landing.index') }}"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <i class="fa-solid fa-house-user fa-2xl" style="color: #ffffff;"></i> <span class="ms-1 d-none d-sm-inline"></span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <br>
                        <li class="nav-item">
                            <a href="{{ route('tentang.index') }}" class="nav-link align-middle px-0">
                                <i class="fa-solid fa-circle-info fa-xl" style="color: #ffffff;"></i> <span class="ms-1 d-none d-sm-inline" >Tentang</span>
                            </a>
                            <br>
                            <a href="{{ route('produk.index') }}" class="nav-link align-middle px-0">
                                <i class="fa-solid fa-image fa-xl" style="color: #ffffff;"></i> <span class="ms-1 d-none d-sm-inline">Produk</span>
                            </a>
                            <br>
                            <a href="{{ route('unggulan.index') }}" class="nav-link align-middle px-0">
                                <i class="fa-solid fa-star fa-xl" style="color: #ffffff;"></i> <span class="ms-1 d-none d-sm-inline">Unggulan</span>
                            </a>
                            <br>
                            <a href="{{ route('form.index') }}" class="nav-link align-middle px-0">
                                <i class="fa-solid fa-comment fa-xl" style="color: #ffffff;"></i> <span class="ms-1 d-none d-sm-inline">From</span>
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#"
                            class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('img/logo.jpg') }}" alt="hugenerd" width="30" height="30"
                                class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">Admin</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <form method="POST" action="{{ route('admin.logout') }}">
                                @csrf
                                <li>
                                    <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col py-3">
                @yield('content')
            </div>
        </div>
    </div>


    @stack('addJs')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    {{-- @include('component.main-script-admin') --}}
</body>

</html>


