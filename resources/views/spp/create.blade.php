@extends('template.master')

@section('h1')
    SPP
    @endsection
@section('rowTengah')
<div class="row">
    <div class="col-md-16">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Menambahkan Data SPP
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('spp.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Tahun</label>
                        <input type="number" name="tahun" class="form-control @error('nama') {{ 'is-invalid' }} @enderror" value="{{ @old('tahun') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nominal</label>
                        <input type="number" name="nominal" class="form-control @error('nama') {{ 'is-invalid' }} @enderror" value="{{ @old('nominal') }}" required>
                    </div>
                    @error('tahun')
                    <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                @enderror
                @error('nominal')
                <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
            @enderror
                    <button type="submit" class="btn btn-primary">Tambah SPP</button>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
@endsection
