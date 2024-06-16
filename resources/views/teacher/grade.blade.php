@extends('teacher.master')

@section('title', 'Nilai')

@section('isi')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Tables -->

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-1 font-weight-bold text-primary">REKAP NILAI</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID Mapel</th>
                                <th>Mata Pelajaran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subjects as $subject)
                            <tr>
                                <th>{{ $subject->subject_id }}</th>
                                <th>{{ $subject->name }}</th>
                                <th>
                                    <a class="btn btn-success" href="{{ route('teacher.add.grade', $subject->subject_id) }}">Tambah</a>
                                    {{-- <a class="btn btn-warning" href="{{ route('teacher.edit.grade') }}">Edit</a> --}}
                                    <button class="btn btn-warning" data-toggle="modal"
                                        data-target="#choiceModal">Edit</button>
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

    <div class="modal fade" id="choiceModal" tabindex="-1" role="dialog" aria-labelledby="choiceModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="choiceModalLabel">Pilih Semester yang akan diedit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('teacher.edit.grade') }}">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="choiceSemester">Pilih Semester</label>
                            {{-- <select class="form-control" id="choiceSemester" name="choiceSemester"> --}}
                            <select class="form-control">
                                <option selected>VII 1</option>
                                <option>VII 2</option>
                                <option>VIII 1</option>
                                <option>VIII 2</option>
                                <option>IX 1</option>
                                <option>IX 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- Page level plugins -->
    <script src="{{ asset('theme') }}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('theme') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('theme') }}/js/demo/datatables-demo.js"></script>
@endsection
