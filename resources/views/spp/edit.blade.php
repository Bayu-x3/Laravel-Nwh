@extends('template.master')

@section('h1')
    SPP
    @endsection
@section('rowTengah')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Memerbarui Data SPP
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('spp.update', ['id' => $sppsEdit->id_spp]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama">Tahun</label>
                        <input type="number" name="tahun" class="form-control @error('nama') {{ 'is-invalid' }} @enderror" value="{{ $sppsEdit->tahun }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nominal</label>
                        <input type="number" name="nominal" class="form-control @error('nama') {{ 'is-invalid' }} @enderror" value="{{ $sppsEdit->nominal }}" required>
                    </div>
                    @error('tahun')
                    <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                @enderror
                @error('nominal')
                <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
            @enderror
                    <button type="submit" class="btn btn-primary">Update SPP</button>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
@endsection
