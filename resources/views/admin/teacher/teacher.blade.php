@extends('admin.master')

@section('title', 'Guru')

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
                    <h4 class="m-1 font-weight-bold text-primary">DATA GURU</h4>
                    <a class="btn btn-success ml-auto" href="{{ route('admin.teacher.add') }}">Tambah Guru</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Mata Pelajaran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- <tr>
                                <th>197503211998031005</th>
                                <th>Budi Santoso</th>
                                <th>IPA Terpadu</th>
                                <th>
                                    <form action="">
                                        <a href="{{ route('admin.teacher.detail') }}" class="btn btn-sm btn-primary mb-1">Detail</a>
                                        <a href="{{ route('admin.teacher.edit') }}" class="btn btn-sm btn-warning mb-1">Edit</a>
                                        <button class="btn btn-sm btn-danger mb-1">Hapus</button>
                                    </form>
                                </th>
                            </tr> --}}
                            @foreach ($teachers as $teacher)
                            <tr>
                                <th>{{ $teacher->teacher_id }}</th>
                                <th>{{ $teacher->name }}</th>
                                <th>{{ $teacher->subject }}</th>
                                <th>
                                    <form action="{{ route('admin.teacher.delete', $teacher->teacher_id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('admin.teacher.detail', $teacher->teacher_id) }}" class="btn btn-sm btn-primary mb-1">Detail</a>
                                        <a href="{{ route('admin.teacher.edit', $teacher->teacher_id) }}" class="btn btn-sm btn-warning mb-1">Edit</a>
                                        <button class="btn btn-sm btn-danger mb-1">Hapus</button>
                                    </form>
                                </th>
                            </tr>
                            @endforeach
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
