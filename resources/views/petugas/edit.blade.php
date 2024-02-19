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
                    Memerbarui Data Petugas
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('petugas.update', ['petugas' => $petugas->id_petugas]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control @error('username') {{ 'is-invalid' }} @enderror" value="{{ $petugas->username }}" required>
                        @error('username')
                            <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control @error('password') {{ 'is-invalid' }} @enderror" value="{{ $petugas->password }}" required>
                        @error('password')
                            <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Petugas</label>
                        <input type="text" name="nama_petugas" class="form-control @error('nama') {{ 'is-invalid' }} @enderror" value="{{ $petugas->nama_petugas }}" required>
                        @error('nama')
                            <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="level">Level</label><br>
                        <input type="radio" name="level" value="admin" required {{ $petugas->level === 'admin' ? 'checked' : '' }}> Admin
                        <input type="radio" name="level" value="petugas" required {{ $petugas->level === 'petugas' ? 'checked' : '' }}> Petugas
                        @error('level')
                            <br><span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                        @enderror
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
