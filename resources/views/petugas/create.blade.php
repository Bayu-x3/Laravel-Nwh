@extends('template.master')

@section('h1')
    Petugas
@endsection

@section('rowTengah')
<div class="row">
    <div class="col-md-16">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Menambahkan Data Petugas
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('petugas.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control @error('username') {{ 'is-invalid' }} @enderror" value="{{ old('username') }}" required>
                        @error('username')
                            <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control @error('password') {{ 'is-invalid' }} @enderror" required>
                        @error('password')
                            <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Petugas</label>
                        <input type="text" name="nama_petugas" class="form-control @error('nama') {{ 'is-invalid' }} @enderror" value="{{ old('nama') }}" required>
                        @error('nama')
                            <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="level">level</label><br>
                        <input type="radio" name="level" value="admin" required> Admin
                        <input type="radio" name="level" value="petugas" required> Petugas
                        @error('role')
                            <br><span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Petugas</button>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
@endsection
