@extends('template.master')

@section('h1')
    Siswa
@endsection

@section('rowTengah')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Menambahkan Data Siswa
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('siswa.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nisn">NISN</label>
                        <input type="text" name="nisn" class="form-control @error('nisn') is-invalid @enderror" value="{{ old('nisn') }}" required>
                        @error('nisn')
                            <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                        @enderror
                    </div> 
                    <div class="form-group">
                        <label for="nis">NIS</label>
                        <input type="text" name="nis" class="form-control @error('nis') is-invalid @enderror" value="{{ old('nis') }}" required>
                        @error('nis')
                            <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                        @enderror
                    </div>                    

                    <div class="form-group">
                        <label for="nama">Nama Siswa</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" required>
                        @error('nama')
                            <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="id_kelas">Kelas</label>
                        <select name="id_kelas" class="form-control @error('id_kelas') is-invalid @enderror" required>
                            <option value="">Pilih Kelas</option>
                            @foreach($kelases as $kelas)
                                <option value="{{ $kelas->id_kelas }}">{{ $kelas->nama_kelas }}</option>
                            @endforeach
                        </select>
                        @error('id_kelas')
                            <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" required>{{ old('alamat') }}</textarea>
                        @error('alamat')
                            <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="no_telp">Nomor Telepon</label>
                        <input type="text" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror" value="{{ old('no_telp') }}" required>
                        @error('no_telp')
                            <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="id_spp">SPP</label>
                        <select name="id_spp" class="form-control @error('id_spp') is-invalid @enderror" required>
                            <option value="">Pilih SPP</option>
                            @foreach($spps as $spp)
                                <option value="{{ $spp->id_spp }}">{{ $spp->tahun . ' - ' . $spp->nominal }}</option>
                            @endforeach
                        </select>
                        @error('id_spp')
                            <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah Siswa</button>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
@endsection
