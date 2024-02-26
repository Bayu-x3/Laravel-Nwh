@extends('template.master')

@section('h1')
    Pembayaran
@endsection

@section('rowTengah')
    <div>
        <h1>Pembayaran Detail</h1>
        <h3>Petugas: {{ $pembayaran->id_petugas }}</h3>
        <h3>Nisn: {{ $pembayaran->nisn }}</h3>
        <h3>Tanggal Bayar: {{ $pembayaran->tgl_bayar }}</h3>
        <h3>Bulan Bayar: {{ $pembayaran->bulan_dibayar }}</h3>
        <h3>Alamat: {{ $pembayaran->tahun_dibayar }}</h3>
        <h3>Spp: {{ $pembayaran->id_spp }}</h3>
        <h3>Jumlah SPP: {{ $pembayaran->jumlah_bayar }}</h3>
        <br>
        <a href="{{ route('pembayaran.index') }}" class="btn btn-info">Back</a>
    </div>
@endsection
