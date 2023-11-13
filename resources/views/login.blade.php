<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Tambahkan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="stylelogin.css">
    <link rel="icon" type="image/png" sizes="100x100" href="{{ asset('img/logo.jpg') }}">
</head>
<h2>
</h2>
<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <a href="{{ route('landing.index') }}">
                <img src="{{ asset('img/LogoTransparan.png') }}"
                class="img-fluid" alt="Phone image">
                </a>
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h1>Emank nya kamu bisa login awokawokawok</h1>
                    <h6>Ga bisa ya? Silahkan tap logo sebelah WKWKWK kacian gabisa login</h6>
                    <br>

           <!-- Email -->
            <div class="form-outline mb-4">
                <input type="email" name="email" id="form1Example13" class="form-control form-control-lg" placeholder="Email"/>
            </div>

            <!-- Password -->
            <div class="form-outline mb-4">
                <input type="password" name="password" id="form1Example23" class="form-control form-control-lg"  placeholder="Password"/>
            </div>
            <button type="submit" class="btn">Login</button>
          </form>
            </div>
        </div>
    </div>
  </section>
</html>
