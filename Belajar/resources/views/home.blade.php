@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-center mb-3">
        <img src="{{ asset('img/SMK.jpg') }}" alt="Sekolah" width="700">
    </div>
    <p>Telkom Schools merupakan perubahan dari Sekolah Telkom Sandhyputra yang dikelola oleh Yayasan Sandhykara Putra Telkom (YSPT). Peluncuran Telkom Schools dilaksanakan di SMK Telkom Jakarta pada tanggal 23 Januari 2014 oleh Dirjen Pendidikan Menengah Kemendikbud RI Prof. Dr. Ir. Achmad Jazidie beserta Dewan Pengurus dan Pembina Yayasan Sandhykara Putra Telkom.</p>
    <a href="/form" class="btn btn-danger">Formulir Aspirasi</a>
@endsection