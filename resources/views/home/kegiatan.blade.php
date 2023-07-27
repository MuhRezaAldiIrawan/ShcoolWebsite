@extends('home.layout.content')

@section('content')
    <section id="team" class="team_area pt-120 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title text-center pb-25">
                        <h4 class="title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Kegiatan Sekolah
                        </h4>
                        <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.4s">Kegiatan Sekolah yang
                            dilakuknbaik itu dalam bidang Olahraga, Seni dan Keilmuan</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center team_active">
                @foreach ($listkegiatan as $l)
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="single_team mt-30 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                            @if ($l->images)
                                <img class="card-img card-img-left" src="{{ asset('storage/' . $l->images) }}"
                                    style="width: 800px" alt="Card image" />
                            @else
                                <img id="logo" src="{{ asset('images/logo.png') }}" alt="Logo">
                            @endif
                            <div class="team_content">
                                <h4 class="team_name"><a href="/detailkegiatan/{{ $l->id }}">{{ $l->judul }}</a>
                                </h4>
                                <p>{{ $l->tanggal_kegiatan }}</p>
                                <ul class="social">
                                    <li><a href="#0"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="#0"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="#0"><i class="lni lni-linkedin-original"></i></a></li>
                                </ul>
                            </div>
                        </div> <!-- single team -->
                    </div>
                @endforeach
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
@endsection
