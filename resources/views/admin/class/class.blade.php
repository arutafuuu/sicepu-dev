@extends('admin.master')

@section('title', 'Kelas')

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
                <div class="row">
                    <h4 class="m-1 font-weight-bold text-primary">DATA KELAS</h4>
                    <a class="btn btn-success ml-auto" href="{{ route('admin.class.add') }}">Tambah Kelas</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id Kelas</th>
                                <th>Kelas</th>
                                <th>Wali Kelas</th>
                                <th>Ketua Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>2401</th>
                                <th>VII A</th>
                                <th>Budi Santoso</th>
                                <th>Aldi Firmansyah</th>
                                <th>
                                    <form action="">
                                        <a href="{{ route('admin.class.edit') }}" class="btn btn-sm btn-warning mb-1">Edit</a>
                                        <button class="btn btn-sm btn-danger mb-1">Hapus</button>
                                    </form>
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
