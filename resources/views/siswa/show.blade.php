@extends('template.master')

@section('h1')
    Siswa
@endsection

@section('rowTengah')
    <div>
        <h1>Siswa Detail</h1>
        <h3>NISN: {{ $siswa->nisn }}</h3>
        <h3>NIS: {{ $siswa->nis }}</h3>
        <h3>Nama Siswa: {{ $siswa->nama }}</h3>
        <h3>Kelas: {{ $siswa->kelas->nama_kelas }}</h3>
        <h3>Alamat: {{ $siswa->alamat }}</h3>
        <h3>Nomor Telepon: {{ $siswa->no_telp }}</h3>
        <h3>Jumlah SPP: {{ $siswa->spp->nominal }}</h3>
        <br>
        <a href="{{ route('siswa.index') }}" class="btn btn-info">Back</a>
    </div>
@endsection
