@extends('template.master')

@section('h1')
    Kelas
    @endsection
@section('rowTengah')
<div class="row">
    <div class="col-md-16">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Menambahkan Data Kelas
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('kelas.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="namaKelas">Nama Kelas</label>
                        <input type="text" name="nama_kelas" class="form-control @error('nama_kelas') {{ 'is-invalid' }} @enderror" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="kompetensi">Kompetensi Keahlian</label>
                        <input type="text" name="kompetensi_keahlian" class="form-control @error('kompetensi_keahlian') {{ 'is-invalid' }} @enderror" value="" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Kelas</button>
                </form>                
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
@endsection
