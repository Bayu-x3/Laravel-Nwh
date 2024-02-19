@extends('template.master')

@section('h1')
    Kelas
    @endsection
@section('rowTengah')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Memerbarui Data Kelas
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('kelas.update', ['kelas' => $kelas->id_kelas]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama">Nama Kelas</label>
                        <input type="text" name="nama_kelas" class="form-control @error('nama_kelas') {{ 'is-invalid' }} @enderror" value="{{ $kelas->nama_kelas }}" required>
                    </div>
                    <div class="form-group">
                        <label for="kompetensi">Kompetensi Keahlian</label>
    <input type="text" name="kompetensi_keahlian" class="form-control @error('kompetensi_keahlian') {{ 'is-invalid' }} @enderror" value="{{ $kelas->kompetensi_keahlian }}" required>
                    </div>
                    @error('namaKelas')
                    <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                @enderror
                @error('Kompetensi')
                <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
            @enderror
                    <button type="submit" class="btn btn-primary">Update Kelas</button>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
@endsection
