<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>{{ $title }}</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/png">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <!--====== Glide CSS ======-->
    <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{ asset('css/LineIcons.2.0.css') }}">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-5.0.0-beta1.min.css') }}">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->
    @include('home.layout.header')
    <!--====== HEADER PART ENDS ======-->

    <!--====== FEATURES PART START ======-->
    @yield('content')
    <!--====== FEATURES PART ENDS ======-->




    <!--====== FOOTER PART START ======-->
    @include('home.layout.footer')
    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->


    <!--====== Bootstrap js ======-->
    <script src="{{ asset('js/bootstrap.bundle-5.0.0-beta1.min.js') }}"></script>

    <!--====== glide js ======-->
    <script src="{{ asset('js/tiny-slider.js') }}"></script>

    <!--====== wow js ======-->
    <script src="{{ asset('js/wow.min.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- Simpan kode di atas pada halaman yang membutuhkan fitur ini (misalnya di bagian <head> atau sebelum akhir <body> -->
    <script>
        window.onscroll = function() {
            var header_navbar = document.getElementById("header_navbar");
            var logo = document.querySelector("img#logo");
            var sticky = header_navbar.offsetTop;

            if (window.pageYOffset > sticky) {
                header_navbar.classList.add("sticky");
                logo.src = "{{ asset('images/logo.png') }}"; // Gunakan asset() untuk menghasilkan URL
            } else {
                header_navbar.classList.remove("sticky");
                logo.src = "{{ asset('images/logo.png') }}"; // Gunakan asset() untuk menghasilkan URL
            }

            // show or hide the back-top-top button
            var backToTo = document.querySelector(".back-to-top");
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                backToTo.style.display = "block";
            } else {
                backToTo.style.display = "none";
            }
        }
    </script>


</body>

</html>
