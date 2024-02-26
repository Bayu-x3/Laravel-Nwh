@extends('template.master')

@section('h1')
    Pembayaran
@endsection

@section('rowTengah')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Update Pembayaran
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('pembayaran.update', ['pembayaran' => $pembayaran->id_pembayaran]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="petugas">Petugas</label>
                            <select name="id_petugas" class="form-control @error('id_petugas') is-invalid @enderror">
                                <option value="{{ $pembayaran->petugas->id_petugas }}">{{ $pembayaran->petugas->nama_petugas }}</option>
                                @foreach($petugas as $petugasItem)
                                    <option value="{{ $petugasItem->id_petugas }}">{{ $petugasItem->nama_petugas }}</option>
                                @endforeach
                            </select>
                            @error('id_petugas')
                                <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nisn">Nisn</label>
                            <select name="nisn" class="form-control @error('nisn') is-invalid @enderror">
                                <option value="{{ $pembayaran->siswa->nisn }}">{{ $pembayaran->siswa->nisn }}</option>
                                @foreach($siswa as $siswaItem)
                                    <option value="{{ $siswaItem->nisn }}">{{ $siswaItem->nisn }}</option>
                                @endforeach
                            </select>
                            @error('nisn')
                                <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tgl_bayar">Tangal Bayar</label>
                            <input type="date" name="tgl_bayar" class="form-control @error('tgl_bayar') is-invalid @enderror" value="{{ old('tgl_bayar') }}" required>
                            @error('tgl_bayar')
                                 <option value="{{ $siswaItem->nisn }}">{{ $siswaItem->nisn }}</option>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="bulan_dibayar">Bulan Bayar</label>
                            <input type="text" name="bulan_dibayar" class="form-control @error('bulan_dibayar') is-invalid @enderror" value="{{ old('bulan_dibayar') }}" required>
                            @error('bulan_dibayar')
                                <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                            @enderror
                        </div>

                        
                        <div class="form-group">
                            <label for="tahun_dibayar">Tahun Bayar</label>
                            <input type="text" name="tahun_dibayar" class="form-control @error('tahun_dibayar') is-invalid @enderror" value="{{ old('tahun_dibayar') }}" required>
                            @error('tahun_dibayar')
                                <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="id_spp">SPP</label>
                            <select name="id_spp" class="form-control @error('id_spp') is-invalid @enderror" required>
                                <option value="{{ $pembayaran->spp->id_spp }}">{{ $pembayaran->spp->id_spp }}</option>
                                @foreach($spps as $spp)
                                    <option value="{{ $spp->id_spp }}">{{ $spp->id_spp }}</option>
                                @endforeach
                            </select>
                            @error('id_spp')
                                <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="jumlah_bayar">Jumlah Bayar</label>
                            <input type="number" name="jumlah_bayar" class="form-control @error('jumlah_bayar') is-invalid @enderror" value="{{ $pembayaran->jumlah_bayar }}" required>
                            @error('jumlah_bayar')
                                <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Ubah Pembayaran</button>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
@endsection
