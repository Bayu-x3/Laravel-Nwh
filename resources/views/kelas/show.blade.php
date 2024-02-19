@extends('template.master')

@section('h1')
    Kelas
    @endsection
@section('rowTengah')
<div>
    <h1>Kelas Detail</h1>
    <h3>ID: {{ $kelas->id_kelas}}</h3>
    <h3>Nama Kelas: {{ $kelas->nama_kelas }}</h3>
    <h3>Kompetensi Keahlian: {{ $kelas->kompetensi_keahlian }}</h3>
    <br>
    <a href="{{route('kelas.index')}}" class="btn btn-info">Back</a>
</div>
@endsection
