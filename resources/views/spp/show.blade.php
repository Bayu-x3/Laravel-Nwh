@extends('template.master')

@section('h1')
    SPP
    @endsection
@section('rowTengah')
<div>
    <h1>Spp Detail</h1>
    <h3>ID: {{ $spp->id_spp}}</h3>
    <h3>Tahun: {{ $spp->tahun }}</h3>
    <h3>Tahun: {{ $spp->nominal }}</h3>
    <br>
    <a href="{{route('spp.index')}}" class="btn btn-info">Back</a>
</div>
@endsection
