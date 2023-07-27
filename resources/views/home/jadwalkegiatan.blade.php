@extends('home.layout.content')

@section('content')
    <section id="team" class="team_area pt-120 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title text-center pb-25">
                        <h4 class="title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Jadwal Kegiatan Sekolah
                        </h4>
                        <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.4s">Jadwal Kegiatan Yaang akan
                            Diadakan Oleh Sekolah SMKN1 SINJAI</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kegiatan</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jadwalkegiatan as $jk)
                        <tr>
                            <th scope="row">{{ ++$i }}</th>
                            <td>{{ $jk->judul }}</td>
                            <td>{{ $jk->kategori }}</td>
                            <td>{{ $jk->tanggal_kegiatan }}</td>
                            <td>{{ $jk->body  }}</td>
                            <td>{{ $jk->status  }}</td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </section>
@endsection
