@extends('home.layout.content')

@section('content')
    <section id="contact" class="contact_area bg_cover pt-120 pb-130"
        style="background-image: url({{ asset('images/contact.jpeg') }})">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title section_title_2 text-center pb-25">
                        <h4 class="title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Contact Us</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="d-flex justify-content-center">
                <img src="{{ asset('images/c1.png') }}" alt="">
            </div>
            <div class="d-flex justify-content-center mt-2">
                <img src="{{ asset('images/c2.png') }}" alt="">
            </div>
            <div class="d-flex justify-content-center mt-2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.841720081151!2d120.25015327441152!3d-5.129184051900676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbc25d7b7def921%3A0x22320dbcbe2a1833!2sSMK%20Negeri%201%20Sinjai!5e0!3m2!1sid!2sid!4v1690423200899!5m2!1sid!2sid" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div> <!-- container -->
    </section>
@endsection
