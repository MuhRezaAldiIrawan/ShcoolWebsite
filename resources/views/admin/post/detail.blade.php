{{-- Extends layout --}}
@extends('admin.components.layout')



{{-- Content --}}
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="container">
                @foreach ($detailpost as $d)
                    <h2 class="font-weight-normal m-b-10">{{ $d->judul }}</h2>
                    <div class="d-flex m-b-30">
                        <div class="avatar avatar-cyan avatar-img">
                            <img id="logo" src="{{ asset('images/logo.png') }}" alt="Logo">
                        </div>
                        <div class="m-l-15">
                            <a href="javascript:void(0);"
                                class="text-dark m-b-0 font-weight-semibold">{{ auth()->user()->nama }}</a>
                            <p class="m-b-0 text-muted font-size-13">{{ $d->tanggal_kegiatan }}</p>
                        </div>
                    </div>
                    @if ($d->images)
                        <div class="container centered-image">
                            <img class=" card-img card-img-left d-flex justify-content-center items-center align-items-center "
                                src="{{ asset('storage/' . $d->images) }}" style="max-width:500px" alt="Card image" />
                        </div>
                    @else
                        <img id="logo" src="{{ asset('images/logo.png') }}" alt="Logo">
                    @endif
                    <div class="m-t-30">
                        <p>{{ $d->body }}</p>
                    </div>
                    <div class="row mt-3">
                        <div class="d-grid gap-2 col-lg-12 mx-auto">
                            <a href="/post">
                                <button type="button" class="btn btn-primary">
                                    <span class="tf-icons bx bx-arrow-back"></span>&nbsp; Kembali
                                  </button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
