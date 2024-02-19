@extends('template.master')

@section('h1')
    Petugas
    @endsection
@section('rowTengah')
<div>
    <h1>Petugas Detail</h1>
    <h3>ID: {{ $petugas->id_petugas}}</h3>
    <h3>Username: {{ $petugas->username }}</h3>
    <h3>Password: {{ $petugas->password }}</h3>
    <h3>Nama Petugas: {{ $petugas->nama_petugas }}</h3>
    <h3>Level: {{ $petugas->level }}</h3>
    <br>
    <a href="{{route('petugas.index')}}" class="btn btn-info">Back</a>
</div>
@endsection
