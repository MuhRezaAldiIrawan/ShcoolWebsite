@extends('home.layout.content')

@section('content')
    <section id="contact" class="contact_area bg_cover pt-120 pb-130"
        style="background-image: url({{ asset('images/contact.jpeg') }})">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title section_title_2 text-center pb-25">
                        <h4 class="title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Video Perkenalan Sekolah
                        </h4>
                        <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.4s">kami mempersembahkan video
                            singkat tentang Sekolah Kami SMKN1 SINJAI</p>

                        <div class="d-flex justify-content-center mt-5 ">
                            <iframe width="760" height="415" src="https://www.youtube.com/embed/KlO5c79G6yo"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                            {{-- <video controls width="720" height="360">
                                <source src="{{ asset('path/ke/video/anda/nama_video.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video> --}}
                        </div>

                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
@endsection
