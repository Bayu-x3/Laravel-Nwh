@extends('template.master')

@section('h1')
    Pembayaran
@endsection

@section('rowTengah')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">DataTables Pembayaran</h6>
                                <a href="{{ route('pembayaran.create') }}" class="btn btn-sm btn-outline-primary">
                                    <i class="fa fa-plus"></i><br>
                                    Tambah Pembayaran
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Petugas</th>
                                                <th>Nisn</th>
                                                <th>Tanggal Bayar</th>
                                                <th>Bulan Bayar</th>
                                                <th>Tahun Bayar</th>
                                                <th>Spp</th>
                                                <th>Jumlah Bayar</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($pembayaran as $key => $value)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>
                                                        @foreach ($petugas as $petugasItem)
                                                            @if ($petugasItem->id_petugas == $value->id_petugas)
                                                                {{ $petugasItem->nama_petugas }}
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    
                                                    <td>
                                                        @foreach ($siswa as $siswaItem)
                                                            @if ($siswaItem->nisn == $value->nisn)
                                                                {{ $siswaItem->nis }}
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td>{{ $value->tgl_bayar }}</td>
                                                    <td>{{ $value->bulan_dibayar }}</td>
                                                    <td>{{ $value->tahun_dibayar }}</td>
                                                    <td>
                                                        @foreach ($spps as $spp)
                                                            @if ($spp->id_spp == $value->id_spp)
                                                                {{ $spp->id_spp }}
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td>{{ 'Rp ' . number_format($value->jumlah_bayar, 0, ',', '.') }}</td>
                                                    <td>
                                                        <a href="{{ route('pembayaran.show', $value->id_pembayaran) }}"
                                                            class="btn btn-sm btn-info">
                                                            Detail
                                                        </a>
                                                        <a href="{{ route('pembayaran.edit', $value->id_pembayaran) }}"
                                                            class="btn btn-sm btn-primary">
                                                            Edit
                                                        </a>
                                                        <form action="{{ route('pembayaran.destroy', $value->id_pembayaran) }}"
                                                            method="POST" style="display: inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="9" class="text-center">Data Masih Kosong</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/datatables-demo.js"></script>

    </body>

    </html>
@endsection
