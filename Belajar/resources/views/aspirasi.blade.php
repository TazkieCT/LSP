@extends('layouts.main')

@section('container')
    <div class="row d-flex  justify-content-center">
        <div class="col-sm-12 col-md-8 col-lg-6">
            <section class="">
                @if (request('id') != null)
                <div class="alert mt-3 alert-warning alert-dismissible fade show" role="alert">
                    <strong>Terimakasih Telah Melakukan Pengaduan <br>
                        Nomor Pengaduan : {{ request('id') }}</strong><br>
                    <small class="">Silahkan Di Ingat Nomor pengaduannya!!</small>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            
                @endif
                @if (request('nis') != null)
                <div class="alert mt-3 alert-danger alert-dismissible fade show" role="alert">
                <strong> NIS Anda Belum Terdaftar!! </strong><br>
                <small>Silahkan Isi Datanya Kembali Dengan Benar</small>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            
                @endif
                <div class="card">
                    <div class="card-body">
                        <form action="/form/store" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label fw-bold">ID Pelapor</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text fw-bold" id="basic-addon1">NO</span>
                                    <input type="text" class="form-control bg-warning" name="no_adu" readonly value="{{ $no }}" aria-label="Nomor Pengaduan" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Nomor Induk Siswa</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control @error('nis') is-invalid @enderror" name="nis" placeholder="Nomor Induk Siswa" aria-label="Nomor Induk Siswa" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Kategori</label>
                                <select class="form-select" name="kategori" aria-label="select example">
                                    @foreach ($kategori as $kat)
                                    <option value="{{ $kat->Id_kategori }}">{{ $kat->ket_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Lokasi</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control @error('lokasi') is-invalid @enderror" name="lokasi" placeholder="Lokasi" aria-label="Nomor Pengaduan" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Keterangan</label>
                                <div class="input-group mb-3">
                                    <textarea name="ket" class="form-control @error('ket_kategori') is-invalid @enderror" rows="2"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-secondary">Kirim</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    @endsection