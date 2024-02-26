@extends('template.master')

@section('h1')
    Siswa
@endsection

@section('rowTengah')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Edit Siswa
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @if ($siswa)
                    <form action="{{ route('siswa.update', $siswa->nisn) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nisn">Nisn:</label>
                                <input type="text" name="nisn" value="{{ old('nisn', $siswa->nisn) }}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="nis">Nis:</label>
                                <input type="text" name="nis" value="{{ old('nis', $siswa->nis) }}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Siswa:</label>
                                <input type="text" name="nama" value="{{ $siswa->nama }}" class="form-control"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="id_kelas">Kelas:</label>
                                <select name="id_kelas" class="form-control" required>
                                    @foreach ($kelases as $kelas)
                                        <option value="{{ $kelas->id_kelas }}"
                                            @if ($kelas->id_kelas == $siswa->id_kelas) selected @endif>
                                            {{ $kelas->nama_kelas }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat:</label>
                                <input type="text" name="alamat" value="{{ $siswa->alamat }}" class="form-control"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="no_telp">No. Telepon:</label>
                                <input type="text" name="no_telp" value="{{ $siswa->no_telp }}" class="form-control"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="id_spp">ID SPP:</label>
                                <select name="id_spp" class="form-control" required>
                                    @foreach ($spps as $spp)
                                        <option value="{{ $spp->id_spp }}"
                                            @if ($spp->id_spp == $siswa->id_spp) selected @endif>
                                            {{ $spp->nominal }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    @else
                        <p>Data siswa tidak ditemukan.</p>
                    @endif
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
@endsection
