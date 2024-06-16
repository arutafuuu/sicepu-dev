@extends('student.master')

@section('title', 'Mata Pelajaran')

@section('styles')
    <!-- Custom styles for this page -->
    <link href="{{ asset('theme') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('isi')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        {{-- <h1 class="h3 mb-2 text-gray-800">Data Guru</h1> --}}

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-1 font-weight-bold text-primary">DATA MATA PELAJARAN</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Mata Pelajaran</th>
                                <th>Rata-rata Pengetahuan</th>
                                <th>Rata-rata Keterampilan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>IPA Terpadu</th>
                                <th>87</th>
                                <th>89</th>
                                <th>
                                    <a class="btn btn-sm btn-primary" href="{{ route('student.detail') }}">Detail</a>
                                </th>
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
