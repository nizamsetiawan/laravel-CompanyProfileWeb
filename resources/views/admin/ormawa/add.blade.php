@extends('layouts.admin_app')

@section('content')
    <div class="theme-inner-banner">
        <div class="overlay">
            <div class="container">
                <h2>Tambah Ormawa</h2>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block section-spacing">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="contact-us-section">
        <div class="container">
            <div class="theme-title-one">
                <p>Pastikan anda mengisi data dengan benar dan mengupload foto program kerja dengan ukuran 360 x 310 pixel
                </p>
            </div>
            <div class="form-wrapper" class="d-flex justify-content-center align-items-center" style="height: 800px">
                <form method="POST" action="{{ route('admin.ormawa.store') }}" class="form-validation" autocomplete="off"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row d-flex justify-content-center align-items-center">
                        <div class="col-sm-8 col-12">
                            <label for="nama" class="form-label">Nama Ormawa</label>
                            <input id="nama" type="text" name="nama" value="{{ old('nama') }}"
                                class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') ?? '' }}"
                                autofocus>
                            @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center align-items-center">
                        <div class="col-sm-8 col-12">
                            <label for="nama_singkatan" class="form-label">Nama Singkatan <span
                                    class="text-danger"><small>(Apabila tidak ada tulis
                                        ulang nama ormawa)</small></span></label>
                            <input id="nama_singkatan" type="text" name="nama_singkatan"
                                value="{{ old('nama_singkatan') }}"
                                class="form-control @error('nama_singkatan') is-invalid @enderror"
                                value="{{ old('nama_singkatan') ?? '' }}" autofocus>
                            @error('nama_singkatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center align-items-center">
                        <div class="col-sm-8 col-12">
                            <label for="nama_instagram" class="form-label">Nama instagram <span
                                    class="text-danger"><small>(Apabila tidak ada tulis
                                        ulang nama ormawa)</small></span></label>
                            <input id="nama_instagram" type="text" name="nama_instagram"
                                value="{{ old('nama_instagram') }}"
                                class="form-control @error('nama_instagram') is-invalid @enderror"
                                value="{{ old('nama_instagram') ?? '' }}" autofocus>
                            @error('nama_instagram')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center align-items-center">
                        <div class="col-sm-8 col-12">
                            <label for="oa_line" class="form-label">Nama Line <span class="text-danger"><small>(Apabila
                                        tidak ada tulis
                                        ulang nama ormawa)</small></span></label>
                            <input id="oa_line" type="text" name="oa_line" value="{{ old('oa_line') }}"
                                class="form-control @error('oa_line') is-invalid @enderror"
                                value="{{ old('oa_line') ?? '' }}" autofocus>
                            @error('oa_line')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row d-flex justify-content-center align-items-center">
                        <div class="col-sm-8 col-12">
                            <label for="deskripsi" class="form-label">Deskripsi <span class="text-danger"><small>(No
                                        Emoticon)</small></span></label>
                            <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" rows="3"
                                value="{{ old('deskripsi') ?? '' }}"></textarea>
                            @error('deskripsi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center align-items-center">
                        <div class="col-sm-8 col-12">
                            <label for="link_foto" class="form-label">Masukkan logo ormawaß <span
                                    class="text-danger"><small>(870 x 450 px)</small></span></label>
                            <input class="form-control @error('link_foto') is-invalid @enderror" type="file"
                                name="link_foto" id="link_foto" value="{{ old('link_foto') ?? '' }}" required>
                            @error('link_foto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="theme-button-one mt-5" style="margin:auto">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
