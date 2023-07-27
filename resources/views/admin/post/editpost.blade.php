{{-- Extends layout --}}
@extends('admin.components.layout')

{{-- Content --}}
@section('content')
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Tambah Post Kegiatan/Berita</h5>
                <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                @foreach ($editpost as $e)
                    <form action="{!! url('/ubahdata/update/' . $e->id) !!}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" value="{{ $e->id }}" hidden readonly>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="judul" name="judul"
                                    placeholder="judul Kegiatan" value="{{ $e->judul }}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Kategori</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="kategori" name="kategori"
                                    aria-label="Default select example">
                                    <option value="Olahraga">Olahraga</option>
                                    <option value="Seni">Seni</option>
                                    <option value="Keilmuan">Keilmuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Tanggal Kegiatan</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tanggal_kegiatan" name="tanggal_kegiatan"
                                    placeholder="Tanggal Kegiatan" value="{{ $e->tanggal_kegiatan }}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Body</label>
                            <div class="col-sm-10">
                                <textarea id="body" name="body" class="form-control" placeholder="Deskripsi " aria-label="Deskripsi"
                                    aria-describedby="basic-icon-default-message2">{{ $e->body }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Images</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="images" name="images" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Status Kegiatan</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="status" name="status" aria-label="Default select example">
                                    <option value="on-comming">on-comming</option>
                                    <option value="on-going">on-going</option>
                                    <option value="finish">finish</option>
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update Kegiatan</button>
                            </div>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
    </div>
@endsection
