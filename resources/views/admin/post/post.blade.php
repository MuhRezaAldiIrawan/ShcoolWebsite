{{-- Extends layout --}}
@extends('admin.components.layout')



{{-- Content --}}
@section('content')
    <div class="col-lg-12 mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="container">
                    <div class="row mt-4 mb-4">
                        @foreach ($listpost as $l)
                            <div class="col-md-4 mt-2">
                                @if ($l->images)
                                    <img class="card-img card-img-left" src="{{ asset('storage/' . $l->images) }}"
                                        style="max-width:300px" alt="Card image" />
                                @else
                                    <img id="logo" src="{{ asset('images/logo.png') }}" alt="Logo">
                                @endif
                            </div>
                            <div class="col-md-8">
                                <h4 class="m-b-10 mt-3">{{ $l->judul }}</h4>
                                <div class="d-flex align-items-center m-t-5 m-b-15">
                                    <div class="avatar avatar-image avatar-sm">
                                        <img id="logo" src="{{ asset('images/logo.png') }}" alt="Logo">
                                    </div>
                                    <div class="m-l-10">
                                        <span class="text-gray font-weight-semibold">Tanggal Kegiatan</span>
                                        <span class="m-h-5 text-gray">|</span>
                                        <span class="text-gray">{{ $l->tanggal_kegiatan }}</span>
                                    </div>
                                </div>
                                <p class="m-b-20">{{ Str::limit($l->body, 300) }}</p>
                                <div class="text-right">
                                    <div class="card-footer">
                                        <a href="/detailpost/{{ $l->id }}">
                                            <button type="button" class="btn btn-primary m-1">
                                                <i class='bx '></i>
                                                <span class="tf-icons bx bxs-log-in-circle"></span>&nbsp; Read More
                                            </button>
                                        </a>
                                        <a href="/editpost/{{ $l->id }}">
                                            <button type="button" class="btn btn-icon btn-secondary">
                                                <span class="tf-icons bx bx-edit-alt"></span>
                                            </button>
                                        </a>
                                        <a href="/deletepost/{{ ($l->id) }}">
                                            <button type="button" class="btn btn-icon btn-danger">
                                                <span class="tf-icons bx bx-trash"></span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
