<section id="home" class="header_area">
    <div id="header_navbar" class="header_navbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="/">
                            <img id="logo" src="{{ asset('images/logo.png') }}" alt="Logo" style="width: 50px;">
                            <h5 style="color: aliceblue">SMKN1 SINJAI</h5>
                        </a>
                        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a active" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/jadwalkegiatan">Jadwal Kegiatan</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/kegiatan">Kegiatan</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/video">video</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/about">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/contact">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/login">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a href="">{{ $formattedDate }}</a></li>
                            </ul>
                        </div> <!-- navbar collapse -->
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header navbar -->

    <div class="header_hero">
        <div class="single_hero bg_cover d-flex align-items-center"
            style="background-image: url({{ asset('images/SMKN1.jpg') }})">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="hero_content text-center">
                            <h2 class="hero_title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                                SMKN 1 SINJAI</h2>
                            <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">salah satu satuan pendidikan dengan jenjang SMK di Biringere, Kec. Sinjai Utara, Kab. Sinjai, Sulawesi Selatan. Dalam menjalankan kegiatannya, SMKN 1 SINJAI berada di bawah naungan Kementerian Pendidikan dan Kebudayaan.</p>
                            <a href="#features" class="main-btn wow fadeInUp" data-wow-duration="1.3s" 
                                data-wow-delay="0.8s">Explore</a>
                        </div> <!-- hero content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single hero -->
    </div> <!-- header hero -->
</section>