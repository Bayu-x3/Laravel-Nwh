@extends('template.master')

@section('h1')
    SPP
    @endsection
@section('rowTengah')
<div>
    <h1>Spp Detail</h1>
    <h3>ID: {{ $sppsShow->id_spp}}</h3>
    <h3>Tahun: {{ $sppsShow->tahun }}</h3>
    <h3>Tahun: {{ $sppsShow->nominal }}</h3>
</div>
@endsection
