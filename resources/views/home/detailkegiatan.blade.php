@extends('home.layout.content')

@section('content')
    <!--====== PRICING PART START ======-->

    <section id="pricing" class="pricing_area pt-120 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-25">
                        <h4 class="title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Detail Kegiatan</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-10">
                    @foreach ($detailkegiatan as $dk)
                        <div class="single_pricing text-center mt-30 wow fadeInUp" data-wow-duration="1.3s"
                            data-wow-delay="0.2s">
                            <h4 class="pricing_title">{{ $dk->judul }}</h4>
                            @if ($dk->images)
                                <img class="card-img card-img-left" src="{{ asset('storage/' . $dk->images) }}"
                                    style="width: 800px" alt="Card image" />
                            @else
                                <img id="logo" src="{{ asset('images/logo.png') }}" alt="Logo">
                            @endif
                            <span class="price">{{ $dk->tanggal_kegiatan }}</span>
                            <p>{{ $dk->body }}</p>
                            {{-- <a href="#0" class="mian-btn">Order Now</a> --}}
                        </div> <!-- single pricing -->
                    @endforeach
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PRICING PART ENDS ======-->
@endsection
