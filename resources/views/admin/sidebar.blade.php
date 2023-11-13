
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 warna-sidebar">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                    id="tentang">
                    <li class="nav-item">
                        <a href="{{ route('landing.index') }}" class="nav-link align-middle px-0">
                            <i class="fa-solid fa-house fa-2xl" style="color: #ffffff;"></i> <span
                                class="ms-1 d-none d-sm-inline"></span>
                        </a>
                    </li>
                    <br>
                    <hr width="50px" size="10" align="left" color="black">
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="tentang">
                        <li class="nav-item">
                            <a href="{{ route('tentang.index') }}" class="nav-link align-middle px-0">
                                <i class="fa-solid fa-circle-info fa-xl" style="color: #ffffff;"></i> <span
                                    class="ms-1 d-none d-sm-inline">Tentang</span>
                            </a>
                        </li>
                        <br>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                            id="produk">
                            <li class="nav-item">
                                <a href="{{ route('produk.index') }}" class="nav-link align-middle px-0">
                                    <i class="fa-solid fa-image fa-xl" style="color: #ffffff;"></i> <span
                                        class="ms-1 d-none d-sm-inline">Produk</span>
                                </a>
                            </li>
                            <br>
                            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                                id="unggulan">
                                <li class="nav-item">
                                    <a href="{{ route('unggulan.index') }}" class="nav-link align-middle px-0">
                                        <i class="fa-solid fa-star fa-xl" style="color: #ffffff;"></i> <span
                                            class="ms-1 d-none d-sm-inline">Unggulan</span>
                                    </a>
                                </li>
                                <br>
                                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                                    id="form">
                                    <li class="nav-item">
                                        <a href="{{ route('form.index') }}" class="nav-link align-middle px-0">
                                            <i class="fa-solid fa-comment-dots fa-xl" style="color: #ffffff;"></i> <span
                                                class="ms-1 d-none d-sm-inline">Form</span>
                                        </a>
                                    </li>
                                    <br>
                                    <br>

                                    <form method="POST" action="{{ route('admin.logout') }}">
                                        @csrf
                                        <button type="submit" class="btn btn-pink"><i
                                                class="fa-solid fa-arrow-right-from-bracket fa-2xl"
                                                style="color: #d178ac;"></i></i></button>
                                    </form>
                                    </li>
                                </ul>
            </div>
        </div>
    </div>
</div>


{{-- <script>
function openLink(evt, animName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(animName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script> --}}

{{-- <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-sidebar w3-bar-block w3-primary w3-card" style="width:200px">
  <h5 class="w3-bar-item">Menu</h5>
  <button class="w3-bar-item w3-button " >Fade</button>
  <button class="w3-bar-item w3-button tablink">Left</button>
  <button class="w3-bar-item w3-button tablink">Right</button>
  <button class="w3-bar-item w3-button tablink" >Top</button>
  <button class="w3-bar-item w3-button tablink">Bottom</button>
  <button class="w3-button w3-block w3-red w3-left-align">Button</button>
</div>J

<div style="margin-left:130px"> --}}
