@extends('layouts.main')

@section('container')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6">
                <a class="navbar-brand fw-bold fs-3" href="/"><img src="{{ asset('img/sekolah.jpg') }}" class="img-fluid" alt="logo" width="700"></a>
                <div class="row m-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis voluptatem excepturi repellendus, enim unde sed deleniti error perspiciatis aperiam, dolor laboriosam ea neque accusantium tenetur quae odit nihil! Commodi, consequuntur.</p>
                    <a href="/form" class="btn btn-danger">Formulir Aspirasi</a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-sm-6">
                <div class="row">
                    <h1>Tentang SMK Telkom Jakarta</h1>
                </div>
                Telkom Schools merupakan perubahan dari Sekolah Telkom Sandhyputra yang dikelola oleh Yayasan Sandhykara Putra Telkom (YSPT). Peluncuran Telkom Schools dilaksanakan di SMK Telkom Jakarta pada tanggal 23 Januari 2014 oleh Dirjen Pendidikan Menengah Kemendikbud RI Prof. Dr. Ir. Achmad Jazidie beserta Dewan Pengurus dan Pembina Yayasan Sandhykara Putra Telkom.<br><br>

                Selanjutnya mulai tanggal 21 Maret 2014 berdasarkan arahan dari jajaran Direksi PT TELKOM selaku Dewan pembina, Yayasan Sandhykara Putra Telkom secara resmi digabung dengan Yayasan Pendidikan Telkom (YPT) dan berubah nama menjadi Telkom Foundation. Sehingga Telkom Foundation selanjutnya menjadi Yayasan pengelola Telkom Schools untuk tingkat pendididan Dasar dan Menengah serta Telkom University untuk tingkat pendidikan tinggi.</div>
        </div>
    </div>
@endsection

@section('galeri')
    <div class="border p-5 container-fluid bg-danger mt-5">
        <div class="mx-5">
            <h1 class="d-flex justify-content-center text-light fw-bold">Galeri SMK Telkom</h1>
        </div>
        <div class="container col-12 col-md-12 col-sm-6">
            <div class="row my-5">
                <div class="col-12 col-md-4 my-3">
                    <div class="card">
                        <img src="{{ asset('img/foto6.jpg') }}" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col-12 col-md-4 my-3">
                    <div class="card">
                        <img src="{{ asset('img/foto1.jpg') }}" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col-12 col-md-4 my-3">
                    <div class="card">
                        <img src="{{ asset('img/foto2.jpg') }}" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col-12 col-md-4 my-3">
                    <div class="card">
                        <img src="{{ asset('img/foto3.jpg') }}" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col-12 col-md-4 my-3">
                    <div class="card">
                        <img src="{{ asset('img/foto4.jpg') }}" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col-12 col-md-4 my-3">
                    <div class="card">
                        <img src="{{ asset('img/foto5.jpg') }}" class="card-img-top" alt="...">
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection