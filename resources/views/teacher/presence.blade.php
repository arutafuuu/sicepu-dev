@extends('teacher.master')

@section('title', 'Kehadiran')

@section('isi')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Tables -->

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <h4 class="m-1 font-weight-bold text-primary">REKAP KEHADIRAN</h4>
                    <a class="btn btn-success ml-auto" href="{{ route('teacher.add.presence') }}">Tambah Rekap</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Siswa Hadir (dari 32)</th>
                                <th>Persentase</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>03/01/2024</th>
                                <th>28</th>
                                <th>87,5%</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection

@section('script')
    <!-- Page level plugins -->
    <script src="{{ asset('theme') }}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('theme') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('theme') }}/js/demo/datatables-demo.js"></script>
@endsection
