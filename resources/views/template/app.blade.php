<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>laravel Blog</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css')}}" />

    <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">

    <link type="text/css" rel="stylesheet" href="{{asset('front/css/style.css')}}" />
</head>

<body>

    <!-- Header -->
    <header id="header">
        <!-- Nav -->
        <div id="nav">
            <!-- Main Nav -->
            <div id="nav-fixed">
                <div class="container">
                    <!-- logo -->
                    <div class="nav-logo">
                        <a href="#" class="logo"><img src="{{asset('front/img/logo.png')}}" alt=""></a>
                    </div>
                    <!-- /logo -->

                    <!-- nav -->
                    <ul class="nav-menu nav navbar-nav">
                        <li class="cat-1"><a href="/">Home</a></li>
                        <li class="cat-4"><a href="blog">Blog</a></li>
                        <li class="cat-3"><a href="/about">About</a></li>
                        <li class="cat-2"><a href="/kontak">kontak</a></li>
                        <li class="cat-1"><a href="https://portfolio.diazkakaa.repl.co/#inicio">Portofolio</a></li>
                    </ul>
                    <!-- /nav -->

                    <!-- search & aside toggle -->
                    <div class="nav-btns">
                        <button class="aside-btn"><i class="fa fa-bars"></i></button>
                        </div>
                    </div>
                    <!-- /search & aside toggle -->
                </div>
            </div>
            <!-- /Main Nav -->

            <!-- Aside Nav -->
            <div id="nav-aside">
                <!-- nav -->
                <div class="section-row">
                    <ul class="nav-aside-menu">
                        <li><a href="/">Home</a></li>
                        <li><a href="blog">Blog</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/kontak">Kontak</a></li>
      <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-success" type="submit">Log in</button>
                </form>
                    </ul>
                </div>
                <!-- /social links -->

                <!-- aside nav close -->
                <button class="nav-aside-close"><i class="fa fa-times"></i></button>
                <!-- /aside nav close -->
            </div>
            <!-- Aside Nav -->
        </div>
        <!-- /Nav -->
    </header>
    <!-- /Header -->

    @yield('content')


    <!-- Footer -->
    <footer id="footer">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-5">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="/home" class="logo"><img src="{{asset('front/img/logo.png')}}" alt=""></a>
                        </div>
                        <div class="footer-copyright">
                            <span>&copy;
                                <!-- Link back to Colorlib cant be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());

                                </script> All rights reserved | <i class="fa fa-heart-o"
                                    aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Diaz kaka</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-widget">
                                <h3 class="footer-title">Diaz Ibanez Kaka</h3>
                                <ul class="footer-links">
                                   <ki>  <a href="/">Home</a></li>
                                    <li><a href="/about">About</a></li>
                                    <li><a href="/kontak">Kontak</a></li>
                                    <li class="cat-1"><a href="https://portfolio.diazkakaa.repl.co/#inicio">Portofolio</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-widget">
                            </div>
                        </div>
                    </div>
                </div>
        <div class="col-md-3">
        <div class="footer-widget">
            <h3 class="footer-title">Bergabunglah dengan kami</h3>
            <div class="col">
                    <a href="mailto:ankyfzf@gmail.com">
                    <button>
                        Kirim Pesan Melalui Email	<i class="fa fa-paper-plane"></i>
                        <span class="overlay"></span>
                    </button>
                    </a>
                </div>
            <ul class="footer-social">
                <li><a href="https://www.facebook.com/profile.php?id=100015210856170&mibextid=LQQJ4d"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://instagram.com/diaz_kaka?igshid=MmVlMjlkMTBhMg%3D%3D&utm_source=qr"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://wa.me/082229099122"><i class="fa fa-whatsapp"></i></a></li>
                <li><a href="https://youtube.com/@diazkaka3724?si=A9l-t3Ft1hdVZ-Qt"><i class="fa fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>

</div>
<!-- /row -->
</div>
<!-- /container -->
</footer>
<!-- /Footer -->

<!-- jQuery Plugins -->
<script src="{{asset('front/js/jquery.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/main.js')}}"></script>

</body>

</html>