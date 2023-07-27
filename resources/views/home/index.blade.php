@extends('home.layout.content')

@section('content')
    <!--====== SAMBUTAN PART START ======-->
    <section id="about" class="pt-130">
        <div class="about_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about_content pt-120 pb-130">
                            <div class="section_title pb">
                                <h4 class="title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Selamat Datang
                                </h4>
                                <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.4s">Selamat datang di
                                    lingkungan pendidikan kami yang penuh semangat dan dedikasi! Saya, sebagai kepala
                                    sekolah SMK ini, dengan senang hati menyambut Anda semua yang telah datang untuk
                                    menjelajahi peluang pendidikan di sekolah kami.</p>
                            </div> <!-- section title -->
                            <a href="#0" class="main-btn wow fadeInUp" data-wow-duration="1.3s"
                                data-wow-delay="0.7s">Learn More</a>
                        </div> <!-- about content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->

            <div class="about_image bg_cover wow fadeInLeft" data-wow-duration="1.3s" data-wow-delay="0.2s"
                style="background-image: url({{ asset('images/kepsek.jpg') }})">
                <div class="image_content">
                    <h4 class="experience"><span>15</span> Years of Experience</h4>
                </div>
            </div> <!-- about image -->
        </div>
    </section>

    <!--====== SAMBUTAN PART ENDS ======-->

    <!--====== JURUSAN PART START ======-->

    <section id="services" class="features_area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-25">
                        <h4 class="title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Jurusan Sekolah</h4>
                        <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.4s">SMKN1 SINJAI UTARA memiliki 5
                            Jurusan yang dapat dipilih oleh siswa</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_features text-center mt-60 wow fadeInUp" data-wow-duration="1.3s"
                        data-wow-delay="0.2s">
                        <i class="lni lni-briefcase"></i>
                        <h4 class="features_title">Pemasaran</h4>
                        <p>Siapkan diri Anda untuk meraih kesuksesan di dunia pemasaran yang menarik! Bergabunglah dengan
                            Jurusan Pemasaran kami yang inovatif dan dinamis</p>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_features text-center mt-60 wow fadeInUp" data-wow-duration="1.3s"
                        data-wow-delay="0.3s">
                        <i class="lni lni-clipboard"></i>
                        <h4 class="features_title">Tata Busana</h4>
                        <p>Kami dengan bangga mempersembahkan program tata busana terbaik di sekolah ini, di mana Anda dapat
                            menyulam karakter dan mengukir gaya unik Anda sendiri</p>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_features text-center mt-60 wow fadeInUp" data-wow-duration="1.3s"
                        data-wow-delay="0.4s">
                        <i class="lni lni-target-revenue"></i>
                        <h4 class="features_title">Akuntansi</h4>
                        <p>kami yang menginspirasi, di mana kecermatan bertemu dengan kreativitas dalam mengelola dan
                            menganalisis data keuangan. Bergabunglah dengan kami</p>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_features text-center mt-60 wow fadeInUp" data-wow-duration="1.3s"
                        data-wow-delay="0.2s">
                        <i class="lni lni-invention"></i>
                        <h4 class="features_title">Teknik Komputer & Jaringan</h4>
                        <p> Teknik Komputer dan Jaringan kami yang inovatif, di mana Anda akan merajut koneksi digital dan
                            mengeksplorasi dunia teknologi yang terus berkembang</p>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_features text-center mt-60 wow fadeInUp" data-wow-duration="1.3s"
                        data-wow-delay="0.3s">
                        <i class="lni lni-bar-chart"></i>
                        <h4 class="features_title">Adm. Perkantoran</h4>
                        <p>dministrasi Perkantoran kami yang berfokus pada keahlian organisasi, efisiensi, dan manajemen
                            bisnis. Bergabunglah dengan kami dalam meraih keterampilan administrasi yang kuat</p>
                    </div> <!-- single features -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== JURUSAN PART ENDS ======-->

    <!--====== GURU PART START ======-->

    <section id="team" class="team_area pt-120 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title text-center pb-25">
                        <h4 class="title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Guru Berpengalaman
                        </h4>
                        <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.4s">Dengan tahun-tahun pengalaman
                            di bidang pendidikan, guru-guru kami telah menghimpun kebijaksanaan dan pemahaman yang tak
                            ternilai tentang cara terbaik mendidik dan menginspirasi siswa.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center team_active">
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single_team mt-30 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <img src="{{ asset('images/guru2.jpg') }}" alt="team">

                        <div class="team_content">
                            <h4 class="team_name"><a href="#0">DARMAWATI.A</a></h4>
                            <p>Wakil Kepala Sekolah</p>
                            <ul class="social">
                                <li><a href="#0"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="#0"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="#0"><i class="lni lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single_team mt-30 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.3s">
                        <img src="{{ asset('images/guru3.jpg') }}" alt="team">

                        <div class="team_content">
                            <h4 class="team_name"><a href="#0"></a>Muh. Adhar</h4>
                            <p>Sekretaris</p>
                            <ul class="social">
                                <li><a href="#0"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="#0"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="#0"><i class="lni lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single_team mt-30 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.4s">
                        <img src="{{ asset('images/guru4.jpg') }}" alt="team">

                        <div class="team_content">
                            <h4 class="team_name"><a href="#0">HJ. NILAWATI PADDU</a></h4>
                            <p>Bendahara</p>
                            <ul class="social">
                                <li><a href="#0"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="#0"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="#0"><i class="lni lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single team -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== GURU PART ENDS ======-->

    <!--====== ALUMNI PART START ======-->

    <section id="testimonial" class="testimonial_area pt-130 pb-130 bg_cover"
        style="background-image: url({{ asset('images/sekolah2.jpg') }})">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="testimonial_active_wrapper">
                        <div class="testimonial_active">
                            <div class="single_testimonial text-center">
                                <img src="{{ asset('images/reza(1).jpg') }}" alt="author">
                                <h5 class="author_name">Muh Reza Aldi Irawan</h5>
                                <span>Mahasiswa PNUP - Alumni Adm Perkantoran</span>
                                <p>Jurusan TKJ di sekolah ini benar-benar luar biasa! Saya sangat terkesan dengan fasilitas
                                    laboratorium yang modern dan dosen-dosennya yang berpengalaman. Mereka memberikan
                                    pemahaman mendalam tentang jaringan komputer dan pemrograman. Berkat jurusan ini, saya
                                    merasa percaya diri untuk mengejar karir di dunia teknologi informasi</p>
                            </div>
                            <div class="single_testimonial text-center">
                                <img src="{{ asset('images/yus.jpg') }}" alt="author">
                                <h5 class="author_name">Khusnul Awalia Lukman</h5>
                                <span>Mahasiswa PNUP - Alumni Akuntansi</span>
                                <p>Saya sangat berterima kasih telah bergabung dengan Jurusan Akuntansi di sekolah ini.
                                    Kurikulum yang diberikan sangat relevan dengan dunia bisnis, dan para dosen memberikan
                                    pengalaman praktis yang berharga. Saya merasa siap untuk menghadapi tantangan sebagai
                                    seorang akuntan profesional. Jurusan ini benar-benar membuka pintu bagi kesuksesan di
                                    dunia akuntansi.
                                </p>
                            </div>
                            <div class="single_testimonial text-center">
                                <img src="{{ asset('images/wawa.jpg') }}" alt="author">
                                <h5 class="author_name">Yusriani Rahayu</h5>
                                <span>Mahasiswa PNUP - Alumni Pemasaran</span>
                                <p>Bergabung dengan Jurusan Pemasaran di sekolah ini adalah pilihan terbaik yang pernah saya
                                    buat! Materi pembelajaran yang disajikan sangat menarik dan mengikuti tren terbaru di
                                    industri pemasaran. Selain itu, kami juga mendapatkan kesempatan untuk terlibat dalam
                                    proyek praktis yang membantu membangun kreativitas dan keterampilan kepemimpinan.
                                    Jurusan ini membuka peluang karir yang luar biasa di dunia pemasaran yang kompetitif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ALUMNI PART ENDS ======-->

    <!--====== BLOG PART START ======-->

    <section id="blog" class="blog_area pt-120 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-25">
                        <h4 class="title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Kegiatan Terbaru
                        </h4>
                        <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.4s">Kumpulan berita kegiatan
                            terbaru yang telah dilaksanakan oleh SMKN 1 SINJAI</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="single_blog mt-30 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        @foreach ($blog as $b)
                            <div class="blog_image">
                                @if ($b->images)
                                    <img class="card-img card-img-left" src="{{ asset('storage/' . $b->images) }}"
                                        style="width: 800px" alt="Card image" />
                                @else
                                    <img id="logo" src="{{ asset('images/logo.png') }}" alt="Logo">
                                @endif
                            </div>
                            <div class="blog_content">
                                <h3 class="blog_title"><a href="#0">{{ $b->judul }}</a></h3>
                                <p>{{ $b->body }}</p>
                            </div>
                        @endforeach <!-- single blog -->
                    </div>
                </div>
                {{-- <div class="col-lg-6">
                    @foreach ($blog3 as $m)
                   
                    @endforeach
                </div> --}}
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== BLOG PART ENDS ======-->

    <section id="contact" class="contact_area bg_cover pt-120 pb-130"
        style="background-image: url({{ asset('images/contact.jpeg') }})">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title section_title_2 text-center pb-25">
                        <h4 class="title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Hubungi Kami</h4>
                        <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.4s">Jika anda punya pertanyaan
                            atau pengaduan silahkan hubungi kami atau mendatangi sekolah SMKN1 SINJAI</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->

            <form id="contact-form" action="assets/contact.php" method="post" class="wow fadeInUp"
                data-wow-duration="1.3s" data-wow-delay="0.4s">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single_form">
                            <input type="text" placeholder="Name" name="name" id="name" required>
                        </div> <!-- single form -->
                    </div>
                    <div class="col-lg-6">
                        <div class="single_form">
                            <input type="email" placeholder="Email" name="email" id="email" required>
                        </div> <!-- single form -->
                    </div>
                    <div class="col-lg-6">
                        <div class="single_form">
                            <input type="text" placeholder="Phone Number" name="number" id="number" required>
                        </div> <!-- single form -->
                    </div>
                    <div class="col-lg-6">
                        <div class="single_form">
                            <input type="text" placeholder="Subject" name="subject" id="subject" required>
                        </div> <!-- single form -->
                    </div>
                    <div class="col-lg-12">
                        <div class="single_form">
                            <textarea placeholder="Message" name="message" id="message" required></textarea>
                        </div> <!-- single form -->
                    </div>

                    <p class="form-message"></p>

                    <div class="col-lg-12">
                        <div class="single_form text-center">
                            <button class="main-btn" type="submit">SUBMIT</button>
                        </div> <!-- single form -->
                    </div>
                </div> <!-- row -->
            </form>
        </div> <!-- container -->
        <div class="mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="wrapper">
                            <div class="row no-gutters justify-content-between">
                                <div class="row mb-5">
                                    <div class="col-md-3">
                                        <div class="dbox w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="fa fa-map-marker"></span>
                                            </div>
                                            <div class="text">
                                                <p style="color:white"><span>Address:</span><br>Jl. Tekukur No.1, Biringere, Kec. Sinjai Utara, Kabupaten Sinjai, Sulawesi Selatan 92615</br> </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="dbox w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="fa fa-phone"></span>
                                            </div>
                                            <div class="text">
                                                <p style="color:white"><span>Phone:</span> <a href="tel://1234567920">+62 (411) 585365 | +62
                                                        (411) 585367 | +62 (411) 585368</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="dbox w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="fa fa-paper-plane"></span>
                                            </div>
                                            <div class="text">
                                                <p style="color:white"><span>Email:</span> <a href="mailto:info@yoursite.com"><br>SMKN1@sekola.ac.id</br>
                                                    </a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="dbox w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="fa fa-globe"></span>
                                            </div>
                                            <div class="text">
                                                <p style="color:white"><span>Website</span> <a href="#">https://www.SMKN1SINJAI.ac.id</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
